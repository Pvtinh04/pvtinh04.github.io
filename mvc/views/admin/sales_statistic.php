<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thống kê
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-bar-chart-o"></i><a href="#">  Thống kê</a>
            </li>
            <li class="active">
                <i class="glyphicon glyphicon-signal"></i> Thống kê doanh số trong tháng
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> Thống kê doanh số trong tháng</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-filter">
                        <thead>
                            <tr>
                                <th>STT</th>
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
                                    $stt            = 0;
                                    foreach ($sales_statistic as $rowSales) {
                                        $totalQuanity   += $rowSales['sold_quantity'];
                                        $totalSales     += $rowSales['sold_money'];
                                        $stt            += 1;
                            ?>
                                            <tr>
                                                <td><?php echo $stt; ?></td>
                                                <td><?php echo $rowSales['ProductCode']; ?></td>
                                                <td><?php echo number_format($rowSales['PromotionPrice']); ?></td>
                                                <td><?php echo $rowSales['sold_quantity']; ?></td>
                                                <td><?php echo number_format($rowSales['sold_money']); ?></td>
                                            </tr>
                            <?php
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có sản phẩm nào đã bán ra trong tháng này!</h5>";
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Số lượng đã bán</th>
                                <th>Tổng thu về</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Tổng kết</h3>
            </div>
            <div class="panel-body">
                <div class="total">
                    <h4>Tổng số lượng đã bán: <span style="color: red"><?php echo $totalQuanity; ?></span></h4>
                    <br>
                    <h4>Tổng doanh thu: <span style="color: red"><?php echo number_format($totalSales).' đ'; ?></span></h4>
                </div>
            </div>
        </div>
    </div>
</div>