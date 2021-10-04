<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/admin_m.php';
	$admin = new Admin_m();

	$orderID = $_POST['orderID'];
	$status  = $_POST['status'];
	$admin->EditOrderedStt_ID($orderID, $status);
	echo "Cập nhập đơn hàng thành công!";
?>