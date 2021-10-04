<div class="footer">
  <div class="footer-info">
   <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-logo">
          <a href="index.html"><img src="public/images/logos/logo.png" alt="KenShop"></a>
        </div>
      </div>
      <?php
        $contact = new User_c();
        $rs = $contact->contact();
        foreach ($rs as $key => $value) {
    	?>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h4 class="title">Thông Tin <strong>Liên Hệ</strong></h4>
            <p>No.  <?php echo $value['Address']; ?></p>
            <p>Call Us :  <?php echo $value['Hotline']; ?></p>
            <p>Email :  <?php echo $value['Email']; ?></p>
          </div>
      <?php
        }
      ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <h4 class="title">Chăm Sóc<strong> Khách Hàng</strong></h4>
        <ul class="support">
          <li><a href="blog.html">Về chúng tôi</a></li>
          <li><a href="chinh-sach-van-chuyen.html">Chính sách vận chuyển</a></li>
          <li><a href="chinh-sach-rieng-tu.html">Chính sách riêng tư</a></li>
          <li><a href="chinh-sach-bao-hanh.html">Chính sách bảo hành</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h4 class="title">Kết Nối <strong>Với Chúng Tôi</strong></h4>
          <ul class="social-icon" style="float: left;">
            <li><a href="#" class="linkedin"></a></li>
            <li><a href="#" class="google-plus"></a></li>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
          </ul>
      </div>
  </div>
</div>
<div class="copyright-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <p>Copyright © 2020. Designed by <a href="#">Team 01</a>. All rights reseved</p>
      </div>

    </div>
  </div>
</div>