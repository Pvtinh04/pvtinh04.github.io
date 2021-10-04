<div class="header_1">
   <div class="col-md-2 col-sm-2 col-xs-6 col-xs-fix-12">
      <div class="logo"><a href="index.html"><img class="logo_header" src="public/images/logos/logo.png" alt="KenShop"></a></div>
   </div>

   <div class="col-md-10 col-sm-10 col-xs-6 col-xs-fix-12">
      <div class="clearfix"></div>
      <div class="header_bottom">
         <ul class="option">
            <li class="header_search" id="header_search">
               <ul class="nav navbar-right top-nav">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-search"></i>
                     </a>
                     <div class="dropdown-menu">
                        <form action=""><input type="text" value="" name="header_search" placeholder="Nhập  sản phẩm cầm tìm ..."></form>
                     </div>
                  </li>
               </ul>
            </li>
            <li class="header_cart" id="header_cart">
               <ul class="nav navbar-right top-nav" id="dropdown_header_cart">
                  <li class="dropdown">
                     <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span class="cart_no">
                           <?php  
                              $total_qty = 0;
                              if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                 foreach ($_SESSION['cart'] as $proID => $rowCart) {
                                    $total_qty += $rowCart['qty'];
                                 }
                                 if ($total_qty < 10) {
                                    echo '0'.$total_qty;
                                 }else {
                                    echo $total_qty;
                                 }
                              }else{
                                 echo "00";
                              }
                           ?>
                        </span>
                     </a>
                     <div class="dropdown-menu">
                        <ul class="mega-menu-links">
                           <?php  
                              $total_price_all = 0;
                              if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                 $i = 0;
                                 foreach ($_SESSION['cart'] as $proID => $rowCart) {
                                    $total_price_aPro = $rowCart['qty']*$rowCart['PromotionPrice'];
                                    $total_price_all  += $total_price_aPro;
                                 }
                                 foreach ($_SESSION['cart'] as $proID => $rowCart) {
                                    $total_price_aPro = $rowCart['qty']*$rowCart['PromotionPrice'];
                                    $i += 1;
                           ?>
                                   <li>
                                       <div class="cart-item">
                                          <div class="image">
                                             <img src="public/images/products/<?php echo $rowCart['ProductImage']; ?>" alt=""></div>
                                          <div class="item-description">
                                             <p class="name"><?php echo $rowCart['ProductName']; ?></p>
                                             <p>Số lượng: <span class="light-red"><?php echo $rowCart['qty']; ?></span></p>
                                          </div>
                                          <div class="right">
                                             <p class="price"><?php echo number_format($total_price_aPro); ?></p>
                                             <a href="#" class="remove_cart" id="<?php echo $proID; ?>"><img src="public/images/icons/remove.png" alt="remove"></a>
                                          </div>
                                       </div>
                                    </li>
                           <?php
                                    if ($i>2) {
                                       break;
                                    }
                                 }
                              }
                           ?>

                           <li>
                              <span class="total">Tổng <strong><?php echo number_format($total_price_all).'đ'; ?></strong></span><button class="checkout" onClick="location.href='cart.html'">Xem thêm</button>
                           </li>
                     </div>
                  </li>
               </ul>
            </li>

            <li class="account" id="header_acc">
               <ul class="nav navbar-right top-nav">
                  <li class="dropdown">
                     <?php  
                        if (isset($_SESSION['status'])) {
                     ?>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="glyphicon glyphicon-user"></i>
                           <b class="caret"></b>
                           </a>
                           <div class="dropdown-menu">
                              <ul class="mega-menu-links">
                                 <?php if ($_SESSION['status'] > 1) { ?>
                                 <li><a href="admin/index.php">Quản trị</a></li>
                                 <?php } ?>
                                 <li><a href="profile.html">Profile</a></li>
                                 <li><a href="ordered.html">Đơn hàng</a></li>
                                 <li><a href="logout.html">Đăng xuất</a></li>
                              </ul>
                           </div>
                     <?php
                        }else{
                     ?>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="glyphicon glyphicon-log-in"></i>
                              <b class="caret"></b>
                           </a>
                           <div class="dropdown-menu">
                              <ul class="mega-menu-links">
                                 <li><a href="login.html">Đăng nhập</a></li>
                                 <li><a href="register.html">Đăng ký</a></li>
                              </ul>
                           </div>
                     <?php     
                        }
                     ?>
                  </li>
               </ul>
            </li>
         </ul>
         <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <li class="active dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     Trang chủ  
                     <b class="caret"></b>
                  </a>
                  <div class="dropdown-menu">
                     <ul class="mega-menu-links">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="productlist.html">Sản phẩm</a></li>
                        <li><a href="cart.html">Giỏ hàng</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                     </ul>
                  </div>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     Sản phẩm 
                     <b class="caret"></b>
                  </a>
                  <div class="dropdown-menu mega-menu">
                     <div class="row">
                        <div class="col-lg-12">
                           <ul class="mega-menu-links">
                              <?php  
                                foreach ($getProCates as $rowCate) {
                              ?>
                                  <li>
                                    <a href="<?php echo 'danh-sach-san-pham/'.$rowCate['CategoryID'].'/'.makeUrl($rowCate['Name']).'.html'; ?>">
                                      <?php echo $rowCate['Name']; ?>
                                    </a>
                                  </li>
                              <?php
                                }
                              ?>
                                 <li><a href="productlist.html">Tất cả</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li><a href="cart.html">Giỏ hàng</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="contact.html">Liên hệ</a></li>
               <li class="account dropdown" id="collapse_acc">
                  <?php  
                     if (isset($_SESSION['status'])) {
                  ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <i class="glyphicon glyphicon-user"></i>
                           <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                           <ul class="mega-menu-links">
                              <?php if ($_SESSION['status'] > 1) { ?>
                              <li><a href="admin/index.php">Quản trị</a></li>
                              <?php } ?>
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="ordered.html">Đơn hàng</a></li>
                              <li><a href="logout.html">Đăng xuất</a></li>
                           </ul>
                        </div>
                  <?php
                     }else{
                  ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <i class="glyphicon glyphicon-log-in"></i>
                           <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                           <ul class="mega-menu-links">
                              <li><a href="login.html">Đăng nhập</a></li>
                              <li><a href="register.html">Đăng ký</a></li>
                           </ul>
                        </div>
                  <?php
                     }
                  ?>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>