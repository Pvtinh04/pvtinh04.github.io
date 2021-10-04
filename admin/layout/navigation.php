<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-th-large"></span> Administrater</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> 
                <?php if(isset($_SESSION['user'])) { echo $_SESSION['user']['Username']; } ?> 
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="../index.php?page=logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="index.php"><i class="glyphicon glyphicon-home"></i> Trang chủ Admin</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo_cate"><i class="glyphicon glyphicon-th-list"></i> Quản trị danh mục<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_cate" class="collapse">
                    <li class="active"><a href="index.php?page=category&method=cate_all">Loại danh mục</a></li>
                    <li><a href="index.php?page=category&method=products">Sản phẩm</a></li>
                    <li><a href="index.php?page=category&method=posts">Bài viết</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo_banner"><i class="glyphicon glyphicon-globe"></i> Quản trị giao diện<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_banner" class="collapse">
                    <li><a href="index.php?page=image&method=slide">Slider</a></li>
                    <li><a href="index.php?page=image&method=logo">Logo</a></li>
                    <li><a href="index.php?page=info&method=about">Chính sách</a></li>
                    <li><a href="index.php?page=info&method=contact">Liên lạc</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo_statistic"><i class="fa fa-bar-chart-o"></i> Thống kê<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_statistic" class="collapse">
                    <li><a href="index.php?page=statistic&method=vote">Lượt vote</a></li>
                    <li><a href="index.php?page=statistic&method=sales">Doanh số</a></li>
                    <li><a href="index.php?page=statistic&method=proceeds">Doanh thu</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php?page=info&method=feedback"><i class="glyphicon glyphicon-share-alt"></i> Feedback</a>
            </li>
            <li>
                <a href="index.php?page=ordered"><i class="glyphicon glyphicon-usd"></i> Quản lý đơn hàng</a>
            </li>
            <li>
                <a href="index.php?page=user"><i class="glyphicon glyphicon-user"></i> Quản lý User</a>
            </li>
            
            <li>
                <a href="../index.html"><i class="glyphicon glyphicon-share-alt"></i> Vào trang web</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>