#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

$objPHPExcel = PHPExcel_IOFactory::load("Requisitos.ods");

$objWorksheet = $objPHPExcel->getActiveSheet();
// Get the highest row and column numbers referenced in the worksheet
$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

echo '<table>' . "\n";
for ($row = 1; $row <= $highestRow; ++$row) {
    echo '<tr>' . PHP_EOL;
    for ($col = 0; $col < $highestColumnIndex; ++$col) {
        echo '<td>' . 
             $objWorksheet->getCellByColumnAndRow($col, $row)
                 ->getValue() . 
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
    if ($row > 1) $objWorksheet->getCellByColumnAndRow($col - 1, $row)->setValue('hola');
}
echo '</table>' . PHP_EOL;
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'OpenDocument');
$writer->save('Requisitos.ods');
