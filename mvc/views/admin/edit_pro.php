


        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Chỉnh sửa sản phẩm</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
           <?php 
           
             $product = new Admin_c();
             $rs = $product->prodcut();
             if (isset($_GET['id'])) {
                $id = $_GET['id'];
             }
             
                 foreach ($rs as $key => $value) {
                     if ($value['ProductID'] == $id ) {
                      
                 
                   # code...
               ?>
                
               
            <form class="form-horizontal" action="" enctype = "multipart/form-data" method="post"  >
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Tên sản phẩm:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['ProductName'])) {
                           echo $value['ProductName'];
                        } ?>"   name="ProductName">
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
					<option value="<?php echo $catepro['CategoryID'] ;?>" <?php if ($value['CategoryID'] ==  $catepro['CategoryID']) {
                        echo 'selected="selected"';
                    }  ?>><?php echo $catepro['Name'] ;?></option>
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
					<option value="<?php echo $trademark['TradeMarkID'] ;?>" <?php if ($trademark['TradeMarkID'] ==  $value['TradeMarkID']) {
                        echo 'selected="selected"';
                    }  ?>><?php echo $trademark['Name'] ;?></option>
					<?php   } ?>
					</select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Mã số sản phẩm:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['ProductCode'])) {
                           echo $value['ProductCode'];
                        } ?>"  id="ProductCode" name="ProductCode">
                         <p class="require_input" id="error_userName"><?php if(isset($err_code)){echo $err_code;} ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Thông tin ngắn:</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"  id="Description" name="Description"> <?php if (isset($value['Description'])) {
                           echo $value['Description'];
                        } ?> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Hình ảnh:</label>
                    <div class="col-sm-10">
                    <img src="../public/images/products/<?php echo $value['ProductImage']; ?>" width="120" height="120"/>
                    <?php $img = new Admin_m();
                    $rs = $img->GetProImgs_ID($id);
                    $stt = 0;
                    foreach ($rs as $key => $image) {
                        $stt++;
                     ?>
                    <img src="../public/images/products/<?php echo $image['Image']; ?>" width="120" height="120"/>
                    <input style = "display:none;" type="text" name="idhinhanh<?php echo $stt; ?>" value = "<?php echo $image['ImageID']; ?>"  />
                    <?php } ?>
                    <br />
                    <br />
                    <input type="file" name="fileupload[]" multiple="true"  id="img_file">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Thông tin sản phẩm:</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" value= ""  id="Detail" name="Detail"> <?php if (isset($value['Detail'])) {
                           echo $value['Detail'];
                        } ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Giá:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Price'])) {
                           echo $value['Price'];
                        } ?>"  id="Price" name="Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Sale:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Sale'])) {
                           echo $value['Sale'];
                        } ?>"  id="Sale" name="Sale">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Số lượng:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Quantity'])) {
                           echo $value['Quantity'];
                        } ?>"  id="Quantity" name="Quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input  type="radio" <?php if (isset($value['Status'])&&$value['Status']==1) {
                           echo 'checked';
                        } ?> name="Status" value="1">Hiển thị
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php if (isset($value['Status'])&&$value['Status']==2) {
                           echo 'checked';
                        } ?>  name="Status" value="2">Sản phẩm hot
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php if (isset($value['Status'])&&$value['Status']==0) {
                           echo 'checked';
                        } ?>  name="Status" value="0">Ẩn
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_pro">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
             <?php  
               }
             }
            
                 
                 ?>
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