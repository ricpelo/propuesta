#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

PHPExcel_Settings::setLocale('es');
$objPHPExcel = PHPExcel_IOFactory::load("requisitos.xlsx");
$objWorksheet = $objPHPExcel->getSheet(0);
$highestRow = $objWorksheet->getHighestDataRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestDataColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5
$requisitos = '';
$resumen = "\n\n### Cuadro resumen\n\n"
         . "| **Requisito** | **Prioridad** | **Tipo** | **Complejidad** | **Entrega** | **Incidencia** |\n"
         . "| :------------ | :-----------: | :------: | :-------------: | :---------: | :------------: |\n";

$salida = `ghi`;
$matches = [];

if (preg_match('%# ([^ ]+/[^ ]+)%', $salida, $matches) === 1) {
    $repo = $matches[1];
} else {
    echo "Error: no se puede identificar el repositorio de GitHub asociado.\n";
    exit(1);
}

for ($row = 2; $row <= $highestRow; $row++) {
    $codigo      = $objWorksheet->getCell("A$row")->getValue();
    $corta       = $objWorksheet->getCell("B$row")->getValue();
    $larga       = $objWorksheet->getCell("C$row")->getValue();
    $largaMd     = preg_replace('/\n/u', ' ', $larga);
    $prioridad   = $objWorksheet->getCell("D$row")->getValue();
    $tipo        = $objWorksheet->getCell("E$row")->getValue();
    $complejidad = $objWorksheet->getCell("F$row")->getValue();
    $entrega     = $objWorksheet->getCell("G$row")->getValue();
    $incidencia  = $objWorksheet->getCell("H$row")->getValue();
    $link = '';

    if ($incidencia === null) {
        // Crear la incidencia con ghi y actualizar el .xlsx
        $mensaje = "($codigo) $corta\n$larga";
        $prioridadGhi = mb_strtolower($prioridad);
        $tipoGhi = mb_strtolower($tipo);
        $complejidadGhi = mb_strtolower($complejidad);
        $entregaGhi = mb_substr($entrega, 1, 1);
        echo "Generando incidencia para $codigo en GitHub...";
        $salida = `ghi open -m "$mensaje" --claim -L $prioridadGhi -L $tipoGhi -L $complejidadGhi -M $entregaGhi`;
        $matches = [];
        if (preg_match('/^#([0-9]+):/', $salida, $matches) === 1) {
            $incidencia = $matches[1];
            $link = "https://github.com/$repo/issues/$incidencia";
            echo "#$incidencia\n";
        } else {
            echo "\nError: no se ha podido crear la incidencia en GitHub.\n";
        }
    }

    $requisitos .= "| **$codigo**     | **$corta**           |\n"
                 . "| --------------: | :------------------- |\n"
                 . "| **Descripción** | $largaMd             |\n"
                 . "| **Prioridad**   | $prioridad           |\n"
                 . "| **Tipo**        | $tipo                |\n"
                 . "| **Complejidad** | $complejidad         |\n"
                 . "| **Entrega**     | $entrega             |\n"
                 . "| **Incidencia**  | [$incidencia]($link) |\n"
                 . "\n[]()\n\n";

    $resumen .= "| (**$codigo**) $corta | $prioridad | $tipo | $complejidad | $entrega | [$incidencia]($link) |\n";

    $objWorksheet->setCellValue("H$row", $incidencia);
    $objWorksheet->getCell("H$row")->getHyperlink()->setUrl($link);
}

file_put_contents('requisitos.md', $requisitos . $resumen, LOCK_EX);
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$writer->save('requisitos.xlsx');
