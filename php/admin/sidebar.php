<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <title>بخش مدیریت</title>
</head>

<body>
    <!-- header -->
    <div class="menu-toggle"></div>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand">
                <h3>
                    <span class="logo-img"> <img src="img/logo.png" alt="مدیریت افغان زعفران"></span>
                    مدیریت افغان زعفران
                </h3>
            </div>
            <div class="sidebar-avatar">
                <div class="profile-image">
                    <img src="img/profile.png" alt="سیستم مدیریت خیاطی">
                </div>
                <div class="avatar-info">
                    <div class="avatar-text">
                        <ul class="nav-login">
                            <li class="main-sub-menu">
                                <h4> مدیر </h4>
                                <ul class="sub-menu">
                                    <li><a href="back/exit.php">خروج</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <span class="fas fa-chevron-down"></span>
                </div>
            </div>
            <hr class="hr">
            <div class="sidebar-menu">
                <ul>
                    <li class="menu-accordion"><a class="menuItemLink">
                            <span class="fas fa-code-branch"></span>
                            <span>دستور پخت</span>
                        </a>
                    </li>
                    <ul class="menu-panel">
                        <a href="insert-recipes.php">
                            <li>ثبت</li>
                        </a>
                        <a href="show-recipes.php">
                            <li>نمایش</li>
                        </a>
                    </ul>

                    <li class="menu-accordion"><a class="menuItemLink">
                            <span class="fas fa-code-branch"></span>
                            <span>محصولات</span>
                        </a>
                    </li>
                    <ul class="menu-panel">
                        <a href="show-orders.php">
                            <li>ثبت</li>
                        </a>
                        <a href="sewing.php">
                            <li>نمایش</li>
                        </a>
                    </ul>
                    <li>
                        <a href="back/exit.php">
                            <span class="fas fa-sign-out-alt"></span>
                            <span>خروج</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mian content -->
    <div class="main-content">
        <header>
            <div class="hamber">
                <div class="hamber-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </header>
        <main>