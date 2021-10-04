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
<h2>Thêm sản phẩm</h2>
<div class="row">
<div class="col-lg-6 cate">
<form class="form-horizontal" action="" enctype = "multipart/form-data" method="post"  >
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Tên sản phẩm:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""   name="ProductName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Nhóm sản phẩm:</label>
                    <div class="col-sm-10">
                    <select name="cate">
					<?php 
						foreach ($pro_catess as $catepro) {
                            
                        
					?>
                    <?php echo $catepro['Name'] ;?>
					<option value="<?php echo $catepro['CategoryID'] ;?>" ><?php echo $catepro['Name'] ;?></option>
					<?php   } ?>
					</select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Thương Hiệu:</label>
                    <div class="col-sm-10">
                    <select name="trademark">
					<?php 
						foreach ($trademarks as $trademark) {
                            
                        
					?>
                    <?php echo $trademark['Name'] ;?>
					<option value="<?php echo $trademark['TradeMarkID'] ;?>" ><?php echo $trademark['Name'] ;?></option>
					<?php   } ?>
					</select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Mã số sản phẩm:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""  id="ProductCode" name="ProductCode">
                         <p class="require_input" id="error_userName"><?php if(isset($err_code)){echo $err_code;} ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Thông tin ngắn:</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"  id="Description" name="Description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Hình ảnh:</label>
                    <div class="col-sm-10">
                    <input type="file" name="fileupload[]" multiple="true"  id="img_file">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Thông tin sản phẩm:</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" value= ""  id="Detail" name="Detail"> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Giá:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""  id="Price" name="Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Sale:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""  id="Sale" name="Sale">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Số lượng:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""  id="Quantity" name="Quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input  type="radio"  name="Status" value="1">Hiển thị
                        </label>
                        <label class="radio-inline">
                            <input type="radio"  name="Status" value="2">Sản phẩm hot
                        </label>
                        <label class="radio-inline">
                            <input type="radio"  name="Status" value="0">Ẩn
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_pro">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
</div>



    <div class="col-lg-6 cate">
        
        
        <div id="show"></div>
        
        
        <div class="table-responsive" id="table_pro">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_pro">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Mã sản phẩm</th>
                        <th class="th-sm">Mới</th>
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
                                <td>
                                    <?php 
                                        if ($value['Status'] == 1) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
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
                        <th class="th-sm">Mới</th>
                        <th class="th-sm">HOT</th>
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        

    </div>
</div>

<script type="text/javascript" language="javascript">
 
 CKEDITOR.replace( 'Description', {
   uiColor: '#d1d1d1'
});
CKEDITOR.replace( 'Detail', {
   uiColor: '#d1d1d1'
});

</script>