<?php

require_once('web/config.php');
require_once('Controller/calculator.php');
require_once('Controller/AdditionController.php');
require_once('Controller/SubtractionController.php');
require_once('Controller/MultiplicationController.php');
require_once('Controller/DivisionController.php');


switch ($_POST['operation']) {
    case "add":
        $controller = 'AdditionController';
        break;
    case "sub":
        $controller = 'SubtractionController';
        break;
    case "mul":
        $controller = 'MultiplicationController';
        break;
    case "div":
        $controller = 'DivisionController';
        break;
}
$calculator = new Calculator;
$calculator->Operands($_POST['val_a'], $_POST['val_b']);
$calculator->Operation(new $controller);

echo $calculator->process();

