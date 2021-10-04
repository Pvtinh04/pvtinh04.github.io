<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="checkout-page">
          <ol class="checkout-steps">
            <li class="steps active">
              <a href="#" class="step-title">
                Đăng nhập
              </a>
              <div class="step-description">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="run-customer">
                      <form action="" method="POST" role="form" name="fm_login" id="fm_login" onsubmit="return validate_login();">
                        <div class="form-group">
                        <div class="form-group">
                          <label for="email">Tài khoản <span class="require_input" id="error_email">*</span></label>
                          <input type="email" class="form-control" id="email_login" name="email" value="<?php if (isset($email)) { echo $email; } ?>">
                        </div>
                        <div class="form-group">
                          <label for="passw">Mật khẩu <span class="require_input" id="error_passw">*</span></label>
                          <input type="password" class="form-control" id="passw_login" name="passw" value="">
                        </div>
                        <div id="err_login"><?php if (isset($err_login)) { echo $err_login;} ?></div><br>
                        <button type="submit" id="sm_login" name="sm_login">Đăng nhập</button> <span>Chưa có tài khoản? <a href="index.php?page=register" style="color: red">Đăng ký</a></span>
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
