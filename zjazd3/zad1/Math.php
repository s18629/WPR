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

    <?php
    include 'Operations.php'
    ?>
</form>
