<?php include_once 'sidebar.php';
session_start();
include_once '../db.php';
if (!isset($_SESSION['admin'])) {
    header('location: index.php');
    exit();
}
?>
<div class="overview">
    <div class="all-review">صفحه اصلی</div>
</div>
<br>

<div class="table-wrapper">
    <div class="card">
        <h2>تعداد محصولات</h2>
        <?php
        $sql_product = "SELECT * FROM products";
        $result_p = $connect->query($sql_product);
        $row_product = $result_p->rowCount();
        ?>
        <p><?= $row_product ?></p>
    </div>

    <div class="card">
        <?php
        $sql_resipes = "SELECT * FROM recipes";
        $result_r = $connect->query($sql_resipes);
        $row_resipes = $result_r->rowCount();
        ?>
        <h2>تعداد دستورات پخت</h2>
        <p><?= $row_resipes ?></p>
    </div>

</div>


</main>
</div>
<!-- js library -->
<script src="js/fontA.js"></script>
<script src="js/custom.js"></script>
</body>

</html>