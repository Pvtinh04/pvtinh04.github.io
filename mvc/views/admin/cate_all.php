<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh mục
        </h1>
       
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-th-list"></i>  <a href="index.php?page=cate_all">Danh mục</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Loại danh mục
            </li>
        </ol>
    </div>
</div> 
<!-- /.row -->

<div class="row">
      
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
       
    
</div>
<!-- /.row -->
<!-- Danh mục sản phẩm -->
<div class="row">
    
       <div class="col-lg-4 cate" id = "table_category">
        <h2 data-toggle="collapse" data-target="#demo_pro_cate"><i class="fa fa-fw fa-caret-down"></i> Danh mục sản phẩm</h2>

        <div class="table-responsive collapse" id="demo_pro_cate">
            <?php  
                if (!empty($pro_cates)) {
            ?> 
                    <div id="showcatepro"></div>
                    <table class="table table-bordered table-hover table-striped" id="cate_all">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Danh mục</th>
                                <th>Hiển thị</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $stt = 0;
                                foreach ($pro_cates as $rowProCate) {
                                    $stt += 1;
                            ?>
                                    <tr>
                                        <td><?php echo $stt; ?></td>
                                        <td><?php echo $rowProCate['Name']; ?>
                                           
                                        </td>
                                        <td>
                                            <?php 
                                                if ($rowProCate['Status'] == 1) { 
                                                    echo '<span class="glyphicon glyphicon-ok"></span>'; 
                                                } 
                                            ?>     
                                        </td>
                                        <td>
                                        <a href="index.php?page=edit_cate&method=cate_pro&id=<?php echo $rowProCate['CategoryID'] ; ?>">
                                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=".myModal_editpro_cate"></span></a>
                                            <span name="delete" class="action glyphicon glyphicon-remove remove_catepro" id ="<?php echo $rowProCate['CategoryID'];?>"></span>
                                        </td>
                                    </tr>
                                    <!-- Modal pro cate -->
                   

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            <?php
                }
            ?>
        </div>
        <button type="submit" class="btn btn-default" name="add_pro_cate" id="add_pro_cate" data-toggle="modal" data-target=".myModal_pro_cate"><span class="glyphicon glyphicon-plus "></span> Thêm</button>
    </div>
    
    
    <!-- //Danh mục thương hiệu -->
     <div class="col-lg-4 cate">
        <h2 data-toggle="collapse" data-target="#demo_mark_cate"><i class="fa fa-fw fa-caret-down"></i> Danh mục thương hiệu</h2>
        <div class="table-responsive collapse" id="demo_mark_cate">
            <?php  
                if (!empty($trademark)) {
            ?>
            <div class="showtrade"></div>
                    <table class="table table-bordered table-hover table-striped" id="cate_trade">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Danh mục</th>
                                <th>Hiển thị</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $stt = 0;
                                foreach ($trademark as $key => $rowTrademark) {
                                    $stt += 1;
                            ?>
                                    <tr>
                                        <td><?php echo $stt; ?></td>
                                        <td><?php echo $rowTrademark['Name'] ?></td>
                                        <td>
                                            <?php 
                                                if ($rowTrademark['Status'] == 1 ){ 
                                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                                }
                                            ?>
                                            
                                        </td>
                                        <td>
                                        <a href="index.php?page=edit_cate&method=cate_trademark&id=<?php echo $rowTrademark['TradeMarkID'] ; ?>">
                                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=""></span> </a>
                                            <span name="delete" class="action glyphicon glyphicon-remove remove_catetrade" id ="<?php echo $rowTrademark['TradeMarkID'] ?>"></span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            <?php
                }
            ?>
        </div>
        <button type="submit_pro" class="btn btn-default" name="add_trade_mark" id="add_trade_mark"  data-toggle="modal" data-target=".myModal_trade_mark"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
    </div>
    <!-- //Danh mục bài viết -->
    <div class="col-lg-4 cate" id="table_trademark">
        <h2 data-toggle="collapse" data-target="#demo_post_cate"><i class="fa fa-fw fa-caret-down"></i> Danh mục bài viết</h2>
        <div class="table-responsive collapse" id="demo_post_cate">
            <?php  
                if (!empty($post_cates)) {
            ?>
                <div class="showpost"></div>
                    <table class="table table-bordered table-hover table-striped" id="post_all">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Danh mục</th>
                                <th>Hiển thị</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $stt = 0;
                                foreach ($post_cates as $key => $rowPostCate) {
                                    $stt += 1;
                            ?>
                                    <tr>
                                        <td><?php echo $stt; ?></td>
                                        <td><?php echo $rowPostCate['Name'] ?></td>
                                        <td>
                                            <?php 
                                                if ($rowPostCate['Status'] == 1 ){ 
                                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                                }
                                            ?>
                                            
                                        </td>
                                        <td>
                                        <a href="index.php?page=edit_cate&method=cate_post&id=<?php echo $rowPostCate['NewCategoryID'] ; ?>">
                                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=""></span></a>
                                            <span name="delete" class="action glyphicon glyphicon-remove remove_catepost" id ="<?php echo $rowPostCate['NewCategoryID'] ?>" ></span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            <?php
                }
            ?>
        </div>
        <button type="button" class="btn btn-default"   data-toggle="modal" data-target=".myModal_post_cate"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
    </div>
</div>
<!-- /.row -->
<!-- Modal pro cate -->
<!-- Modal pro cate -->
<div id="myModal_pro_cate" class="modal fade myModal_pro_cate" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
            <form class="form-horizontal" action="" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_pro">Danh mục:<span  style="color: red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name_pro_cate" name="name_pro_cate">
                    </div>
                   
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_cate_description">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description_pro_cate" name="description_pro_cate">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_pro_cate">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
</div>

 <!-- Chỉnh sửa thương hiệu -->
 <!-- Modal trademark-->
<div id="myModal_trade_mark" class="modal fade myModal_trade_mark" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm mới danh mục thương hiệu</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
            <form class="form-horizontal" action="" method="POST" role="form" >
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_trademark">Danh mục:<span  style="color: red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name_trade_mark" name="name_trade_mark">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="trade_mark_description">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description_trade_mark" name="description_trade_mark">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_trade_mark">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
</div>

<!-- Modal post cate-->
<div id="myModal_post_cate" class="modal fade myModal_post_cate" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm mới danh mục bài viết</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
            <form class="form-horizontal" action="" method="POST" role="form" name="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_pro">Danh mục:<span  style="color: red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name ="name_post_cate">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description_post_cate" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_post_cate">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
</div>
 <!-- edit _ category sản phẩm -->
   <!-- Modal pro cate -->

                    