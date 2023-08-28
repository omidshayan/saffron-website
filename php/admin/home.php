<?php include_once 'sidebar.php'; 
session_start();
if(!isset($_SESSION['admin'])){
    header('location: index.php');
    exit();
}
?>
<div class="overview">
    <div class="all-review">صفحه اصلی</div>
</div>
<br>

<div class="table-wrapper">
    محتویات صفحه اصلی
</div>
</main>
</div>
<!-- js library -->
<script src="js/fontA.js"></script>
<script src="js/custom.js"></script>
</body>

</html>