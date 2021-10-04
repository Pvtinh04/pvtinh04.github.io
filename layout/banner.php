<div class="hom-slider">
   <!-- Slide banner -->
   <div class="container">
      <div id="sequence">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <?php
                  $banner = new User_c();

                  $rs = $banner->slides();
                  $stt =0;
                  $i = 0;
                  foreach ($rs as $key => $value) {
                     if ($value['Status'] == 1) {
                        $stt ++;
                        $i += 1;
                        if ($i <= 3) {
               ?>
                           <div class="item <?php if ($stt == 1) { echo "active";} ?>">
                              <img src="public/images/banners/slides-banner/<?php echo $value['Image']; ?>" alt="banner_1" width="100%">     
                           </div>
               <?php 
                        }
                     }
                  }
               ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <!-- Promotion Banner -->
   <div class="promotion-banner">
      <div class="container">
         <div class="row">
            <?php
				   $rss = $banner->slides();
               $i = 0;
               foreach ($rss as $key => $value) {
                 if ($value['Status'] == 2) {
                  $i += 1;
                  if ($i <= 2) {
		      ?>
                     <div class="col-md-6 col-sm-6 col-xs-6 col-xs-fix-12">
                        <div class="promo-box">
                           <img src="public/images/banners/promotion-banner/<?php echo $value['Image']; ?>" alt="promotion_banner_1" class="img-rounded">
                        </div>
                     </div>
            <?php
                     }
                 }
               }
            ?>
            </div>
         </div>
      </div>
   </div>
</div>