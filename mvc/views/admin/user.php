<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Quản trị User
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-user"></i>  <a href="index.php?page=user">Quản lý User</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Danh sách User
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> 
            <span>
                Danh sách User
            </span>
            <span style="float: right;">
                <button type="button" class="btn btn-default" name="add_user" id="add_user" data-toggle="modal" data-target="#modal_add_user">
                    <span class="glyphicon glyphicon-plus"></span> Thêm
                </button>
            </span>
        </h2>
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
        <div class="table-responsive" id="table_user">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_user">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Họ</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Tên tài khoản</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Số điện thoại</th>
                        <th class="th-sm">Địa chỉ</th>
                        <th class="th-sm">Chức vụ</th>
                        <th class="th-sm">Hoạt động</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                        foreach ($getUsers as $rowUser) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $rowUser['FirstName']; ?></td>
                                <td><?php echo $rowUser['LastName']; ?></td>
                                <td><?php echo $rowUser['Username']; ?></td>
                                <td><?php echo $rowUser['Email']; ?></td>
                                <td><?php echo $rowUser['Phone']; ?></td>
                                <td><?php echo $rowUser['Address']; ?></td>
                                <td>
                                    <?php  
                                        switch ($rowUser['Status']) {
                                            case 3:
                                                echo "Quản trị cấp cao";
                                                break;
                                            case 2:
                                                echo "Quản trị cấp thấp";
                                                break;
                                            case 1:
                                                echo "Khách hàng";
                                                break;
                                            default:
                                                # code...
                                                break;
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if ($rowUser['Stt'] == 1) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="index.php?page=user&method=edit_user&userID=<?php echo $rowUser['UserID']; ?>">
                                        <span name="edit" class="action glyphicon glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <span name="delete" class="action glyphicon glyphicon-remove remove_user" id="<?php echo $rowUser['UserID']; ?>"></span>
                                </td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody> 
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Tên tài khoản</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Chức vụ</th>
                        <th>Hoạt động</th>
                        <th>Tác vụ</th>
                    </tr>
                </tfoot>
            </table>

        </div><!-- 
        <button type="button" class="btn btn-default" name="add_user" id="add_user" data-toggle="modal" data-target="#modal_add_user">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </button> -->

    </div>
</div>
<!-- /.row -->

<!-- Add User -->
<div class="modal fade" id="modal_add_user" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="Reset('fm_add_user')">&times;</button>
                <h4 class="modal-title">Thêm tài khoản</h4>
            </div>
            <div class="modal-body">
                <!-- Form add user -->
                <form class="form-horizontal" action="" method="POST" role="form" name="fm_add_user" id="fm_add_user" onsubmit="return validate_user()">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="firstName">Họ: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstName" name="firstName" onblur="check_firstName()" value="<?php if(isset($firstName)){echo $firstName;} ?>">
                            <p class="require_input" id="error_firstName"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lastName">Tên: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastName" name="lastName" onblur="check_lastName()" value="<?php if(isset($lastName)){echo $lastName;} ?>">
                            <p class="require_input" id="error_lastName"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="userName">Tên tài khoản: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="userName" name="userName" onblur="check_userName()" value="<?php if(isset($userName)){echo $userName;} ?>">
                            <p class="require_input" id="error_userName"><?php if(isset($err_userName)){echo $err_userName;} ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" onblur="check_email()" value="<?php if(isset($email)){echo $email;} ?>">
                            <p class="require_input" id="error_email"><?php if(isset($err_email)){echo $err_email;} ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phone">Số điện thoại: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" onblur="check_phone()" value="<?php if(isset($phone)){echo $phone;} ?>">
                            <p class="require_input" id="error_phone"><?php if(isset($err_phone)){echo $err_phone;} ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="passw">Mật khẩu: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passw" name="passw" value="<?php if(isset($passw)){echo $passw;} ?>" onblur="check_passw()">
                            <p class="require_input" id="error_passw"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="address">Địa chỉ: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($address)){echo $address;} ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Chức vụ: <span class="require_input">*</span></label>
                        <div class="col-sm-10">
                            <?php  
                                for ($i=$_SESSION['status']; $i >= 1  ; $i--) { 
                                    if ($i == 3) {
                                        $statusVal = 'Quản trị cấp cao';
                                    }else if ($i == 2) {
                                        $statusVal = 'Quản trị cấp thấp';
                                    }else {
                                        $statusVal = 'Khách hàng';
                                    }
                            ?>
                                    <label class="radio-inline">
                                        <input type="radio" id="<?php echo $i; ?>" name="status" value="<?php echo $i; ?>" required <?php if(isset($status) && $status == $i){echo 'checked'; } ?>> <?php echo $statusVal; ?>
                                    </label>
                            <?php
                                }
                            ?>
                            <p class="require_input" id="error_status"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Hoạt động:</label>
                        <div class="col-sm-10">
                            <label for="" class="checkbox-inline">
                                <input <?php if( isset($stt_u) && $stt_u == 1 ){ echo "checked" ;} ?> type="checkbox" id="stt" value="1" name="stt">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" value="Submit" class="btn btn-primary" name="sm_add_user">Lưu</button>
                        <button type="button" value="Reset" class="btn btn-danger" onclick="Reset('fm_add_user')">Reset</button>
                        </div>
                    </div>
                </form>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="Reset('fm_edit_user')">Close</button>
            </div>
        </div>
    </div>
</div>