<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="category leftbar">
          <h3 class="title">
            Danh mục bài viết
          </h3>
          <ul>
            <?php  
              foreach ($newcat as $rowCate) {
            ?>
                <li>
                  <a href="<?php echo 'danh-sach-bai-viet/'.$rowCate['NewCategoryID'].'/'.makeUrl($rowCate['Name']).'.html'; ?>">
                    <?php echo $rowCate['Name']; ?>
                  </a>
                </li>
            <?php
              }
            ?>
            <li><a href="newlist.html">Tất cả</a></li>
          </ul>
        </div>
        
        <div class="fbl-box leftbar">
          <h3 class="title">
            Facebook
          </h3>
         <div> <iframe  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhangnhatnoidiakenshop%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
      </iframe>
      </div>
        
        </div>
      </div>
      <div class="col-md-9">
        <div class="products-list">
          <div class="pro_list_header">
            <h3 class="title">Bài viết
             
            
             <strong>
             <?php  
              foreach ($newcat as $rowCate) {
                  if ($cateID == $rowCate['NewCategoryID'] ) {
                    echo '<span style="color: red; font-weight:300"><i class="glyphicon glyphicon-menu-right"></i>'.$rowCate['Name'].'</span>';
                  }
                }
                ?>   
              </
            </strong>  
            </h3> 
          </div>
          <?php  
            if (count($newlist)>0) {
          ?>
          <?php
              foreach ($newlist as $rowNew) {
                
          ?>
                <ul class="products-listItem">
                  <li class="products">
                   
                    <div class="thumbnail">
                      <a href="<?php echo 'bai-viet/'.$rowNew['NewID'].'/'.makeUrl($rowNew['Title']).'.html'; ?>">
                        <img src="public/images/new/<?php echo $rowNew['NewImage']; ?>" >
                      </a>
                    </div>
                    <div class="product-list-description">
                      <div >
                        <p class="productname newsName">
                        <?php echo $rowNew['Title']; ?>
                        </p>
                      </div>
                      <p>
                        <?php echo $rowNew['Description']; ?>
                      </p>
                      <div class="list_bottom">
                        <div class="button_group">
                          <a href="<?php echo 'bai-viet/'.$rowNew['NewID'].'/'.makeUrl($rowNew['Title']).'.html'; ?>" class="seeMore-news">
                          Xem Thêm &gt;&gt;
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
          <?php
              }
              $note = ceil(count($countnew)/ 5);
              
          ?>

              <div class="toolbar">
                
                <div class="pager">
                  <a href="#" class="prev-page">
                    <i class="fa fa-angle-left">
                    </i>
                  </a>
                  <?php for ($i = 1; $i <= $note; $i++) { ?>
                  <a href="index.php?page=newlist<?php if (isset( $cateID)){
                    echo "&cateID=".$cateID;
                  } ?>&note=<?php echo $i; ?>" class="<?php if ($i == 1){echo "active";} ?>">
                 <?php  echo $i; ?>
                  </a>
                 <?php } ?>
                  <a href="#" class="next-page">
                    <i class="fa fa-angle-right">
                    </i>
                  </a>
                </div>
              </div>
          <?php
            }else {
              echo "<h4 class='empty'>Không có bài viết nào trong cửa hàng!</h4>"; 
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