<html>
<head>
    <meta charset="utf-8">
    <title>save to file</title>
</head>
<body>
<form method="post" attribute="post">
    <p><input type="text" id="text" name="text" placeholder="sometext"></p>
    <button name="save" id="answer" value="answer">Zapisz</button>
</form>
</body>

<?php

if (isset($_POST['save'])) {
    $text = $_POST['text'];
    $myfile = fopen("file.txt", "a");
    fwrite($myfile, "\n" . $text );
    fclose($myfile);
}
?>

</html>