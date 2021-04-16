<form method="post">
    <label for="firstNumber"> first Number</label><br>
    <input type="text" id="firstNumber" name="firstNumber"><br>

    <label for="secondNumber"> second Number</label><br>
    <input type="text" id="secondNumber" name="secondNumber"><br>

    <input type="radio" id="operator" name="addition">
    <label for="addition">addition</label><br>

   <input type="radio" id="operator" name="subtraction">
   <label for="subtraction">subtraction</label><br>

   <input type="radio" id="operator" name="multiplication">
   <label for="multiplication">multiplication</label><br>

   <input type="radio" id="operator" name="division">
   <label for="division">division</label><br>

    <input type="submit" id="result" name="result">

</form>
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
