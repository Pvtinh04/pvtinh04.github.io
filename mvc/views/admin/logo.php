<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           LOGO
        </h1>

    </div>
</div>
<!-- /.row banner-->

<div class="row">
     <h2>Logo</h2>
    <div class="col-lg-12" id="table-logo">

        <div class="table-responsive" id="list-logo">
            <table class="table table-bordered table-hover table-striped" id="pro_cate">
                <thead>
                    <tr>
                        <th>STT</th>

                        <th>Thông tin</th>

                        <th>Hình ảnh</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                	<?php

$logo = new Admin_c();
$rs = $logo->logo();
$count = 0;
foreach ($rs as $key => $value) {
	$count++;

	?>
                    <tr>
                        <td><?php echo $count; ?></td>

                        <td><?php echo $value['Description']; ?></td>
                        <td>
                        	<img src="../public/images/logos/<?php echo $value['Image']; ?>
" alt="banner_1" width="50%">
</td>
                        <td>

                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=".myModal_pro"></span>

                            <span name="delete" class="action glyphicon glyphicon-add"></span>
                        </td>
                    <?php
}?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->


<!-- Modal -->
<div id="myModal_pro" class="modal fade myModal_pro" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Chỉnh sửa hình ảnh</h4>
        </div>
        <div class="modal-body">
            <!-- Form add & edit product -->
            <form class="form-horizontal" action="" enctype = "multipart/form-data" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_img">Hình ảnh:</label>
                    <div class="col-sm-10">
                        <input type="file" name = "fileupload[]"   multiple="flase" class="form-control" id="">
                         <img src="../public/images/logos/<?php  echo $value['Image'];?>" width="250" height="250"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Thông tin:</label>
                    <div class="col-sm-10">
                        <input type="text" name = "Description" value="<?php echo $value['Description']; ?>" class="form-control" id="info">
                    </div>
                </div>
                <div class="form-group" style = "display:none;">
                    <label class="control-label col-sm-2" for="pro_code">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name = "id" value="<?php echo $value['LogoID']; ?>" class="form-control" id="info">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="" name="sm_edit_logo" class="btn btn-primary">Lưu</button>
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