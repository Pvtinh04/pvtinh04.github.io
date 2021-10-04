


        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Chỉnh sửa bài viết</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
           <?php 
           
            
             if (isset($_GET['id'])) {
                $id = $_GET['id'];
             }
             
                 foreach ($new as $key => $value) {
                     if ($value['NewID'] == $id ) {
                      
                 
                   # code...
               ?>
                
               
            <form class="form-horizontal" action="" enctype = "multipart/form-data" method="post"  >
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Tên bài viết:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Title'])) {
                           echo $value['Title'];
                        } ?>"   name="NewName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Nhóm bài viết:</label>
                    <div class="col-sm-10">
                    <select name="cate">
					<?php 
						foreach ($rs as $catepost) {
                            
                        
					?>
                    <?php echo $catepost['Title'] ;?>
					<option value="<?php echo $catepost['NewCategoryID'] ;?>" <?php if ($value['NewCategoryID'] ==  $catepost['NewCategoryID']) {
                        echo 'selected="selected"';
                    }  ?>><?php echo $catepost['Name'] ;?></option>
					<?php   } ?>
					</select>
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
                    <img src="../public/images/new/<?php echo $value['NewImage']; ?>" width="120" height="120"/>
                    <br />
                    <br />
                    <input type="file" name="fileupload[]"   id="img_file">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Thông tin bài viết:</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" value= ""  id="Detail" name="Detail"> <?php if (isset($value['Detail'])) {
                           echo $value['Detail'];
                        } ?></textarea>
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
                            <input  type="radio" <?php if (isset($value['Status'])&&$value['Status']==0) {
                           echo 'checked';
                        } ?> name="Status" value="0">Ẩn
                        </label>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_post">Lưu</button>
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