<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="checkout-page">
          <ol class="checkout-steps">
            <li class="steps active">
              <a href="#" class="step-title">
                Đăng ký
              </a>
              <div class="step-description">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="run-customer">
                      <form action="" method="POST" role="form" name="fm_register" id="fm_register" onsubmit="return validate_register()">
                        <div class="form-group">
                          <label for="firstName">Họ <span class="require_input" id="error_firstName">*</span>
                          </label>
                          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nguyễn Văn" onblur="check_firstName()" value="<?php if (isset($firstName)){echo $firstName;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="lastName">Tên <span class="require_input" id="error_lastName">*</span>
                          </label>
                          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="A" onblur="check_lastName()" value="<?php if (isset($lastName)){echo $lastName;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="userName">Tên tài khoản 
                            <span class="require_input" id="error_userName">* <?php if(isset($err_userName)){echo $err_userName;} ?></span>
                          </label>
                          <input type="text" class="form-control" id="userName" name="userName" placeholder="nguyena123" onblur="check_userName()" value="<?php if (isset($userName)){echo $userName;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="phone">Số điện thoại 
                            <span class="require_input" id="error_phone">* <?php if(isset($err_phone)){echo $err_phone;} ?></span></label>
                          <input type="number" class="form-control" id="phone" name="phone" placeholder="0989898989" onblur="check_phone()" value="<?php if (isset($phone)){echo $phone;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="email">Email 
                            <span class="require_input" id="error_email">* <?php if(isset($err_email)){echo $err_email;} ?></span></label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email..." onblur="check_email()" value="<?php if (isset($email)){echo $email;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="address">Địa chỉ </label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="số 1 ngõ 12 ... " value="<?php if (isset($address)){echo $address;} ?>">
                        </div>
                        <div class="form-group">
                          <label for="passw">Mật khẩu <span class="require_input" id="error_passw">*</span></label>
                          <input type="password" class="form-control" id="passw" name="passw" placeholder="**********" onblur="check_passw()">
                        </div>
                        <div class="form-group">
                          <label for="cPassw">Nhập lại mật khẩu <span class="require_input" id="error_cPassw">*</span></label>
                          <input type="password" class="form-control" id="cPassw" name="cPassw" placeholder="**********" onblur="check_cPassw()">
                        </div>
                        <button type="submit" id="sm_register" name="sm_register">Đăng ký</button><span> Bạn đã có tài khoản? <a href="index.php?page=login" style="color: blue">Đăng nhập</a></span>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
</div>
