<?php
session_start();
include_once "../../db.php"; 

$username = $_POST['username']; //ali
$pass = $_POST["password"]; //1234


$sql = "SELECT * FROM `admin` WHERE `username` = ? AND `password` = ?";
$result = $connect->prepare($sql);
$result->bindValue(1,$username);
$result->bindValue(2,$pass);
$result->execute();
$row = $result->rowCount();
    if($row == 1){
        $_SESSION['admin'] = 'admin';
        header('location:../home.php');
        exit();
    }

    else
    {
        echo header('location:../index.php?error=10');
    }


