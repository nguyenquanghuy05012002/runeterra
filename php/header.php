<header id="header" style="z-index: 999 !important">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                    <ul>
                        <?php
                        if (isset($_SESSION['IdUser']) && ($_SESSION['IdUser'])) {
                            if (isset($_SESSION['fullname']) && ($_SESSION['fullname'])) {
                                echo '<li><a onclick="showInfo()">' . $_SESSION["fullname"] . '</a></li>';
                                echo '<li><a href="./php/logout.php">Thoát</a></li>';
                            }
                        } else {
                        ?>
                        <li><a onclick="showLogin()">Đăng nhập</a></li>
                        <li><a onclick="showRegister()">Đăng ký</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="./index.php?page=home">Trang chủ</a></li>
                    <li><a href="./index.php?page=about">Về chúng tôi</a></li>
                    <li><a href="./index.php?page=tickets&slide=1&count=12">Mua vé</a></li>
                    <li><a href="./index.php?page=lichsu">Lịch sử</a></li>
                    <li><a href="./index.php?page=contact">Liên hệ</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>