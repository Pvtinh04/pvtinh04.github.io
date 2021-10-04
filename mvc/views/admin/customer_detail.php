<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Quản lý đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-shopping-cart"></i>  <a href="index.php?page=ordered">Quản lý đơn hàng</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> <a href="index.php?page=ordered">Danh sách đơn hàng</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Chi tiết khách hàng
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Chi tiết khách hàng</h2>
        <?php 
            if (isset($_SESSION['note'])) {
        ?>
                <div id="note" class="note" >
                    <ol class="breadcrumb"><?php echo $_SESSION['note'];?></ol>
                </div>
        <?php
                unset($_SESSION['note']);
            }
        ?>
        <div id="show"></div>
        <div class="table-responsive" id="table_ordered">
            <table class="table table-bordered table-hover table-striped" id="list_ordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                        foreach ($getCusDetail as $rowCusDetail) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $rowCusDetail['Name']; ?></td>
                                <td><?php echo $rowCusDetail['Phone']; ?></td>
                                <td><?php echo $rowCusDetail['Email']; ?></td>
                                <td><?php echo $rowCusDetail['Address']; ?></td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- /.row -->