
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="category leftbar">
          <h3 class="title">
            Danh mục sản phẩm
          </h3>
          <ul>
            <?php  
              foreach ($getProCates as $rowCate) {
            ?>
                <li>
                  <a href="<?php echo 'danh-sach-san-pham/'.$rowCate['CategoryID'].'/'.makeUrl($rowCate['Name']).'.html'; ?>" <?php if($cateID == $rowCate['CategoryID']){ echo 'style="color:#f7544a"';} ?>>
                    <?php echo $rowCate['Name']; ?>
                  </a>
                </li>
            <?php
              }
            ?>
            <li><a href="<?php echo 'productlist.html'; ?>" <?php if($cateID == '0'){ echo 'style="color:#f7544a"';} ?>>Tất cả</a></li>
          </ul>
        </div>
        
        <div class="fbl-box leftbar">
          <h3 class="title">
            Facebook
          </h3>
          <div>
            <iframe  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhangnhatnoidiakenshop%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		      </div>  
        </div>
      </div>
      <div class="col-md-9">
        <div class="products-list">
          <div class="pro_list_header">
            <h3 class="title">List sản phẩm 
              <strong>
              </strong>
              <small id="status">
                <?php  
                  if ($status != '0') {
                    echo '<span style="font-weight:300; text-transform: uppercase" id="showStatus"><i class="glyphicon glyphicon-menu-right"></i>'.$status.'</span>';
                  }
                ?>
              </small>
              <small>
                <?php  
                  if (count($getProCate_CateID) == 1) {
                    echo '<span style="font-weight:300; text-transform: capitalize"><i class="glyphicon glyphicon-menu-right"></i>'.$getProCate_CateID[0]['Name'].'</span>';
                  }
                ?>
              </small>
            </h3>      
          </div>

          <div class="toolbar">
            <!-- START Filter -->
            <div class="sorter">
              <div class="sort-by">
                Lọc: 
                <select name="selectOpSearch" id="selectOpSearch" onchange="Search(<?php echo $cateID; ?>, 1)">
                  <option value="ProductName" selected>Tên</option>
                  <option value="PromotionPrice">Giá</option>
                  <option value="Brand">Hãng</option>
                </select>
              </div>
              <div class="sort-by">
                Sản phẩm: 
                <select name="" id="proSttSearch" onchange="Search(<?php echo $cateID; ?>, 1)">
                  <option value="0" <?php if($status == '0'){ echo 'selected'; } ?>>Default</option>
                  <option value="hot" <?php if($status == 'hot'){ echo 'selected'; } ?>>Hot</option>
                  <option value="new" <?php if($status == 'new'){ echo 'selected'; } ?>>New</option>
                  <option value="liked">Ưa thích</option>
                  <option value="sellOut">Đã hết</option>
                </select>
              </div>
              <div class="inputSearch">
                <input onkeyup="Search(<?php echo $cateID; ?>, 1)" type="text" name="search" value="" id="inputSearch" placeholder="Nhập từ khóa cần tìm ..." class="form-control">
              </div>
            </div>
            <!-- END Filter -->
            <!-- START Phân trang -->
            <div id="selectPage">
              <div class="pager" id="dataPage">
              <?php  
                $limit    = 5;            // Số sp giới hạn trong 1 trang

                if (isset($_SESSION['total_page'])) {
                  $countPro = $_SESSION['total_page'];
                  unset($_SESSION['total_page']);
                }else{
                  $countPro = count($products);
                }

                if (isset($_SESSION['page'])) {
                  $page = $_SESSION['page'];
                  unset($_SESSION['page']);
                }else{
                  $page = 1;
                }

                $total_page = ceil($countPro/$limit);   // Tổng số trang

                if ($total_page > 0) {
              ?>
                  <a href="#" class="prev-page paginate" onclick="Search(<?php echo $cateID .','. 1; ?>)"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></a>
                  <?php  

                    for ($i=1; $i <= $total_page ; $i++) { 
                      $start  = ($i-1)*5;
                  ?>
                      <a href="#" class="paginate" onclick="Search(<?php echo $cateID .','. $i; ?>)" <?php if($page == $i){ echo 'style="color:red"';} ?>>
                        <?php echo $i; ?>
                      </a>
                  <?php
                    }
                  ?>
                  <a href="#" class="next-page paginate" onclick="Search(<?php echo $cateID .','. $total_page; ?>)"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
              <?php   
                }
              ?>
              </div>
            </div>
          </div>
          <!-- END Phân trang -->
          <div id="showList">
            <?php
              if (count($products)>0) {

                $countPros = 0;
                foreach ($products as $rowPro) {
                  $countPros += 1;

                  if ($countPros <= 5) {
            ?>
                <ul class="products-listItem">
                  <li class="products">
                    <?php if ($rowPro['Sale']>0) {
                      echo '<div class="offer"> -'.$rowPro['Sale'].'%</div>';
                    } ?>
                    <div class="thumbnail">
                      <a href="<?php echo 'san-pham/'.$rowPro['ProductID'].'/'.makeUrl($rowPro['ProductName']).'.html'; ?>">
                        <img src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>">
                      </a>
                    </div>
                    <div class="product-list-description">
                      <div class="productname">
                        <?php echo $rowPro['ProductName']; ?>
                      </div>
                      <p>
                        <!-- Hiển thị số sao -->
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
                      <!-- Hiển thị tên hãng -->
                      <p>Hãng: <i style="color: red"><?php echo $rowPro['Name']; ?></i></p>
                      <p>
                        <?php echo $rowPro['Description']; ?>
                      </p>
                      <div class="list_bottom">
                        <div class="price">
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
                        <div class="button_group" style="float: right;">
                          <?php  
                              if ($rowPro['Quantity'] > 0) {
                          ?>
                                <button class="button add_cart" name="sm_cart" value="<?php echo $rowPro['ProductID']; ?>" quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
                          <?php
                              }else{
                          ?>
                                  <button class="button" name="" disabled>Đã hết hàng</button>
                          <?php
                              }
                          ?>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
            <?php
                  }
                }
              }else {
                echo "<h4 class='empty'>Không có sản phẩm nào trong cửa hàng!</h4>"; 
              }
            ?>           
          </div>           
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
</div>
