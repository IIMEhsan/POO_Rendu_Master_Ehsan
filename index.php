<?php
require __DIR__.'/vendor/autoload.php';
$test = 'unechaînedecharactère';
$validation = \IIMEhsan\Rendu_Master_POO\StringValidator::noWhiteSpace($test);
var_dump($validation);