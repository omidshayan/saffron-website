<?php
include_once "header.php";

include_once '../db.php';
$sql = "SELECT * FROM `products` WHERE `id` = ?";
$result = $connect->prepare($sql);
$result->bindValue(1, $_GET['id']);
$result->execute();
$data = $result->fetch(PDO::FETCH_OBJ);
?>


<!---------------- start content ---------------->
<div class="container show-one-product">
    <div class="row align-items-center">
        <div class="col-12 col-sm-6 show-post one-conference">
            <h2><?= $data->name ?> </h2>
            <p><?= $data->description ?></p>
        </div>
        <div class="col-12 col-sm-6 show-post">
            <img src="img/products/1.jpg" alt="">
        </div>
    </div>
</div>
<!---------------- end content ---------------->

<!-- footer -->
<?php include_once 'footer.php' ?>