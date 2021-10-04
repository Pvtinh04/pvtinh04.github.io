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
                <i class="fa fa-money fa-fw"></i> Thống kê doanh thu trong tháng
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
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Thống kê doanh thu tháng</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-filter">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt đơn</th>
                                <th>Tổng thu về</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if (count($proceeds_statistic) > 0) {
                                    $totalProceeds  = 0;
                                    $stt            = 0;
                                    foreach ($proceeds_statistic as $rowproceeds) {
                                        $totalProceeds  += $rowproceeds['TotalMoney'];
                                        $stt            += 1;
                            ?>
                                            <tr>
                                                <td><?php echo $stt; ?></td>
                                                <td><?php echo $rowproceeds['OrderID']; ?></td>
                                                <td><?php echo $rowproceeds['CreatedDate']; ?></td>
                                                <td><?php echo number_format($rowproceeds['TotalMoney']); ?></td>
                                            </tr>
                            <?php
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có đơn hàng nào trong tháng này!</h5>";
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt đơn</th>
                                <th>Tổng thu về</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Tổng kết</h3>
            </div>
            <div class="panel-body">
                <div class="total">
                    <h3>Tổng doanh thu: <span style="color: green"><?php echo number_format($totalProceeds).' đ'; ?></span></h3>
                </div>
            </div>
        </div>
    </div>
</div>