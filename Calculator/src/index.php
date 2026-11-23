<?php

// require_once '../classes/Calculator.php';

require '../vendor/autoload.php';

use Ginopekkan\Calculator\classes\Calculator;

$calc = new Calculator();

echo $calc->add(5, 7);

?>
