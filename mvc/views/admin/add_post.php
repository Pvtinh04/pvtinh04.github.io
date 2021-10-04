<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Danh mục
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-user"></i>  <a href="index.php?page=cate_all">Danh mục</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Bài viết
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
<div class="col-lg-6 cate">
<h2> Thêm mới bài viết</h2>
<form class="form-horizontal" action="" enctype = "multipart/form-data" method="post"  >
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Tên bài viết:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value = ""   name="NewName">
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
					<option value="<?php echo $catepost['NewCategoryID'] ;?>" ><?php echo $catepost['Name'] ;?></option>
					<?php   } ?>
					</select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Thông tin ngắn:</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"  id="Description" name="Description">  </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  >Hình ảnh:</label>
                    <div class="col-sm-10">
                    
                    <br />
                    <br />
                    <input type="file" name="fileupload[]"   id="img_file">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Thông tin bài viết:</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" value= ""  id="Detail" name="Detail"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Tác vụ:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input  type="radio"  name="Status" value="1">Hiển thị
                        </label>
                        <label class="radio-inline">
                            <input  type="radio"  name="Status" value="0">Ẩn
                        </label>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_post">Thêm</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            </div>
    <div class="col-lg-6 cate">
        <h2> Danh sách bài viết</h2>
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
        <div class="table-responsive" id="table_post">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_post">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Danh mục</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thông tin</th>    
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                      
                        foreach ($new as $value) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $value['Title']; ?></td>
                                <td width=10%><?php foreach ($rs as $cate) {
                                    if ($value['NewCategoryID']==$cate['NewCategoryID']) {
                                     echo $cate['Name'];
                                    }
                                }
                              
                               ?></td>
                                <td><img width=80% src="../public/images/new/<?php echo $value['NewImage']; ?>" alt=""></td>
                                <td width=40%><?php echo $value['Description']; ?></td>
                               
                               
                                <td>
                                    <?php 
                                        if ($value['Status'] >0) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="index.php?page=category&method=edit_post&id=<?php echo $value['NewID'];  ?>">
                                        <span name="edit" class="action glyphicon glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <span name="delete" class="action glyphicon glyphicon-remove remove_post" id="<?php echo $value['NewID']; ?>"></span>
                                </td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody> 
                <tfoot>
                    <tr>
                    <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Danh mục</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thông tin</th>    
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