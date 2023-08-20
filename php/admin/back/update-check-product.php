<?php
include_once "../../db.php";

$src = "../../img-posts/".$_FILES['img'] ["name"];
$srcTemp =  "../img-posts/".$_FILES['img'] ["name"];
$name = $_POST['name'];
$description = $_POST['description'];
$id = $_POST['id'];

$sql="UPDATE `products` SET `name` =?, `description` = ?, `img` = ? WHERE `id` = ?;";
$result = $connect->prepare($sql);
$result->bindValue(1,$name);
$result->bindValue(2,$description);
$result->bindValue(3,$srcTemp);
$result->bindValue(4,$id);
if($result->execute()){
    move_uploaded_file($_FILES['img'] ['tmp_name'],$src);
    header("location:../update-product.php?ok=20&id=".$id);
}
else{
    header("location:../update-product.php?error=39&id=".$id);
}


