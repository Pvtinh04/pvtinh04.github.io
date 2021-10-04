<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 class="title contact-title">
          Liên hệ
        </h5>
        <div class="clearfix">
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.126855385423!2d105.83412361424695!3d20.98755148602072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6717776121%3A0x578a9647e3ce65f9!2zMjQwIFBo4buRIE5ndXnhu4VuIEzDom4sIEtoxrDGoW5nIE1haSwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2sus!4v1594021633656!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
      </iframe>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
          <div class="col-md-4">
      <?php
        $contact = new User_c();
$rs = $contact->contact();
foreach ($rs as $key => $value) {
      ?>
            <div class="contact-infoormation">
              <h5>
                Thông tin liên hệ
              </h5>
              <p style = "font-size : 16px; font-family: bold;">
               <?php echo $value['Content']; ?>
              </p>
              <ul>
                <li>
                  <span class="icon">
                    <img src="public/images/icons/message.png" alt="">
                  </span>
                  <p style = "font-size : 18px; font-family: bold;">
         
          </br>
                   <?php echo $value['Email']; ?>
                  </p>
                </li>
                <li>
                  <span class="icon">
                    <img src="public/images/icons/phone.png" alt="">
                  </span>
                  <p style = "font-size : 18px; font-family: bold;">
                    
          </br>
                   <?php echo $value['Hotline']; ?>
                  </p>
                </li>
                <li>
                  <span class="icon">
                    <img src="public/images/icons/address.png" alt="">
                  </span>
                  <p style = "font-size : 18px; font-family: bold;">
                    </br>
          <?php echo $value['Address']; ?>
                  </p>
                </li>
              </ul>
            </div>
          </div>
<?php }?>
          <div class="col-md-8">
            <div class="ContactForm">
              <h5>
                Gửi Messenge
              </h5>
              <form name="fm_mess" id="fm_mess" onsubmit="return validate_mess();" method="POST">
                <div class="row">
                  <div class="col-md-4">
                    <label>
                      Tên 
                      <strong  id ="error_name" class="red">
                        *
                      </strong>
                    </label>
                    <input onblur="check_name();" id = "name" class="inputfild" type="text" name="name">
                  </div>
            <div class="col-md-4">
                    <label>
                      Số điện thoại 
                      <strong class="red" id ="error_phone">
                        *
                      </strong>
                    </label>
                    <input onblur="check_phone();" id= "phone" class="inputfild" type="text" name="phone">
                  </div>
                  <div class="col-md-4">
                    <label>
                      Email
                      <strong class="red"  id ="error_email">
                        *
                      </strong>
                    </label>
                    <input onblur="check_email();" id="email" class="inputfild" type="email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>
                      Tin nhắm
                      <strong  id ="error_mess" class="red">
                        *
                      </strong>
                    </label>
                    <textarea  onblur="check_mess();" id = "mess" class="inputfild" rows="8" name="reply">
                    </textarea>
                  </div>
                </div>
                <button name="submit_feedback" class="pull-right">
                  Gửi tin nhắn
                </button>
              </form>
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