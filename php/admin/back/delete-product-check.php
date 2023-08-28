<?php
include '../../db.php';
$id = $_GET['id'];

$sql5 = "DELETE FROM `products` WHERE `id` = ?";
$result5 = $connect->prepare($sql5);
$result5->bindValue(1, $id);
if($result5->execute()) {
    header("location:../show-products.php?success=10");
}
