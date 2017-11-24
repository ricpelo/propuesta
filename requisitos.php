#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

PHPExcel_Settings::setLocale('es');
$objPHPExcel = PHPExcel_IOFactory::load("requisitos.xlsx");
$objWorksheet = $objPHPExcel->getSheet(0);
$highestRow = $objWorksheet->getHighestDataRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestDataColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

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

    if ($incidencia === null) {
        // Crear la incidencia con ghi y actualizar el .xlsx
        $mensaje = "($codigo) " . $corta . "\n" . $larga;
        $hito = mb_substr($entrega, 1, 1);
        // `ghi open -m $mensaje --claim -M $hito -L label`
    }
    

    echo "| **$codigo**     | **$corta**   |" . PHP_EOL;
    echo "| --------------: | :----------- |" . PHP_EOL;
    echo "| **Descripción** | $largaMd     |" . PHP_EOL;
    echo "| **Prioridad**   | $prioridad   |" . PHP_EOL;
    echo "| **Tipo**        | $tipo        |" . PHP_EOL;
    echo "| **Complejidad** | $complejidad |" . PHP_EOL;
    echo "| **Entrega**     | $entrega     |" . PHP_EOL;
    echo "| **Incidencia**  | $incidencia  |" . PHP_EOL;
    echo "\n[]()\n\n";

    $objWorksheet->getCellByColumnAndRow(7, $row)->setValue('hola');
}

$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$writer->save('requisitos2.xlsx');
