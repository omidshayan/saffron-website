<?php include_once 'header.php' ?>
    <!-- slider -->
    <section class="slider">
        <div class="slider-item">
            <div class="item active">
                <div class="img" style="background-image: url('img/slider-img/1.jpg');">
                </div>
                <div class="caption">
                    <h1>به وبسایت آریانا زعفران خوش آمدید </h1>
                    <p>بزرگترین و بهترین شرکت فروش و کشت زعفران در سطح افغانستان</p>
                </div>
            </div>
            <div class="item">
                <div class="img" style="background-image: url('img/slider-img//2.jpg');">
                </div>
                <div class="caption">
                    <h1>به وبسایت آریانا زعفران خوش آمدید </h1>
                    <p>فروش زعفران به صورت عمده و پرچون</p>
                </div>
            </div>
            <div class="item">
                <div class="img" style="background-image: url('img/slider-img/3.jpg');">
                </div>
                <div class="caption">
                    <h1>به وبسایت آریانا زعفران خوش آمدید </h1>
                    <p>پروسس و بسته بندی زعفران با معیارهای بین المللی</p>>
                </div>
            </div>
        </div>
        <div class="controls">
            <div class="next"><i class="fas fa-chevron-right"></i></div>
            <div class="prev"><i class="fas fa-chevron-left"></i></div>
        </div>
        <div class="progress"></div>
    </section>

    <!---------------- start content ---------------->
    <!-- products -->
    <section class="products">
        <div class="container">
            <div class="top-text">
                <span class="home-title">محصولات</span>
                <span class="show-all"><a href="products.php">نمایش همه محصولات</a> </span>
            </div>
            <hr class="hr-style">
            <div class="row">
            <?php
            include_once "db.php";
            $sql1 = "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 4";
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
    </section>

    <!-- story -->
    <div class="container">
        <h2 class="home-title">تاریخچه</h2>
        <hr class="hr-style">
        <div class="row align-items-center data-style">
            <div class="col-12 col-sm-6 show-post">
                <div class="text-post">
                    <p>
                        آریانا زعفران در سال 2011 توسط بشیر احمد رشیدی تاسیس شد. این یک تجارت خانوادگی و یکی از بزرگترین
                        تولید کنندگان و پروسس های زعفران در افغانستان است. این شرکت زعفران 100% خالص را از مزارع خود و
                        کشاورزان قراردادی جمع آوری می کند. پس از پروسس، کیفیت زعفران در لابراتوار وزارت زراعت، آبیاری و
                        مالداری افغانستان آزمایش می شود.
                        کشاورزی پایداریک اولویت کلیدی است و آریانا زعفران نوآوری در فناوری و تجهیزات را ابزاری برای
                        دستیابی به آن می داند. این شرکت از اصول تجارت منصفانه و یک مدل کسب و کار اخلاقی برای ایجاد شغل و
                        رفاه پایدار برای کشاورزان و جوامع روستایی استفاده می کند. آریانازعفران متعهد به ایفای نقش فعال
                        در ساختن یک افغانستان مرفه از طریق توسعه کشاورزی به رهبری سکتور خصوصی است.
                        آریانا زعفران متعهد به تولید زعفران با کیفیت است. این شرکت در حال حاضر دارای گواهینامه های
                        مختلفی از جمله ISO 22000، HACCP، ISO 9001 و ISO 3632 (ویژه کیفیت زعفران) می باشد که اعتماد را
                        تضمین می کند.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 show-post">
                <img src="img/products/5.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- recipes start -->
    <section class="galary">
        <div class="container">
            <div class="top-text">
                <span class="home-title">دستور پخت </span>
                <span class="show-all"><a href="recipes.php">نمایش همه </a> </span>
            </div>
            <hr class="hr-style">
            <div class="row">
            <?php
            include_once "db.php";
            $sql1 = "SELECT * FROM `recipes` ORDER BY `id` DESC LIMIT 4";
            $result1 = $connect->query($sql1);
            $rows1 = $result1->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows1 as $row1) { ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="product-item">
                        <a href="views/product.php?id=<?= $row1['id'] ?>">
                            <img src="img-posts/<?= $row1['img'] ?>" alt="">
                            <h4><?= $row1['name'] ?></h4>
                            <p><?= substr($row1['description'], 0, 20) ?>...</p>
                        </a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!---------------- end content ---------------->
<?php include_once 'footer.php' ?>