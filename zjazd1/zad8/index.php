<?php
   $firstNumber = 1;
   $secondNumber = 4;
   $thirdNumber = 3;



   function findMidNumber($firstNumber, $secondNumber, $thirdNumber){

       //sprawdzenie drugiej liczby
       if (($firstNumber < $secondNumber && $secondNumber < $thirdNumber) or
               ($thirdNumber < $secondNumber && $secondNumber < $firstNumber))
           return $secondNumber;

       //sprwadzenie pierwszej liczby
       else if (($secondNumber < $firstNumber && $firstNumber < $thirdNumber) or
           ($thirdNumber < $firstNumber && $firstNumber < $secondNumber))
       return $firstNumber;

       else
           return $thirdNumber;
   }

    $getMaxNumber = max($firstNumber, $secondNumber, $thirdNumber);
    $getMinNumber = min($firstNumber, $secondNumber, $thirdNumber);
    $getMidNumber = findMidNumber($firstNumber, $secondNumber, $thirdNumber);

    $sortedList = array($getMaxNumber, $getMidNumber, $getMinNumber);
    $reverseSortedList = array($getMinNumber, $getMidNumber, $getMaxNumber);

    print_r($sortedList);
    echo ('<br/>');
    print_r($reverseSortedList);
?>
