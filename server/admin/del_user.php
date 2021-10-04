<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/admin_m.php';
	$admin = new Admin_m();

	$userID = $_POST['userID'];
	$admin->DeleteUser_ID($userID);
	echo "Xóa tài khoản thành công!";
?>