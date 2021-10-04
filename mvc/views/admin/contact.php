<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Contact
        </h1>

    </div>
</div>
<!-- /.row banner-->

<div class="row">
    <h2>Contact</h2>
    <div class="col-lg-12 " id="table_contact">

        <div class="table-responsive" id="list_contact">
            <table class="table table-bordered table-hover table-striped" id="pro_cate">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th width="30%">Content</th>


                        <th >Hotline</th>

                        <th>Email</th>
                        <th width="25%">Address</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                	<?php

$contact = new Admin_c();
$rs = $contact->contact();
$count = 0;
foreach ($rs as $key => $value) {
	$count++;

	?>
                    <tr>
                        <td><?php echo $count; ?></td>

                        <td><?php echo $value['Content']; ?></td>
                        <td><?php echo $value['Hotline']; ?></td>
                        <td><?php echo $value['Email']; ?></td>
                        <td><?php echo $value['Address']; ?></td>
							<td>

                            <span name="edit" class="action glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target=".myModal_contact"></span>

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
<div id="myModal_contact" class="modal fade myModal_contact" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Chỉnh sửa thông tin liên lạc</h4>
        </div>
        <?php
if (isset($rs)) {
	foreach ($rs as $key => $value) {

	}

	?>
        <div class="modal-body">

            <!-- Form add & edit product -->
            <form class="form-horizontal" id="forms_md" action="" method="POST" role="form" >

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Hotline</label>
                    <div class="col-sm-10">
                        <input type="phone" id="hotline_md" class="form-control" value="<?php echo $value['Hotline']; ?>" id="pro_code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Email</label>
                    <div class="col-sm-10">
                        <input id="email_md" type="email" value="<?php echo $value['Email']; ?>" class="form-control" id="pro_code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Address</label>
                    <div class="col-sm-10">
                        <input id="address_md" type="text" value="<?php echo $value['Address']; ?>" class="form-control" id="pro_code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pro_code">Content</label>
                    <div class="col-sm-10">
                        <textarea  id="content_md" cols="20" rows="15" type="text"  class="form-control" ><?php echo $value['Content']; ?></textarea>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="edit_contact" value="<?php echo $value['ContactID']; ?>" class="btn btn-primary">Lưu</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>

                    </div>
                    <span id="noti_check_md"></span>
                </div>
            </form>

        </div>
    <?php }?>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
</div>
