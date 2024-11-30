<?php

include 'class-autoload.inc.php';

$operation = $_POST['operation'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calculator = new Calculator($operation,$num1,$num2);

try {
    //code..
    echo $calculator->calculate();
} catch (\TypeError $e){
    //throw $th;
    echo "Error! : " .$e->getMessage();
}

?>
