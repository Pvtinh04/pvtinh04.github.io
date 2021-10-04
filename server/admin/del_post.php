<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/admin_m.php';
    $admin = new Admin_m();
    
    $cateID = 0;
    $postID = $_POST['postID'];
    $post = $admin->getNew();
    foreach ($post as $key => $value) {
        if ($value['NewID']==$postID ) {
            $cateID = $value['NewCategoryID'];
           
        }
    }
    
	
    $del_post= $admin->DeletePost_ID($postID,$cateID);
    if ($del_post) {
        echo "Xóa sản phẩm thành công!";
    }  else {
        echo "Xóa sản phẩm không thành công!";
    }
	
?>