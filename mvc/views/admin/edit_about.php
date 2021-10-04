


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
             
                 foreach ($about as $key => $value) {
                     if ($value['AboutID'] == $id ) {
                      
                 
                   # code...
               ?>
                
               
            <form class="form-horizontal" action="" enctype = "multipart/form-data" method="post"  >
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Chính sách:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = "<?php if (isset($value['Meta Title'])) {
                           echo $value['Meta Title'];
                        } ?>"   name="MetaTitle">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Đề mục:</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"  id="Title" name="Title"> <?php if (isset($value['Title'])) {
                           echo $value['Title'];
                        } ?> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Hình ảnh:</label>
                    <div class="col-sm-10">
                    <img src="../public/images/blog/<?php echo $value['Image']; ?>" width="250" height="120"/>
                    <br />
                    <br />
                    <input type="file" name="fileupload[]"   id="img_file">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Thông tin chính sách:</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" value= ""  id="Detail" name="Detail"> <?php if (isset($value['Detail'])) {
                           echo $value['Detail'];
                        } ?></textarea>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_about">Lưu</button>
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
 
 CKEDITOR.replace( 'Title', {
   uiColor: '#d1d1d1'
});
CKEDITOR.replace( 'Detail', {
   uiColor: '#d1d1d1'
});

</script>