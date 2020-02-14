<?php

if (isset($_POST['resultSum'])) {
    $so1 = $_POST['op1'];
    $so2 = $_POST['op2'];
    $sum = $_POST['sum'];

    if (is_numeric($so1) && is_numeric($so2) && is_numeric($sum)) {

        $resultString = $so1 . " + " . $so2 . " = " . $sum;

        if ($so1 + $so2 == $sum) {
            $success = "Well done!!!";
        } else {
            $error = "Wrong answer!!! Try again!!!";
        }
    } else {
        $error = "input should be Only numeric!!!";
    }
}

if (!isset($error)) {
    $sourceOperator1 = rand(1, 10);
    $sourceOperator2 = "";
    $sourceSum = rand(1, 10);
} else {
    $sourceOperator1 = $so1;
    $sourceOperator2 = $so2;
    $sourceSum = $sum;
}
