

    <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Slide
        </h1>

    </div>
</div>
<!-- /.row banner-->

<div class="row">
    
    <div class="col-lg-6">
        <h2>Slide</h2>
        <div class="table-responsive">
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

$banner = new Admin_c();
$rs = $banner->slides();
$count = 0;
foreach ($rs as $key => $value) {
	$count++;
	if ($value['Status'] == 1) {
		?>
                    <tr>
                        <td><?php echo $count; ?></td>

                        <td><?php echo $value['Description']; ?></td>
                        <td>
                        	<img src="../public/images/banners/slides-banner/<?php echo $value['Image']; ?>
" alt="banner_1" height = "30%" width="50%">
</td>
                        <td>
                        <a href="index.php?page=image&method=edit_slide&id=<?php echo $value['SlideID']; ?>">
                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=".myModal_pro"></span>
                         </a>
                        </td>
                    <?php
}}?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-6">
        
        <?php 
        $banner = new Admin_c();
        $rs = $banner->slides();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        
         
        foreach ($rs as $key => $value) {
          if ($value['SlideID'] == $id) {
              # code...
          
        ?>
        <h2>Sửa đổi <?php if ($value['Status'] == 1) { echo 'slide'; } else { echo 'promotion';}?></h2>
        <form class="form-horizontal" action="" enctype = "multipart/form-data" method="POST" role="form" name="fm_pro_cate">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_img">Hình ảnh:</label>
                    <div class="col-sm-10">
                    <img src="../public/images/banners/<?php if ($value['Status'] == 1) {
                       echo 'slides-banner/'.$value['Image']; 
                    } else {echo 'promotion-banner/'.$value['Image'];} ?>" width="300" height="120"/>
                        <input type="file" name="fileupload[]" multiple="flase"  class="form-control" id="pro_img">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Thông tin:</label>
                    <div class="col-sm-10">
                        <input type="text" name = "Description" value = "<?php echo $value['Description']; ?>"  class="form-control" id="pro_code">
                    </div>
                </div>
                <div class="form-group" style ="display:none;">
                    <label class="control-label col-sm-2" for="pro_code">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name = "Status" value = "<?php echo $value['Status']; ?>"  class="form-control" id="pro_code">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" name ="sm_edit_slide" class="btn btn-primary">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        <?php  } }}   ?>
    </div>
</div>
<!-- /.row -->
<!-- /.row promotion -->

<div class="row">
    <div class="col-lg-6">
        <h2>Slide Promotion</h2>
        <div class="table-responsive">
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

$banner = new Admin_c();
$rs = $banner->slides();
$counts = 0;
foreach ($rs as $key => $value) {
	$counts++;
	if ($value['Status'] == 2) {
		?>
                    <tr>
                        <td><?php echo $counts; ?></td>

                        <td><?php echo $value['Description']; ?></td>
                        <td>
                        	<img src="../public/images/banners/promotion-banner/<?php echo $value['Image']; ?>
" alt="banner_1" height = "50%" width="50%">
</td>
                        <td>
                        <a href="index.php?page=image&method=edit_slide&id=<?php echo $value['SlideID']; ?>">
                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=".myModal_pro"></span>
                         </a>
                            
                        </td>
                    <?php
}}?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->

<!-- Modal -->
