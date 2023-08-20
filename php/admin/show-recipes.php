<?php include_once 'sidebar.php'; ?>
<div class="overview">
    <div class="all-review"> لیست دستورات</div>
</div>
<br>

<div class="table-wrapper">
    <table class="fl-table">
        <?php
        if (isset($_GET['success'])) {
            echo '<div class="my-event"><span>عملیات با موفقیت انجام شد :)</span></div>';
        }
        ?>
        <thead>
            <tr>
                <th>#</th>
                <th> عنوان دستور </th>
                <th>توضیحات</th>
                <th> عکس</th>
                <th> ویرایش</th>
                <th> حذف</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once '../db.php';
            $sql = "select * from recipes ORDER BY `id` DESC";
            $result = $connect->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            $number = 1;
            foreach ($rows as $row) { 
                
                echo '<tr>
                <td>'.$number.'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["description"].'</td>
                <td><img src="'.$row["img"].'" class="img-post" alt="post-img"></td>
                <td><a href="update-recipes.php?id='.$row['id'].'"><i class="fas fa-edit" style="color: green;"></i></a></td>
                <td><a href="back/delete-recipes-check.php?id='.$row['id'].'"><i class="fas fa-trash-alt" style="color: red;"></i></a></td>
            </tr>';
             $number ++;
            }
            ?>

        <tbody>
    </table>
</div>
</main>
</div>
<!-- js library -->
<script src="js/fontA.js"></script>
<script src="js/custom.js"></script>
</body>

</html>