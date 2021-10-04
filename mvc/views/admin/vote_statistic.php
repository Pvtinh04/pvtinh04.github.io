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
                <i class="glyphicon glyphicon-star"></i> Thống kê lượt vote trong tháng
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-star"></i> Thống kê vượt vote</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-filter">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Hãng sản phẩm</th>
                                <th>Đánh giá</th>
                                <th>Lượt đánh giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if (count($vote_statistic) > 0) {
                                    $stt        = 0;
                                    $totalVote  = 0;
                                    foreach ($vote_statistic as $rowVote) {
                                        $stt        += 1;
                                        $totalVote  += $rowVote['ViewCount'];

                            ?>
                                            <tr>
                                                <td><?php echo $stt; ?></td>
                                                <td><?php echo $rowVote['ProductCode']; ?></td>
                                                <td><?php echo $rowVote['TrademarkName']; ?></td>
                                                <td><?php echo $rowVote['Rate']; ?></td>
                                                <td><?php echo $rowVote['ViewCount']; ?></td>
                                            </tr>
                            <?php
                                    }
                                }else{
                                    echo "<h5 class='empty'>Không có sản phẩm nào được vote trong tháng này!</h5>";
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Hãng sản phẩm</th>
                                <th>Đánh giá</th>
                                <th>Lượt đánh giá</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Tổng kết</h3>
            </div>
            <div class="panel-body">
                <div class="total">
                    <h3>Tổng lượt đánh giá: <span style="color: orange"><?php echo $totalVote; ?></span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
