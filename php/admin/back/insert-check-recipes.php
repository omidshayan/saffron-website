<?php
include_once "../../db.php";

$src = "../../img-posts/".$_FILES['img'] ["name"];
$srcTemp =  "../img-posts/".$_FILES['img'] ["name"];
$name = $_POST['name'];
$description = $_POST['description'];
$date = date("Y/m/d");

$sql = "INSERT INTO `recipes` (`id`, `name`,`description`, `img`, `date`) VALUES (NULL, ?, ?, ?, ?);";
$result = $connect->prepare($sql);
$result->bindValue(1,$name);
$result->bindValue(2,$description);
$result->bindValue(3,$srcTemp);
$result->bindValue(4,$date);
if($result->execute()){
    move_uploaded_file($_FILES['img'] ['tmp_name'],$src);
    header("location:../insert-recipes.php?ok=20");
}
else{
    header("location:../insert-recipes.php?error=39");
}


