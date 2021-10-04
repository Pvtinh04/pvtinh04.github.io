<?php  
   ob_start();
   session_start();
   include_once 'config/connect.php';
   include_once 'mvc/models/user_m.php';

  function makeUrl($str)
   {
    $str = trim($str);
    $str = str_replace(' ', '-', $str);
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^|\.)/", '-', $str);
    return $str;
   }

   if (isset($_GET['page'])) {
      $page = $_GET['page'];
   }else {
      $page = 'home';
   }
?>
<!DOCTYPE html>
<html>
<head>
  <base href="http://hatblack.online/">
  <!-- <base href="http://localhost/php/Team_1/DOAN_TEAM1/ShopFashion/"> -->
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
   <meta name="description" content="Shop mỹ phẩm">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/home/logo/icon-shop.png">
   <title>Welcome to KenShop</title>

   <link href="public/css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
   <link href="public/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen"/>
   <link href="public/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
   <link href="public/css/style.css" rel="stylesheet">
   <link href="public/css/home-css.css?t=<?php echo filemtime('public/css/home-css.css') ?>" rel="stylesheet">
   <link href="public/css/myCSS.css?t=<?php echo filemtime('public/css/myCSS.css') ?>" rel="stylesheet">


</head>
<?php
   if (file_exists('mvc/views/user/'.$page.'.php')) {
?> 
      <body>
         <div class="wrapper">
            <!-- START header -->
            <div class="header">
               <div class="container">
                  <div class="row">
                     <?php include_once 'mvc/models/user_m.php'; 
                        $user_m = new User_m();
                        $getProCates = $user_m->GetCatePros()
                     ?>
                     <?php include_once 'layout/header.php'; ?>
                  </div>
               </div>
            </div>
            <div id="show">
            </div>
            <!-- END header -->

            <div class="clearfix"></div>

            <!-- START content -->
            <?php 
               include_once 'mvc/controllers/user_c.php';
               $user = new User_c();
               $user->User();
            ?>
            <!-- END content -->
            
            <div class="clearfix"></div>
            
            <!-- START footer -->
            <?php include_once 'layout/footer.php'; ?>
            <!-- END footer -->
         </div>
         <a href="#" title="Lên đầu trang" id="upTop">
            <p class="glyphicon glyphicon-chevron-up"></p>
         </a>

         <!-- Load Facebook SDK for JavaScript -->
         <!-- Bootstrap core JavaScript==================================================-->
         <script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
         <script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
         <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="public/js/jquery.sequence-min.js"></script>
         <script type="text/javascript" src="public/js/jquery.carouFredSel-6.2.1-packed.js"></script>
         <script defer src="public/js/jquery.flexslider.js"></script>
         <script type="text/javascript" src="public/js/jquery.js"></script>
         <!-- <script type="text/javascript" src="public/js/script.min.js" ></script> -->
         <div id="fb-root"></div>
         <script>
           window.fbAsyncInit = function() {
             FB.init({
               xfbml            : true,
               version          : 'v7.0'
             });
           };

           (function(d, s, id) {
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) return;
           js = d.createElement(s); js.id = id;
           js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));</script>

         <!-- Your Chat Plugin code -->
         <div class="fb-customerchat"
           attribution=setup_tool
           page_id="633363367303216"
           theme_color="#fa3c4c"
           logged_in_greeting="Xin chào. Tôi có thể giúp được gì cho bạn?"
           logged_out_greeting="Xin chào. Tôi có thể giúp được gì cho bạn?">
         </div>
         <script type="text/javascript" src="public/js/myJava.js?t=<?php echo filemtime('public/js/myJava.js');  ?>" ></script>
         <script type="text/javascript" src="public/js/myJQuery.js?t=<?php echo filemtime('public/js/myJQuery.js');  ?>" ></script>
         <script type="text/javascript" src="admin/public/js/myJava.js?t=<?php echo filemtime('admin/public/js/myJava.js');  ?>" ></script>
      </body>
<?php  
   }else {
      echo "<h2 class='err404'>Trang không tồn tại!</h2>";
   }
?>
</html>