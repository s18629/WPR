<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<body>
<form method="post">
    <label for = "people"> people: </label>
    <select name = "numberOfPerson" id="people">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br>

    Personal Data 1 <br>
        First Name:
        <input type = "text" id = "firstName" name="firstPersonFirstName">
        Second Name:
        <input type = "text" id = "secondName" name= "firstPersonSecondName">
        E-mail:
        <input type = "email" id = "email" name = "firstPersonEmail"> <br> <br>

    Personal Data 2 <br>
        First Name:
        <input type = "text" id = "firstName" name="secondPersonFirstName">
        Second Name:
        <input type = "text" id = "secondName" name= "secondPersonSecondName">
        E-mail:
        <input type = "email" id = "email" name = "secondPersonEmail"> <br> <br>

    Personal Data 3 <br>
        First Name:
        <input type = "text" id = "firstName" name="thirdPersonFirstName">
        Second Name:
        <input type = "text" id = "secondName" name= "thirdPersonSecondName">
        E-mail:
        <input type = "email" id = "email" name = "thirdPersonEmail"> <br> <br>

    Personal Data 4<br>
        First Name:
        <input type = "text" id = "firstName" name="fourthPersonFirstName">
        Second Name:
        <input type = "text" id = "secondName" name= "fourthPersonSecondName">
        E-mail:
        <input type = "email" id = "email" name = "fourthPersonEmail"> <br> <br>
    <button name = "sumarry" type ="submit" value ="Podsumowanie">Podsumowanie</button>

</form>
</body>
</html>

<?php
error_reporting(E_ERROR | E_PARSE);
$selectOption = $_POST['numberOfPerson'];

    switch ($_POST['numberOfPerson']) {
        case 1:
            showPersonalDataForOnePerson();
            break;
        case 2:
            showPersonalDataForTwoPerson();
            break;
        case 3:
            showPersonalDataForThreePerson();
            break;
        case 4:
            showPersonalDataForFourPerson();
            break;
}

function showPersonalDataForOnePerson(){
    echo $_POST['firstPersonFirstName'], "\n", $_POST ['firstPersonSecondName'], "\n",
    $_POST ['firstPersonEmail'];
}
function showPersonalDataForTwoPerson(){
    showPersonalDataForOnePerson();
    echo $_POST['secondPersonFirstName'], "\n", $_POST ['secondPersonSecondName'], "\n",
    $_POST ['secondPersonEmail'];
}
function showPersonalDataForThreePerson(){
    showPersonalDataForTwoPerson();
    echo $_POST['thirdPersonFirstName'], "\n", $_POST ['thirdPersonSecondName'], "\n",
    $_POST ['thirdPersonEmail'];
}
function showPersonalDataForFourPerson(){
    showPersonalDataForThreePerson();
    echo $_POST['fourthPersonFirstName'], "\n", $_POST ['fourthPersonSecondName'], "\n",
        $_POST ['fourthPersonEmail'];
}
?>
