<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/admin_m.php';
    $admin = new Admin_m();
    $tradeID = 0;
    $cateID = 0;
    $proID = $_POST['proID'];
    $pro = $admin->getPro();
    foreach ($pro as $key => $value) {
        if ($value['ProductID']==$proID ) {
            $cateID = $value['CategoryID'];
            $tradeID = $value['TradeMarkID'];
        }
    }
    
	
    $del= $admin->DeletePro_ID($proID,$tradeID,$cateID);
    if ($del) {
        echo "Xóa sản phẩm thành công!";
    }  else {
        echo "Xóa sản phẩm không thành công!";
    }
	
?>