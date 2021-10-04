<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Trang chủ <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="glyphicon glyphicon-home"></i> Home
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Bình luận mới!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count($getOrders_new); ?></div>
                        <div>Đơn hàng mới!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=ordered&method=new_ordered">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-star"></i> Thống kê vượt vote</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Đánh giá</th>
                                <th>Lượt đánh giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if (count($vote_statistic) > 0) {
                                    $totalVote = 0;
                                    $count = 0;
                                    foreach ($vote_statistic as $rowVote) {
                                        $totalVote += $rowVote['ViewCount'];
                                        $count += 1;
                                        if ($count <= 5) {
                            ?>
                                            <tr>
                                                <td><?php echo $rowVote['ProductCode']; ?></td>
                                                <td><?php echo $rowVote['Rate']; ?></td>
                                                <td><?php echo $rowVote['ViewCount']; ?></td>
                                            </tr>
                            <?php
                                        }
                                    }
                                    if (count($vote_statistic) > 5) {
                                        echo 
                                            "<tr>
                                                <td>...</td>  
                                                <td>...</td>  
                                                <td>...</td>  
                                            </tr>";
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có sản phẩm nào được vote trong tháng này!</h5>";
                                }
                            ?>
                            <tr>
                                <th colspan="2">Tổng</th>
                                <th><?php echo $totalVote; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?page=statistic&method=vote">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> Thống kê doanh số trong tháng</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Số lượng đã bán</th>
                                <th>Tổng thu về</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if (count($sales_statistic) > 0) {
                                    $totalQuanity   = 0;
                                    $totalSales     = 0;
                                    $count          = 0;
                                    foreach ($sales_statistic as $rowSales) {
                                        $totalQuanity   += $rowSales['sold_quantity'];
                                        $totalSales     += $rowSales['sold_money'];
                                        $count          += 1;
                                        if ($count <= 5) {
                            ?>
                                            <tr>
                                                <td><?php echo $rowSales['ProductCode']; ?></td>
                                                <td><?php echo $rowSales['PromotionPrice']; ?></td>
                                                <td><?php echo $rowSales['sold_quantity']; ?></td>
                                                <td><?php echo $rowSales['sold_money']; ?></td>
                                            </tr>
                            <?php
                                        }
                                    }
                                    if (count($sales_statistic) > 5) {
                                        echo 
                                            "<tr>
                                                <td>...</td>  
                                                <td>...</td>  
                                                <td>...</td>  
                                                <td>...</td>  
                                            </tr>";
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có sản phẩm nào đã bán ra trong tháng này!</h5>";
                                }
                            ?>
                            <tr>
                                <th colspan="2">Tổng</th>
                                <th><?php echo $totalQuanity; ?></th>
                                <th><?php echo $totalSales; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?page=statistic&method=sales">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Thống kê doanh thu tháng</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt đơn</th>
                                <th>Tổng thu về</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if (count($proceeds_statistic) > 0) {
                                    $totalProceeds  = 0;
                                    $count          = 0;
                                    foreach ($proceeds_statistic as $rowproceeds) {
                                        $totalProceeds  += $rowproceeds['TotalMoney'];
                                        $count          += 1;
                                        if ($count <= 5) {
                            ?>
                                            <tr>
                                                <td><?php echo $rowproceeds['OrderID']; ?></td>
                                                <td><?php echo $rowproceeds['CreatedDate']; ?></td>
                                                <td><?php echo $rowproceeds['TotalMoney']; ?></td>
                                            </tr>
                            <?php
                                        }
                                    }
                                    if (count($proceeds_statistic) > 5) {
                                        echo 
                                            "<tr>
                                                <td>...</td>  
                                                <td>...</td>  
                                                <td>...</td>  
                                            </tr>";
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có đơn hàng nào trong tháng này!</h5>";
                                }
                            ?>
                            <tr>
                                <th colspan="2">Tổng</th>
                                <th><?php echo $totalProceeds; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?page=statistic&method=proceeds">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->