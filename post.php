<?php
include "connection.php";

if (isset($_POST["ok"])){
    $vardas = $_POST["vardas"];
    $elpastas = $_POST["elpastas"];
    $klausimas = $_POST["klausimas"];
    $data = date("Y/m/d");
}



$sql = "INSERT INTO question (vardas, elpastas, klausimas, data) VALUES ($vardas, $elpastas, $klausimas, $data)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="post.php" method="post">
    <fieldset>
        <legend>Užpildykite formą</legend>

        <label for="vardas">vardas</label><br>
        <input type="text" id="vardas" name="vardas" required><br>

        <label for="elpastas">elpastas</label><br>
        <input type="email" id="elpastas" name="elpastas" required><br>

        <label for="klausimas">Klausimas</label><br>
        <textarea name="klausimas" id="klausimas" cols="30" rows="10"></textarea><br>

        <input type="submit" id="ok" name="ok">

    </fieldset>
</form>



</body>
</html>