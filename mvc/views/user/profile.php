<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h3 class="title">Thông tin cá nhân <hr></h3>
        <?php  
          if (isset($_SESSION['note'])) {
        ?>
        <div class="alert alert-danger" id="note">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Thông báo!</strong> <?php echo $_SESSION['note']; ?> 
        </div>
        <?php  
          }
          unset($_SESSION['note']);
        ?>
        <br>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4" id="profile_avatar">
            <img src="https://www.alliancerehabmed.com/wp-content/uploads/icon-avatar-default.png" alt="" id="avatar">
            <div class="col-md-12" id="edit_profile">
              <span data-toggle="modal" data-target="#modal_edit_user" class="glyphicon glyphicon-pencil"></span>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <table class="table table-striped table-hover">
              <tbody>
                <tr>
                  <th width="20%">Tên tài khoản</th>
                  <td><?php echo $user['Username']; ?></td>
                </tr>
                <tr>
                  <th>Họ và tên</th>
                  <td><?php echo $user['FirstName'].' '.$user['LastName']; ?></td>
                </tr>
                <tr>
                  <th>Số điện thoại</th>
                  <td><?php echo $user['Phone']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $user['Email']; ?></td>
                </tr>
                <tr>
                  <th>Địa chỉ</th>
                  <td><?php echo $user['Address']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal fade" id="modal_edit_user" role="dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" onclick="Reset('fm_edit_user')">&times;</button>
                  <h4 class="modal-title">Cập nhập tài khoản</h4>
              </div>
              <div class="modal-body">
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
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" value="Submit" class="btn btn-primary" name="sm_edit_user">Lưu</button>
                        <button type="button" value="Reset" class="btn btn-danger" onclick="Reset('fm_edit_user')">Reset</button>
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

    </div>
    <div class="clearfix">
    </div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
</div>
