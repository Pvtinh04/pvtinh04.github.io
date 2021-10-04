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
            <?php  
                if ($method == 'new_ordered') {
            ?>
                    <li class="active">
                        <i class="fa fa-table"></i> Đơn hàng mới
                    </li>
            <?php
                }
            ?>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Danh sách đơn hàng <?php echo ($method == 'new_ordered') ? 'mới' : ''; ?></h2>
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
            <div id="list_ordered">
                <?php  
                    if (count($getOrders) > 0) {
                ?>
                        <table class="table table-bordered table-hover table-striped table-filter">
                            <thead>
                                <tr>
                                    <th class="th-sm">STT</th>
                                    <th class="th-sm">Mã đơn hàng</th>
                                    <th class="th-sm">Khách hàng</th>
                                    <th class="th-sm">Ghi chú</th>
                                    <th class="th-sm">Tổng tiền</th>
                                    <th class="th-sm">Ngày đặt</th>
                                    <th class="th-sm">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $stt = 0;
                                    foreach ($getOrders as $rowOrder) {
                                        $stt += 1;
                                ?>
                                        <tr>
                                            <td><?php echo $stt; ?></td>
                                            <td>
                                                <a href="index.php?page=ordered&method=ordered_detail&orderID=<?php echo $rowOrder['OrderID']; ?>">
                                                    <?php echo $rowOrder['OrderID']; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="index.php?page=ordered&method=customer_detail&cusID=<?php echo $rowOrder['CustomerID']; ?>">
                                                    <?php echo $rowOrder['Name']; ?>
                                                </a>
                                            </td>
                                            <td><?php echo $rowOrder['Note']; ?></td>
                                            <td><?php echo number_format($rowOrder['TotalMoney']); ?></td>
                                            <td><?php echo $rowOrder['CreatedDate']; ?></td>
                                            <td>
                                                <?php 
                                                    $color = ($rowOrder['Status_order']==1) ? 'red' : (($rowOrder['Status_order']==2) ? 'blue' : (($rowOrder['Status_order']==0) ? 'gray' : 'green')); 
                                                ?>
                                                <select name="status" class="form-control" style="color: <?php echo $color; ?>" onchange="Edit_ordered(<?php echo $rowOrder['OrderID']; ?>, this.value)" <?php if($rowOrder['Status_order']>=3 || $rowOrder['Status_order'] == 0){echo 'disabled';} ?>>
                                                    <option value="1" <?php if($rowOrder['Status_order']==1){echo 'selected';} ?>>Chờ duyệt</option>
                                                    <option value="2" <?php if($rowOrder['Status_order']==2){echo 'selected';} ?>>Đang giao</option>
                                                    <option value="3" <?php if($rowOrder['Status_order']>=3){echo 'selected';} ?>>Đã nhận</option>
                                                    <option value="0" <?php if($rowOrder['Status_order']==0){echo 'selected';} ?>>Đã hủy</option>
                                                </select>            
                                            </td>
                                        </tr>
                                <?php
                                    } 
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Ghi chú</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </tfoot>
                        </table>
                        
                <?php
                    }else {
                        echo "<h4 class='empty'>Không có đơn hàng nào</h4>";
                    }
                ?>
            </div>
        </div>

    </div>
</div>
<!-- /.row -->