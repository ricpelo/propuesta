#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

$objPHPExcel = PHPExcel_IOFactory::load("Requisitos.ods");

$objWorksheet = $objPHPExcel->getActiveSheet();

echo '<table>' . PHP_EOL;
foreach ($objWorksheet->getRowIterator() as $row) {
    echo '<tr>' . PHP_EOL;
    $cellIterator = $row->getCellIterator();
    foreach ($cellIterator as $cell) {
        echo '<td>' . 
             $cell->getValue() . 
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;
