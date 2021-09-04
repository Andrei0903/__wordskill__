<?php

require_once '../connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `content` WHERE `content`.`id` = '$id'");

header('Location: index.php');