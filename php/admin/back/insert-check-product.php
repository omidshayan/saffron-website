<?php
include_once "../../db.php";

$name = $_POST['name'];
$description = $_POST['description'];
$date = date("Y/m/d");

$src = "../../img-posts/".$_FILES['img'] ["name"];//انتقال به پوشه مورد نظر
$srcTemp =  "../img-posts/".$_FILES['img'] ["name"]; // ثبت در دیتابیس


$sql = "INSERT INTO `products` (`id`, `name`,`description`, `img`, `date`) VALUES (NULL, ?, ?, ?, ?);";
$result = $connect->prepare($sql);
$result->bindValue(1,$name);
$result->bindValue(2,$description);
$result->bindValue(3,$srcTemp);
$result->bindValue(4,$date);

if($result->execute()){
    move_uploaded_file($_FILES['img'] ['tmp_name'],$src);
    header("location:../insert-product.php?ok=20");
}
else{
    header("location:../insert-product.php?error=39");
}


