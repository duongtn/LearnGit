<?php
require "./vendor/autoload.php";

use Generators\Generator ;

$gener = new Generator();
var_dump($gener->run(10));
