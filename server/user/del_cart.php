<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/user_m.php';
	$pre = new User_m();

	$id  = $_POST['proID'];

	unset($_SESSION['cart'][$id]);

	echo "Xóa sản phẩm thành công!";
?>