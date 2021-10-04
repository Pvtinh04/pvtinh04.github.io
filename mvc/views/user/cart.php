<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
      <div class="col-md-12" id="table-cart">
        <div id="table-cart-data">
          <h3 class="title">
            Giỏ hàng
          </h3>
          <div class="clearfix"></div>
          <div class="p"></div>
          <?php  
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
          ?>
              <form action="" method="POST" name="sm_update_cart" id="sm_update_cart">
                <table class="shop-table">
                  <thead>
                    <tr>
                      <th>
                        Hình ảnh
                      </th>
                      <th>
                        Chi tiết
                      </th>
                      <th>
                        Giá
                      </th>
                      <th>
                        Số lượng
                      </th>
                      <th>
                        Tổng
                      </th>
                      <th>
                        Xóa
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $total_price_all = 0;
                        foreach ($_SESSION['cart'] as $ProID => $rowCart) {
                          $total_price_aPro = $rowCart['qty']*$rowCart['PromotionPrice'];
                          $total_price_all += $total_price_aPro;
                    ?>
                          <tr>
                            <td>
                              <a href="<?php echo 'san-pham/'.$ProID.'/'.makeUrl($rowCart['ProductName']).'.html'; ?>">
                                <img src="public/images/products/<?php echo $rowCart['ProductImage']; ?>" alt="">
                              </a>
                            </td>
                            <td>
                              <div class="shop-details">
                                <div class="productname">
                                  <?php echo $rowCart['ProductName']; ?>
                                </div>
                                <p>
                                  <!-- Hiển thị số sao -->
                                  <?php
                                    $n = $rowCart['Rate'];
                                    if ($n != 0) {
                                      for ($i=0; $i < floor($n); $i++) { 
                                        echo '<i class="fa fa-star light-red"></i>';
                                      }
                                      if (ceil($n) != $n) {
                                        echo '<i class="fa fa-star-half-o light-red"></i>';
                                      }
                                      for ($i=ceil($n); $i < 5; $i++) { 
                                        echo '<i class="fa fa-star-o gray"></i>';
                                      }
                                    }else{
                                      for ($i=$n; $i < 5; $i++) { 
                                        echo '<i class="fa fa-star-o gray"></i>';
                                      }
                                    }
                                  ?>
                                  <a class="review_num" href="<?php echo "san-pham/".$rowCart['ProductID']."/".makeUrl($rowCart['ProductName']).".html#Tags"; ?>">
                                    <?php echo $rowCart['ViewCount']; ?> Review(s)
                                  </a>
                                </p>
                                <p>
                                  Mã sản phẩm : 
                                  <strong class="pcode">
                                    <?php echo $rowCart['ProductCode']; ?>
                                  </strong>
                                </p>
                                <p>
                                  Số lượng: 
                                  <strong class="pcode">
                                    <?php echo $rowCart['Quantity']; ?>
                                  </strong>
                                </p>
                              </div>
                            </td>
                            <td>
                              <h5>
                                <?php echo number_format($rowCart['PromotionPrice']); ?>
                              </h5>
                            </td>
                            <td>
                              <input onchange="UpdateCart(<?php echo $ProID; ?>, this.value, <?php echo $rowCart['Quantity']; ?>)" name="<?php echo $ProID; ?>" type="number" min="1" max="20" value="<?php echo $rowCart['qty']; ?>" id="<?php echo $ProID; ?>">
                            </td>
                            <td>
                              <h5>
                                <strong class="red">
                                  <?php echo number_format($total_price_aPro); ?>
                                </strong>
                              </h5>
                            </td>
                            <td>
                              <a href="#">
                                <img src="public/images/icons/remove.png" alt="" class="remove_cart" id="<?php echo $ProID; ?>">
                              </a>
                            </td>
                          </tr>
                      <?php  
                        }
                      ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="6">
                        <a href="index.php">
                          <button class="pull-left">
                            Continue Shopping
                          </button>
                        </a>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </form>
              <div class="clearfix"></div>
              <?php  
                $name = '';
                $phone = '';
                $email = '';
                $address = '';
                if (isset($_SESSION['user'])) {
                  $name = $_SESSION['user']['FirstName'].' '.$_SESSION['user']['LastName'];
                  $phone = $_SESSION['user']['Phone'];
                  $email = $_SESSION['user']['Email'];
                  $address = $_SESSION['user']['Address'];
                }
              ?>
              <div class="row">
                <div class="col-md-8 col-sm-6">
                  <div class="shippingbox">
                    <form action="" method="POST" role="form" name="fm_order" id="fm_order" onsubmit="return validate_order()">
                      <legend><h4>ĐẶT HÀNG</h4></legend>
                      <br><br>
                      <div class="form-group">
                        <label for="name">Họ và tên <span class="require_input" id="error_name">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên..." value="<?php echo $name; ?>" onblur="check_name()" <?php if(isset($_SESSION['user'])){ echo 'disabled';} ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">Số điện thoại <span class="require_input" id="error_phone">*</span></label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="0989898989" value="<?php echo $phone; ?>" onblur="check_phone()" <?php if(isset($_SESSION['user'])){ echo 'disabled';} ?>>
                      </div>
                      <div class="form-group">
                        <label for="email">Email <span class="require_input" id="error_email">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email..." value="<?php echo $email; ?>" onblur="check_email()" <?php if(isset($_SESSION['user'])){ echo 'disabled';} ?>>
                      </div>
                      <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ..." value="<?php echo $address; ?>" <?php if(isset($_SESSION['user'])){ echo 'disabled';} ?>>
                      </div>
                      <div class="form-group">
                        <label for="address">Ghi chú </label>
                        <textarea name="note" cols="30" rows="5" class="form-control"></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary" name="sm_order" id="sm_order">Đặt hàng</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="grandtotal">
                      <h5>
                        TỔNG TIỀN 
                      </h5>
                      <span>
                        <?php echo number_format($total_price_all); ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }else{
              echo "<h4 class='empty'>Giỏ hàng trống!</h4>";
            }
          ?>
          
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
</div>
