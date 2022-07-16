<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "asadovlar";

$moulan = new mysqli($host,$user,$pass,$db);

if (!$moulan) {
    echo "Malumotlar ombori bilan ulanilmadi !";
}
