<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/admin_m.php';
	$admin = new Admin_m();
	if (isset($_POST['CategoryID'])) {
		$cateID = $_POST['CategoryID'];
	$admin->DeleteCatePro($cateID);
	echo 'Xóa thành công!';
	}
	if (isset($_POST['TrademarkID'])) {
		$tradeID =$_POST['TrademarkID'];
		$admin->DeleteTrademark($tradeID);
		echo 'Xóa thành công!';
	}
	if (isset($_POST['NewCategoryID'])) {
		$newcateID =$_POST['NewCategoryID'];
		$admin->DeleteNewCate($newcateID);
		echo 'Xóa thành công!';
	}
	
?>