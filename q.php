#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

PHPExcel_Settings::setLocale('es');
$objPHPExcel = PHPExcel_IOFactory::load("Requisitos.xlsx");
$objWorksheet = $objPHPExcel->getSheet(0);
$highestRow = $objWorksheet->getHighestDataRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestDataColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

echo '<table>' . "\n";
for ($row = 1; $row <= $highestRow; $row++) {
    echo '<tr>' . PHP_EOL;
    for ($col = 0; $col < $highestColumnIndex; $col++) {
        echo '<td>' . 
             $objWorksheet->getCellByColumnAndRow($col, $row)
                 ->getValue() . 
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
    if ($row > 1) $objWorksheet->getCellByColumnAndRow($col - 1, $row)->setValue('hola');
}
echo '</table>' . PHP_EOL;
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$writer->save('Requisitos2.xlsx');
