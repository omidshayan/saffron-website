<?php include_once 'header.php' ?>
<!---------------- start content ---------------->
<div class="container">
    <div class="top-text">
        <span class="home-title">همه محصولات</span>
    </div>
    <hr class="hr-style">
    <div class="row">
        <?php
        include_once "db.php";
        $sql1 = "SELECT * FROM `products` ORDER BY `id` DESC";
        $result1 = $connect->query($sql1);
        $rows1 = $result1->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows1 as $row1) { ?>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="product-item">
                    <a href="product.php?id=<?= $row1['id'] ?>">
                        <img src="img-posts/<?= $row1['img'] ?>" alt="">
                        <h4><?= $row1['name'] ?></h4>
                        <p><?= substr($row1['description'], 0, 20) ?>...</p>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!---------------- end content ---------------->

<!-- footer -->
<?php include_once 'footer.php' ?>