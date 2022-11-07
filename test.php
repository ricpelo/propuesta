<?php

require 'vendor/autoload.php';

$client = new \Github\Client();
$token = getenv('GITHUB_TOKEN');
$client->authenticate($token, null, Github\AuthMethod::ACCESS_TOKEN);
$login = $client->currentUser()->show()['login'];
$repo = $argv[2]; // 'propuesta';

// $project_number = 3;

// $query = <<<EOT
// query {
//     user(login: "$login") {
//         projectV2(number: $project_number) {
//             id
//         }
//     }
// }
// EOT;

$query = <<<EOT
query{
    user(login: "$login") {
        projectsV2(first: 20) {
            nodes {
                id
                number
                public
                title
            }
        }
    }
}
EOT;

$result = $client->api('graphql')->execute($query);

if (!isset($result['data']['user']['projectsV2'])
    || !isset($result['data']['user']['projectsV2']['nodes'])
    || empty($result['data']['user']['projectsV2']['nodes'])) {
    echo "No se han encontrado proyectos en la cuenta del usuario.\n";
    exit(1);
}

$projects = $result['data']['user']['projectsV2']['nodes'];

while (true) {
    echo "Proyectos en la cuenta del usuario:\n";

    foreach ($projects as $k => $project) {
        echo "$k: #{$project['number']} {$project['title']}\n";
    }

    echo "Seleccione uno: ";
    $project_number = '';
    fscanf(STDIN, '%s', $project_number);
    if (!isset($projects[$project_number])) {
        echo "Error: opción incorrecta.\n";
    } else {
        $project_id = $projects[$project_number]['id'];
        break;
    }
}

echo "La opción elegida es $project_number\n";
echo "El ID del proyecto es $project_id\n";

#$result = $client->api('graphql')->execute($query);
#$project_id = $result['data']['user']['projectV2']['id'];
#var_dump($project_id);

$query = <<<EOT
query{
    node(id: "$project_id") {
        ... on ProjectV2 {
            fields(first: 20) {
                nodes {
                    ... on ProjectV2Field {
                        id
                        name
                    }
                    ... on ProjectV2IterationField {
                        id
                        name
                        configuration {
                            iterations {
                                startDate
                                id
                            }
                        }
                    }
                    ... on ProjectV2SingleSelectField {
                        id
                        name
                        options {
                            id
                            name
                        }
                    }
                }
            }
        }
    }
}
EOT;

$result = $client->api('graphql')->execute($query);

foreach ($result['data']['node']['fields']['nodes'] as $node) {
    if ($node['name'] == 'Status') {
        $status_id = $node['id'];
        foreach ($node['options'] as $options) {
            if ($options['name'] == 'Todo') {
                $todo_id = $options['id'];
                break;
            }
        }
        break;
    }
}

if (!isset($status_id) || !isset($todo_id)) {
    echo "Error: El proyecto no tiene un Status: Todo\n";
    exit(1);
}

$query = <<<EOT
query FindRepo {
    repository(owner: "$login", name: "$repo") {
        id
    }
}  
EOT;

$result = $client->api('graphql')->execute($query);

if (!isset($result['data']['repository'])
    || empty($result['data']['repository'])) {
    echo "Error: no se ha encontrado el repositorio.\n";
    exit(1);
}

$repo_id = $result['data']['repository']['id'];

$result = $client->api('issue')->create($login, $repo, [
    'title' => "(R999) Prueba",
    'body' => "Prueba prueba",
    'assignee' => $login,
    'milestone' => 1,
    'labels' => [
        'Importante',
        'Funcional',
        'Media',
    ],
]);

$issue_id = $result['node_id'];

// $query = <<<EOT
// mutation CreateIssue {
//     createIssue(input: {
//         repositoryId: "$repo_id",
//         title: "TestIssue",
//         body: "Not able to create an issue",
//     }) {
//         issue {
//             id
//             number
//             body
//         }
//     }
// }
// EOT;

// $result = $client->api('graphql')->execute($query);

// if (!isset($result['data']['createIssue'])
//     || !isset($result['data']['createIssue']['issue'])
//     || empty($result['data']['createIssue']['issue'])) {
//     echo "Error: no se ha podido crear la incidencia.\n";
//     exit(1);
// }

// $issue_id = $result['data']['createIssue']['issue']['id'];

$query = <<<EOT
mutation {
    addProjectV2ItemById(input: {projectId: "$project_id" contentId: "$issue_id"}) {
      item {
        id
      }
    }
  }
EOT;

$result = $client->api('graphql')->execute($query);

if (!isset($result['data']['addProjectV2ItemById'])
    || !isset($result['data']['addProjectV2ItemById']['item'])
    || empty($result['data']['addProjectV2ItemById']['item'])) {
    echo "Error: no se ha podido asignar la incidencia al proyecto.\n";
    exit(1);
}

$item_id = $result['data']['addProjectV2ItemById']['item']['id'];

$query = <<<EOT
mutation {
    updateProjectV2ItemFieldValue(
      input: {
        projectId: "$project_id"
        itemId: "$item_id"
        fieldId: "$status_id"
        value: { 
          singleSelectOptionId: "$todo_id"        
        }
      }
    ) {
      projectV2Item {
        id
      }
    }
  }
EOT;

$result = $client->api('graphql')->execute($query);
// $result['data']['updateProjectV2ItemFieldValue']['projectV2Item']['id']

if (!isset($result['data']['updateProjectV2ItemFieldValue'])
    || !isset($result['data']['updateProjectV2ItemFieldValue']['projectV2Item'])
    || empty($result['data']['updateProjectV2ItemFieldValue']['projectV2Item'])) {
    echo "Error: no se ha podido poner el Status: Todo a la incidencia en el proyecto.\n";
    exit(1);
}