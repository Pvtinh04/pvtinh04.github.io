<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- chi tiết sp -->
        <div class="products-details">
          <!-- hình ảnh sp -->
          <div class="preview_image">
            <div class="preview-small">
              <?php if ($rowPro['Sale']>0) {
                echo '<div class="offer"> -'.$rowPro['Sale'].'%</div>';
              } ?>
              <img id="zoom_03" src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>">
            </div>
            <div class="thum-image">
              <ul id="gallery_01" class="prev-thum">
                <?php  
                  foreach ($getProImgs_ID as $key => $rowProImg) {
                ?>
                    <li>
                      <a href="#" data-toggle="modal" data-target="<?php echo '.image_thump'.$key; ?>">
                        <img src="public/images/products/<?php echo $rowProImg['Image']; ?>" alt="">
                      </a>
                      <!-- Modal -->
                      <div class="modal fade <?php echo 'image_thump'.$key; ?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-body">
                              <img src="public/images/products/<?php echo $rowProImg['Image']; ?>" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                <?php
                  }
                ?>
              </ul>
            </div>
          </div>
          <!-- mô tả về sp -->
          <div class="products-description">
            <h5 class="name">
              <?php echo $rowPro['ProductName']; ?>
            </h5>
            <!-- hiển thị số sao -->
            <p>
              <?php
                $n = $rowPro['Rate'];
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
              <a class="review_num" href="<?php echo "san-pham/".$rowPro['ProductID']."/".makeUrl($rowPro['ProductName']).".html#Tags"; ?>">
                <?php echo $rowPro['ViewCount']; ?> Review(s)
              </a>
            </p>
            <!-- hiển thị mã code -->
            <p>
              Mã sản phẩm: <i style="color: red"><?php echo $rowPro['ProductCode']; ?></i>
            </p>
            <!-- hiển thị số lượng tồn kho -->
            <p>
              Số lượng: <i style="color: red"><?php echo $rowPro['Quantity']; ?></i>
            </p>
            <!-- hiển thị hãng -->
            <p>
              Hãng: <i style="color: red"><?php echo $rowPro['Name']; ?></i>
            </p>
            <!-- mô tả ngắn -->
            <p>
              <?php echo $rowPro['Description']; ?>
            </p>
            <hr class="border">
            <!-- giá tiền -->
            <div class="price">
              Giá : 
              <span class="new_price">
                <?php echo number_format($rowPro['PromotionPrice']); ?>
                <sup>
                  đ
                </sup>
              </span>
              <?php  
                if ($rowPro['Sale'] > 0) {
              ?>
                  <span class="old_price">
                    <?php echo number_format($rowPro['Price']); ?>
                    <sup>
                      đ
                    </sup>
                  </span>
              <?php    
                }
              ?>
            </div>
            <hr class="border">
            <div class="wided">
              <!-- Form add to cart -->
              <form action="" method="POST" name="fm_cart" id="fm_cart">
                <div class="qty">
                  Số lượng &nbsp;&nbsp;: 
                  <input type="number" min="1" max="20" value="1" id="qty">
                </div>
                <div class="button_group">
                  <?php  
                    if ($rowPro['Quantity'] > 0) {
                  ?>
                      <button type="submit" class="button add_cart" id="sm_cart" name="sm_cart" value="<?php echo $rowPro['ProductID']; ?>"  quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
                  <?php
                    }else{
                  ?>
                      <button class="button" name="" disabled>Đã hết hàng</button>
                  <?php
                    }
                  ?>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <div class="clearfix"></div>
            <hr class="border">
            <img src="public/images/icons/share.png" alt="" class="pull-right">
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="tab-box">
          <div id="tabnav">
            <ul>
              <li><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html#Description'; ?>">MÔ TẢ</a></li>
              <?php  
                if ($show == 1) {
              ?>
                  <li><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html#Reviews'; ?>">ĐÁNH GIÁ</a></li>
              <?php  
                }
              ?>
              <li><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html#Tags'; ?>">BÌNH LUẬN</a></li>
            </ul>
          </div>
          <div class="tab-content-wrap">
            <div class="tab-content" id="Description">
              <p>
                <?php echo $rowPro['Detail']; ?>
              </p>
            </div>
            <!-- Form rate --> 
            <?php  
              if ($show == 1) {
            ?>
                <div class="tab-content" id="Reviews">
                  <form action="" method="POST" name="fm_rate" id="fm_rate" onsubmit="return validate_fm_rate()">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label for="name">Tên</label>
                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['user']['FirstName'].' '.$_SESSION['user']['LastName']; ?>" disabled>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user']['Email']; ?>" disabled>
                        </div>
                        <div class="form-group">
                          <label for="summary">Tóm tắt <span class="require_input" id="error_summary"></span></label>
                          <input type="text" class="form-control" id="summary" name="summary" value="" placeholder="Tóm tắt ngắn không quá 500 ký tự..." onkeyup="check_summary()">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Đánh giá <span class="require_input" id="error_ratePoint">*</span></label>
                              <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" id="ratePoint" name="whatever1" class="rating-value" value="0">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="comment">Nội dung <span class="require_input" id="error_comment">*</span></label>
                              <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <input type="submit" value="Gửi" class="button" name="sm_rate" id="sm_rate">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            <?php
              }
            ?>
            <!-- END Form rate -->
            <!-- Xem đánh giá -->
            <div class="tab-content" id="Tags">
              <?php
                if (count($getProRate_ID) > 0) {
                  foreach ($getProRate_ID as $rowRate) {
              ?>
                    <div class="review">
                      <!-- Hiển thị số sao -->
                      <p class="rating">
                        <?php 
                          $n = $rowRate['RatePoint'];
                          for ($i=0; $i < $n ; $i++) { 
                            echo '<i class="fa fa-star light-red"></i>';
                          }
                          for ($i=$n; $i < 5; $i++) { 
                            echo '<i class="fa fa-star-o gray"></i>';
                          }
                        ?>
                      </p>
                      <!-- end hiển thị số sao -->
                      <h5 class="reviewer">
                        <?php echo $rowRate['Name']; ?> 
                        <small class="rate"><?php echo $rowRate['Summary']; ?></small>
                      </h5>
                      <p class="review-date">
                        <?php echo $rowRate['DateCreate']; ?>
                      </p>
                      <p>
                        <?php echo $rowRate['Comment']; ?>
                      </p>
                    </div>
              <?php
                  }
                }else{
                  echo "<p style='color:red'>Không có bình luận nào về sản phẩm</p>";
                }
              ?>
            </div> 
          </div>
        </div>
        <div class="clearfix">
        </div>
      </div>
      <div class="col-md-4">
        <div class="special-deal leftbar">
          <h4 class="title">
            Sản Phẩm 
            <a href="danh-sach-san-pham/hot.html"><strong>HOT</strong></a>
            
          </h4>
    		  <?php 
      		  $randdomHOT = new User_c;
      		  $res = $randdomHOT->randdomHot();
      		  foreach ($res as $key=>$value){
    		  
    		  ?>
              <div class="special-item">
                <div class="product-image">
                  <a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html'; ?>">
                    <img  src="public/images/products/<?php echo $value['ProductImage']; ?>" alt="">
                  </a>
                </div>
                <div class="product-info">
                  <p class="proRandom">
                   <?php echo $value['ProductName'] ?>
                  </p>
                  <h5 class="price">
                   <?php echo number_format($value['PromotionPrice']); ?>
                  </h5>
                </div>
              </div>
    		  <?php } ?>
        </div>
  		  <div class="clearfix"></div>
        <div class="fbl-box leftbar">
          <h3 class="title">
            Facebook
          </h3>
          <iframe style="width:100%;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhangnhatnoidiakenshop%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
  <div class="clearfix"></div>
</div>
