<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<body>
<form method="post">

    Podaj liczbe:
    <input type = "text" id = "Number" name="Number">
    <button name = "calculate" type ="submit" value ="calculate">Sprawdz</button>
</form>
</body>
</html>
<?php
$inputNumber = $_POST['Number'];

if (isset($_POST['calculate'])){

    if (isPrimeNumber($inputNumber) == 0){
        echo 'Nie jest liczba pierwsza.';
    }else
        echo 'Jest liczba pierwsza.';
}


function isPrimeNumber($inputNumber)
{
    if ($inputNumber == 1) {
        return 0;
    } else {

        $iterations = 1;
        for ($i = 2; $i <= $inputNumber / 2; $i++) {
            if ($inputNumber % $i == 0) {
                return 0;
            }

        }
        return 1;
    }

}

?>
