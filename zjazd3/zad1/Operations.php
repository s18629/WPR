<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['result'])){
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];

    if ($operation = $_POST['addition']){
        $result = $firstNumber + $secondNumber;
        echo $result;
    }

    if ($operation = $_POST['subtraction']){
        $result = $firstNumber - $secondNumber;
        echo $result;
    }

    if ($operation = $_POST['multiplication']){
        $result = $firstNumber * $secondNumber;
        echo $result;
    }

    if ($operation = $_POST['division']){
        $result = $firstNumber / $secondNumber;
        echo $result;
    }
}


?>
