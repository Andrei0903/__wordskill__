<?php
require '../../connect.php';

if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text']) )
{
    $stmt = $pdo->prepare("insert into messages(name, email, text) values(?,?,?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['text']
    ]);
}

header('Location: /');