<?php 
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/user_m.php';
	$pre = new User_m();

   	$proQuantity = $_POST['proQuantity'];
   	$qty 		= $_POST['qty'];
	$id  		= $_POST['proID'];
	$pro 		= $pre->GetPro_ID($id);


	if ($pro) {
		if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
			$_SESSION['cart'][$id] 			= $pro[0];
			$_SESSION['cart'][$id]['qty'] 	= $qty;
			echo '<p>Sản phẩm đã được thêm vào giỏ hàng!</p> <a href="cart.html"><button type="button" class="btn btn-danger">Xem giỏ hàng</button></a>';
		}else{
			if (array_key_exists($id, $_SESSION['cart'])) {
				$_SESSION['cart'][$id]['qty'] += $qty;
				if ($_SESSION['cart'][$id]['qty'] <= 20) {
					
				

				if ($_SESSION['cart'][$id]['qty'] > $proQuantity) {
					$_SESSION['cart'][$id]['qty']  = $proQuantity;
					echo '<p>Hàng tồn không đủ! Bạn chỉ đặt được số sản phẩm tối đa là '.$proQuantity.' !</p><button type="button" class="btn btn-danger">Xem giỏ hàng</button>';
				}else{
					echo '<p>Sản phẩm đã được thêm vào giỏ hàng!</p> <a href="cart.html"><button type="button" class="btn btn-danger">Xem giỏ hàng</button></a>';
				}
			}else{
				$_SESSION['cart'][$id]['qty'] = 20;
				echo '<p>Sản phẩm đã được thêm vào giỏ hàng!</p> <a href="cart.html"><button type="button" class="btn btn-danger">Xem giỏ hàng</button></a>';
			}
			}else{
				$_SESSION['cart'][$id] 			= $pro[0];
				$_SESSION['cart'][$id]['qty'] 	= $qty;
				echo '<p>Sản phẩm đã được thêm vào giỏ hàng!</p> <a href="cart.html"><button type="button" class="btn btn-danger">Xem giỏ hàng</button></a>';
			}
		}
	}else{
		echo '<p>Thêm sản phẩm thất bại!</p>';

	}

?>

