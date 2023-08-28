<?php include_once 'sidebar.php';
session_start();
if(!isset($_SESSION['admin'])){
    header('location: index.php');
}
?>


<div class="overview">
    <div class="all-review">افزودن محصول جدید </div>
</div>
<br>
<?php
if (isset($_GET['ok'])) {
    echo '<div class="my-event"><span>محصول جدید با موفقیت ثبت شد!</span></div>';
}
if (isset($_GET['error'])) {
    echo '<span>مشکل در ثبت محصول جدید</span>';
}
?>
<div class="insert-item">
    <form action="back/insert-check-product.php" method="post" enctype="multipart/form-data">
        <h3 class="my-title">ثبت مشخصات محصول</h3>
        <div>نام محصول <span style="color: red;">*</span></div>
        <input type="text" placeholder=" نام محصول را وارد نمایید ..." name="name" autocomplete="off" required>
        <div>توضیحات </div>
        <textarea name="description" cols="30" rows="10"></textarea>
        <div>انتخاب عکس </div>
        <input type="file" name="img">
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