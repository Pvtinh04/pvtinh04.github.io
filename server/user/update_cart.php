<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/user_m.php';
	$pre = new User_m();

	$qty = $_POST['qty'];
	$id  = $_POST['proID'];

	if ($qty <= 0) {
		unset($_SESSION['cart'][$id]);

		echo "Cập nhật giỏ hàng thành công!";
	}else {
		$_SESSION['cart'][$id]['qty'] = $qty;

		if ($_SESSION['cart'][$id]['qty'] > 20) {
			$_SESSION['cart'][$id]['qty'] = 20; 

			echo "Sản phẩm đặt đã lên đến tối đa! Bạn không thể đặt thêm sản phẩm này nữa!";
		}else{
			echo "Cập nhật giỏ hàng thành công!";
		}
	}
?>