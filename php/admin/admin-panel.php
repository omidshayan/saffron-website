<?php include_once 'sidebar.php';
session_start();
if(!isset($_SESSION['admin'])){
    header('location: index.php');
}
?>

<div class="overview">
    <div class="all-review">دستور پخت</div>
</div>
</main>
<!-- start content -->


<!-- end contetn -->
</div>

<!-- js library -->
<script src="js/fontA.js"></script>
<script src="js/custom.js"></script>
</body>

</html>