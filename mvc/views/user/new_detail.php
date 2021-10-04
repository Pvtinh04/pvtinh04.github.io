<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div   class="col-md-12">
        <!-- chi tiết sp -->
        
        <?php foreach ($newID as $value){?>
          <div class="new_detail">
            <div class="newsname">
              <p style="font-size: 30px; font-weight: bold; text-align: center; line-height:1.5;">
              <?php echo $value['Title']; ?>  
              </p>
            </div>
            <div class="text-center">
              <img width="70%" src="public/images/new/<?php echo $value['NewImage']; ?>" alt="">
            </div>
            
           <p class=""><?php echo $value['Detail']; ?> </p>
          </div>
          <div class="clearfix"></div>
        <?php }  ?>
      </div>

      
    </div>
    <div class="clearfix"></div>
    <?php include_once 'layout/brand.php'; ?>
  </div>
  <div class="clearfix"></div>
</div>