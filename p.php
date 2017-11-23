<?php

require 'vendor/autoload.php';

$objPHPExcel = PHPExcel_IOFactory::load("Requisitos.ods");

$objWorksheet = $objPHPExcel->getActiveSheet();

echo '<table>' . PHP_EOL;
foreach ($objWorksheet->getRowIterator() as $row) {
    echo '<tr>' . PHP_EOL;
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
                                                       //    even if a cell value is not set.
                                                       // By default, only cells that have a value 
                                                       //    set will be iterated.
    foreach ($cellIterator as $cell) {
        echo '<td>' . 
             $cell->getValue() . 
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;
