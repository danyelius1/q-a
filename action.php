<?php
include "connection.php";

if (isset($_POST["ok"])) {
    $vardas = $_POST["vardas"];
    $elpastas = $_POST["elpastas"];
    $klausimas = $_POST["klausimas"];
    $data = date("Y/m/d, H:i:s");
}

$sql = "INSERT INTO question (vardas, elpastas, klausimas, data) VALUES ('$vardas', '$elpastas', '$klausimas', '$data')";

if (mysqli_query($conn, $sql)) {
    Header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>