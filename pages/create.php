<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "asadovlar";

$moulan = new mysqli($host,$user,$pass,$db);

if (!$moulan) {
    echo "Malumotlar ombori bilan ulanilmadi !";
}
// postda 2 narsa bor , textofpost va author !
$maintext = $_POST["textofpost"];
$author = $_POST["author"];

// echo ($maintext."and ".$author);

$sqlbuyruq = "INSERT INTO `postlar`(`Posttext`, `author`) 
            VALUES ('$maintext','$author')";
$insert = mysqli_query($moulan,$sqlbuyruq);

if (!$insert) {
    echo "SQL buyruqda xato bor !";
} else {
    echo "Post yuborildi!";
}
?>