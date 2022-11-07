<?php

require 'vendor/autoload.php';

$client = new \Github\Client();
$token = getenv('GITHUB_TOKEN');
$client->authenticate($token, null, Github\AuthMethod::ACCESS_TOKEN);
$login = $client->currentUser()->show()['login'];
$repo = 'propuesta';
$project_number = 3;

$query = <<<EOT
query {
    user(login: "$login") {
        projectV2(number: $project_number) {
            id
        }
    }
}
EOT;

$query = <<<EOT
query{
    user(login: "$login") {
        projectsV2(first: 20) {
            nodes {
                id
                title
            }
        }
    }
}
EOT;

$result = $client->api('graphql')->execute($query);
var_dump($result); die();

$result = $client->api('graphql')->execute($query);
$project_id = $result['data']['user']['projectV2']['id'];
var_dump($project_id);

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

var_dump($status_id);
var_dump($todo_id);

$query = <<<EOT
query FindRepo {
    repository(owner: "$login", name: "$repo") {
        id
    }
}  
EOT;

$result = $client->api('graphql')->execute($query);
$repo_id = $result['data']['repository']['id'];
var_dump($repo_id);

$query = <<<EOT
mutation CreateIssue {
    createIssue(input: {
        repositoryId: "$repo_id",
        title: "TestIssue",
        body: "Not able to create an issue",
    }) {
        issue {
            id
            number
            body
        }
    }
}
EOT;

$result = $client->api('graphql')->execute($query);
var_dump($result);
$issue_id = $result['data']['createIssue']['issue']['id'];

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
var_dump($result);
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
var_dump($result);
