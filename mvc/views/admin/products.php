
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Danh mục
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-user"></i>  <a href="index.php?page=category&method=products">Danh mục</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Sản phẩm
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Danh sách sản phẩm</h2>
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
        <a href="index.php?page=category&method=add_pro">
        <button type="button" class="btn btn-default" name="add_pro" id="add_pro" data-toggle="modal" data-target="#modal_add_user">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </button>
        </a>
        <div class="table-responsive" id="table_pro">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_pro">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Mã sản phẩm</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thương hiệu</th>    
                        <th class="th-sm">Giá hiện tại</th>
                        <th class="th-sm">Thông tin</th>
                        <!-- <th class="th-sm">Mới</th> -->
                        <th class="th-sm">HOT</th>
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                        $product = new Admin_c();
                        $rs = $product->prodcut();
                        foreach ($rs as $key => $value) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $value['ProductName']; ?></td>
                                <td><?php echo $value['ProductCode']; ?></td>
                                <td><img width=100% src="../public/images/products/<?php echo $value['ProductImage']; ?>" alt=""></td>
                                <td><?php foreach ($trademark as  $cate) {
                                    if ($value['TradeMarkID'] == $cate ['TradeMarkID']) {
                                       echo $cate['Name'];
                                    }
                                }?></td>
                                <td><?php echo number_format($value['PromotionPrice'])."VNĐ"; ?></td>
                                <td ><?php echo $value['Description']; ?></td>
                                
                                <!-- <td>
                                    <?php 
                                        if ($value['Status'] == 1) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td> -->
                                <td>
                                    <?php 
                                        if ($value['Status'] == 2) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if ($value['Status'] >0) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="index.php?page=category&method=edit_pro&id=<?php if (isset($value['ProductID'])) {
                                       echo $value['ProductID'];
                                    } ?>">
                                        <span name="edit" class="action glyphicon glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <span name="delete" class="action glyphicon glyphicon-remove remove_pro" id="<?php echo $value['ProductID']; ?>"></span>
                                </td>
                            </tr>
                            
                            </form>
                    <?php
                        } 
                    ?>
                </tbody> 
                <tfoot>
                    <tr>
                       <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Mã sản phẩm</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thương hiệu</th>    
                        <th class="th-sm">Giá hiện tại</th>
                        <th class="th-sm">Thông tin</th>
                        <!-- <th class="th-sm">Mới</th> -->
                        <th class="th-sm">HOT</th>
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <a href="index.php?page=category&method=add_pro">
        <button type="button" class="btn btn-default" name="add_pro" id="add_pro" data-toggle="modal" data-target="#modal_add_user">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </button>
        </a>

    </div>
</div>
<!-- /.row -->

<!--  Add User -->
