<?php
$servername = 'localhost';
$username = 'root';
$userPassword = 'root';
$name_db = 'personal_website';


$connect = new mysqli($servername, $username, $userPassword, $name_db);

if(!$connect){
    echo "error connect database";
}

$pdo = new PDO('mysql:host=localhost;dbname=personal_website;charset=utf8', 'root', 'root', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

