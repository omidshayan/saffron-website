<?php include_once 'sidebar.php';

include_once '../db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `products` WHERE `id` = ?";
$result = $connect->prepare($sql);
$result->bindValue(1, $id);
$result->execute();
$data = $result->fetch(PDO::FETCH_OBJ);
?>

<div class="overview">
    <div class="all-review">ویرایش دستور پخت: <?= $data->name ?> </div>
</div>
<br>
<?php
if (isset($_GET['ok'])) {
    echo '<div class="my-event"><span>عملیات با موفقیت انجام شد!</span></div>';
}
if (isset($_GET['error'])) {
    echo '<span>مشکلی پیش امده است</span>';
}
?>
<div class="insert-item">
    <form action="back/update-check-product.php" method="post" enctype="multipart/form-data">
        <h3 class="my-title">ویرایش مشخصات دستور پخت</h3>
        <div>عنوان دستور <span style="color: red;">*</span></div>
        <input type="text" value="<?=$data->name?>" placeholder=" عنوان را وارد نمایید ..." name="name" autocomplete="off" required>

        <input type="hidden" value="<?=$data->id?>" name="id">

        <div>توضیحات </div>
        <textarea name="description" cols="30" rows="10"><?=$data->description?></textarea>

        <div>انتخاب عکس </div>
        <input type="file" name="img">
        <img src="<?=$data->img?>" class="img-edit" alt="">

        <input type="submit" value="ثبت " class="my-btn" name="btn">
    </form>
</div>


</main>

</div>

<!-- js library -->
<script src="js/fontA.js"></script>
<script src="js/custom.js"></script>
</body>

</html>