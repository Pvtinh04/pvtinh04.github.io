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
                <i class="fa fa-table"></i> Chi tiết đơn hàng
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Chi tiết đơn hàng</h2>

        <div class="table-responsive" id="table_ordered">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_ordered">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Mã đơn hàng</th>
                        <th class="th-sm">Mã sản phẩm</th>
                        <th class="th-sm">Tên sản phẩm</th>
                        <th class="th-sm" width="15%" >Hình ảnh sản phẩm</th>
                        <th class="th-sm">Giá tiền</th>
                        <th class="th-sm">Số lượng</th>
                        <th class="th-sm">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                        foreach ($getOrderDetail as $rowOrderDetail) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td>
                                    <?php echo $orderID; ?>
                                </td>
                                <td>
                                    <?php echo $rowOrderDetail['ProductCode']; ?>
                                </td>
                                <td><?php echo $rowOrderDetail['ProductName']; ?></td>
                                <td><img width="100%" src="../public/images/products/<?php echo $rowOrderDetail['ProductImage']; ?>" alt=""></td>
                                <td><?php echo number_format($rowOrderDetail['Price']); ?></td>
                                <td><?php echo $rowOrderDetail['Qty']; ?></td>
                                <td><?php echo $rowOrderDetail['Total']; ?></td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                </tfoot>
            </table>

        </div>

    </div>
</div>
<!-- /.row -->