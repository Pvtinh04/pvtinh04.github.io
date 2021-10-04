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
    <div class="col-lg-12">
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
</div>
<!-- /.row -->
<!-- /.row promotiom -->

<div class="row">
    <div class="col-lg-12">
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
