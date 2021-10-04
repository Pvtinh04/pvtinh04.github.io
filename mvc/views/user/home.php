<!-- START banner -->
<?php include_once 'layout/banner.php'; ?>
<!-- END banner -->

<div class="clearfix"></div>

<div class="container_fullwidth">
   <div class="container">
      <!-- hot pro -->
      <?php  
         if (count($products_hot) > 0) {
      ?>
            <div class="hot-products">
               <h3 class="title">Sản phẩm <a href="danh-sach-san-pham/hot.html"><strong>Hot</strong></a></h3>
               <div id="hot">
                  <div class="row">
                     <?php  
                        $countPros = 0;
                        foreach ($products_hot as $rowPro) {
                           $countPros += 1;
                           if ($countPros<=4) {
                     ?>
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="products">
                                 <?php if ($rowPro['Sale'] > 0) {
                                    echo '<div class="offer">- '.$rowPro['Sale'].'%</div>';
                                 } ?>
                                 <div class="thumbnail"><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html'; ?>"><img src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>"></a></div>
                                 <div class="productname"><?php echo $rowPro['ProductName']; ?></div>
                                 <h4 class="price">
                                    <span class="new_price">
                                       <?php echo number_format($rowPro['PromotionPrice']); ?><i>đ</i>
                                    </span>
                                    <?php  
                                       if ($rowPro['Sale']>0) {
                                    ?>
                                          <small>
                                             <span class="old_price">
                                                <?php echo number_format($rowPro['Price']); ?><i>đ</i>
                                             </span>
                                          </small>
                                    <?php      
                                       }
                                    ?>
                                 </h4>
                                 <div class="button_group">
                                    <button type="button" class="button add_cart" value="<?php echo $rowPro['ProductID']; ?>"  quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
                                 </div>
                              </div>
                           </div>
                     <?php
                           }
                        }
                     ?>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="see_more"><a href="danh-sach-san-pham/hot.html">Xem thêm</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
      <?php
         }
      ?>

      <!-- new pro -->
      <?php  
         if (count($products_new) > 0) {
      ?>
            <div class="new-products">
               <h3 class="title">Sản phẩm <a href="danh-sach-san-pham/new.html"><strong>Mới</strong></a></h3>
               <div id="new">
                  <div class="row">
                     <?php  
                        $countPros = 0;
                        foreach ($products_new as $rowPro) {
                           $countPros += 1;
                           if ($countPros<=4) {
                     ?>
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="products">
                                 <?php if ($rowPro['Sale'] > 0) {
                                    echo '<div class="offer">- '.$rowPro['Sale'].'%</div>';
                                 } ?>
                                 <div class="thumbnail"><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html'; ?>"><img src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>"></a></div>
                                 <div class="productname"><?php echo $rowPro['ProductName']; ?></div>
                                 <h4 class="price">
                                    <span class="new_price">
                                       <?php echo number_format($rowPro['PromotionPrice']); ?><i>đ</i>
                                    </span>
                                    <?php  
                                       if ($rowPro['Sale']>0) {
                                    ?>
                                          <small>
                                             <span class="old_price">
                                                <?php echo number_format($rowPro['Price']); ?><i>đ</i>
                                             </span>
                                          </small>
                                    <?php      
                                       }
                                    ?>
                                 </h4>
                                 <div class="button_group">
                                    <button class="button add_cart" type="button" value="<?php echo $rowPro['ProductID']; ?>"  quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
                                 </div>
                              </div>
                           </div>
                     <?php
                           }
                        }
                     ?>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="see_more"><a href="danh-sach-san-pham/new.html">Xem thêm</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
      <?php
         }
      ?>

      <!-- all pro -->
      <?php  
         if (count($products_all) > 0) {
      ?>
            <div class="all-products">
               <h3 class="title"><a href="index.php?page=productlist"><strong>Tất cả</strong></a> sản phẩm</h3>
               <div id="all">
                  <div class="row">
                     <?php  
                        $countPros = 0;
                        foreach ($products_all as $rowPro) {
                           $countPros += 1;
                           if ($countPros<=4) {
                     ?>
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="products">
                                 <?php if ($rowPro['Sale'] > 0) {
                                    echo '<div class="offer">- '.$rowPro['Sale'].'%</div>';
                                 } ?>
                                 <div class="thumbnail"><a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html'; ?>"><img src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>"></a></div>
                                 <div class="productname"><?php echo $rowPro['ProductName']; ?></div>
                                 <h4 class="price">
                                    <span class="new_price">
                                       <?php echo number_format($rowPro['PromotionPrice']); ?><i>đ</i>
                                    </span>
                                    <?php  
                                       if ($rowPro['Sale']>0) {
                                    ?>
                                          <small>
                                             <span class="old_price">
                                                <?php echo number_format($rowPro['Price']); ?><i>đ</i>
                                             </span>
                                          </small>
                                    <?php      
                                       }
                                    ?>
                                 </h4>
                                 <div class="button_group">
                                    <button class="button add_cart" type="button" value="<?php echo $rowPro['ProductID']; ?>"  quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
                                 </div>
                              </div>
                           </div>
                     <?php
                           }
                        }
                     ?>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="see_more"><a href="index.php?page=productlist">Xem thêm</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
      <?php
         }
      ?>

        <!-- New -->
     <?php  
         if (count($new_home) > 0) {
      ?>
            <div class="all-products all-news">
               <h3 class="title"><a href="newlist.html"><strong>Bí quyết</strong></a> làm đẹp</h3>
               <div id="all-news">
                  <div class="row">
                     <?php  
                        foreach ($new_home as $value) {
                     ?>
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                              <div class="products news">
                              <a href="<?php echo 'bai-viet/'.$value['NewID'].'/'.makeUrl($value['Title']).'.html'; ?>">
                                 <div class="thumbnail" style ="height : 280px;"><img src="public/images/new/<?php echo $value['NewImage']; ?>" ></div>
                                 <div class="productname" style = "white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><?php echo $value['Title']; ?></div>
                                
                                 <div class="button_group" style = "height : 100px; overflow: hidden; text-overflow: ellipsis;">
                                    <p class="new_des" ><?php echo $value['Description']; ?></p>
                                 </div>
                                 </a>
                              </div>
                           </div>
                     <?php
                        }  
                     ?>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="see_more"><a href="newlist.html">Xem thêm</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
      <?php
         }
      ?> 

      <!-- brand -->
      <?php include_once 'layout/brand.php'; ?>
   </div>
</div>

