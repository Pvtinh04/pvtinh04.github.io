<div class="modal-dialog">


        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Chỉnh sửa danh mục <?php switch ($method) {
                case 'cate_pro':
                    echo "sản phẩm";
                   
                    break;
                case 'cate_post':
                   echo "bài viết";
                  
                    break;
                case 'cate_trademark':
                   echo "thương hiệu" ;
                 
                    break;
                
                default:
                    # code...
                    break;
            } ?></h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
           <?php 
           if ($method == 'cate_pro') {
            foreach ($rs as $key => $value) {
               if ($value['CategoryID'] == $id) {
                   # code...
               ?>
                
               
            <form class="form-horizontal" action="" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_editpro">Danh mục:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Name'])) {
                           echo $value['Name'];
                        } ?>"  id="name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="editpro_cate_description">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value = "<?php if (isset($value['MetaTitle'])) {
                           echo $value['MetaTitle'];
                        } ?>"  id="description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" <?php if (isset($value['Status'])&&$value['Status']==1) {
                           echo 'checked';
                        } ?> id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_cate">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            <?php
             }
            }
           
            }
            if ($method == 'cate_trademark') {
                foreach ($rs as $key => $value) {
                   if ($value['TradeMarkID'] == $id) {
            ?>
            <form class="form-horizontal" action="" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_editpro">Danh mục:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Name'])) {
                           echo $value['Name'];
                        } ?>"  id="name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="editpro_cate_description">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value = "<?php if (isset($value['MetaTitle'])) {
                           echo $value['MetaTitle'];
                        } ?>"  id="description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" <?php if (isset($value['Status'])&&$value['Status']==1) {
                           echo 'checked';
                        } ?> id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_cate">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            <?php   }
            }
           
            } 
            if ($method == 'cate_post') {
                foreach ($rs as $key => $value) {
                   if ($value['NewCategoryID'] == $id) {
                       ?>
                      <form class="form-horizontal" action="" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputInputCate_editpro">Danh mục:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Name'])) {
                           echo $value['Name'];
                        } ?>"  id="name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="editpro_cate_description">Mô tả:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value = "<?php if (isset($value['MetaTitle'])) {
                           echo $value['MetaTitle'];
                        } ?>"  id="description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox"<?php if (isset($value['Status'])&&$value['Status']=="1") {
                           echo 'checked';
                        }?> id="1" name="status" value="1">Hiển thị
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_cate">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form> 
            
                   <?php }
                }
                } ?>
        </div>
        </div>

    </div>