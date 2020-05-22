<?php 

require_once "vendor/autoload.php";

use jeferson\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('67013240');

print_r($resultado);