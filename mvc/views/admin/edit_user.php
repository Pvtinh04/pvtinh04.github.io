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
            <li class="active">
                <i class="glyphicon glyphicon-pencil"></i> Sửa tài khoản
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" id="table_user">
    <div class="col-lg-12 cate" id="table_user_data">
        <h2> Sửa tài khoản</h2>
        <!-- Form edit user -->
        <form class="form-horizontal" action="" method="POST" role="form" name="fm_edit_user" id="fm_edit_user" onsubmit="return validate_user()">
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">Họ: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" name="firstName" onblur="check_firstName()" value="<?php echo $user['FirstName']; ?>">
                    <p class="require_input" id="error_firstName"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lastName">Tên: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" name="lastName" onblur="check_lastName()" value="<?php echo $user['LastName']; ?>">
                    <p class="require_input" id="error_lastName"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="userName">Tên tài khoản: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="userName" name="userName" onblur="check_userName()" value="<?php echo $user['Username']; ?>">
                    <p class="require_input" id="error_userName"><?php if (isset($err_userName)) { echo $err_userName; } ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" onblur="check_email()" value="<?php echo $user['Email']; ?>">
                    <p class="require_input" id="error_email"><?php if (isset($err_email)) { echo $err_email; } ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Số điện thoại: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" onblur="check_phone()" value="<?php echo $user['Phone']; ?>">
                    <p class="require_input" id="error_phone"><?php if (isset($err_phone)) { echo $err_phone; } ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Địa chỉ: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['Address']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Chức vụ: <span class="require_input">*</span></label>
                <div class="col-sm-10">
                    <?php  
                        for ($i=$_SESSION['status']; $i >= 1 ; $i--) { 
                            $statusVal = ($i == 3) ? 'Quản trị cấp cao' : ($i == 2) ? 'Quản trị cấp thấp' : 'Khách hàng';
                    ?>
                            <label class="radio-inline">
                                <input type="radio" id="<?php echo $i; ?>" name="status" value="<?php echo $i; ?>" required <?php if($user['Status']==$i){echo 'checked'; } ?>> <?php echo $statusVal; ?>
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
                        <input type="checkbox" name="stt" id="stt" value="1" <?php if($user['Stt']==1){echo 'checked'; } ?>>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_user">Lưu</button>
                <button type="button" value="Reset" class="btn btn-danger" onclick="Reset('fm_edit_user')">Reset</button>
                </div>
            </div>
        </form>
        <div class="col-lg-12 col-md-12 col-sm-12"><a href="index.php?page=user">Danh sách User</a></div>
    </div>
</div>