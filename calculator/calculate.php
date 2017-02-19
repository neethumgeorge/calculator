<?php
require_once('inc/config.php');
require_once('class/calculator.php');
switch ($_POST['opt']) {
    case "add":
       $Operation = 'Addition';
        break;
    case "sub":
       $Operation = 'Subtraction';
        break;
    case "mul":
        $Operation = 'Multiply';
        break;
	case "div":
       $Operation = 'Division';
        break;
}
$calculator = new Calculator;
$calculator->Operands($_POST['val_a'],$_POST['val_b']);

$calculator->Operation(new $Operation);
echo $calculator->process();

?>