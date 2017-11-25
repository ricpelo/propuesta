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
         . "| **Requisito** | **Prioridad** | **Tipo** | **Complejidad** | **Entrega ** | **Incidencia** |\n"
         . "| :------------ | :-----------: | :------: | :-------------: | :----------: | :------------: |\n";

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

    $requisitos .= "| **$codigo**     | **$corta**   |\n"
                 . "| --------------: | :----------- |\n"
                 . "| **Descripción** | $largaMd     |\n"
                 . "| **Prioridad**   | $prioridad   |\n"
                 . "| **Tipo**        | $tipo        |\n"
                 . "| **Complejidad** | $complejidad |\n"
                 . "| **Entrega**     | $entrega     |\n"
                 . "| **Incidencia**  | $incidencia  |\n"
                 . "\n[]()\n\n";

    $resumen .= "| (**$codigo**) $corta | $prioridad | $tipo | $complejidad | $entrega | $incidencia |\n";

    $objWorksheet->getCellByColumnAndRow(7, $row)->setValue('hola');
}

file_put_contents('requisitos.md', $requisitos, LOCK_EX);
file_put_contents('resumen.md', $resumen, LOCK_EX);
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$writer->save('requisitos2.xlsx');
