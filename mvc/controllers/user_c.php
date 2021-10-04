 <?php  
   //include_once '../mvc/models/user_m.php';

	class User_c extends User_m
	{
		private $user;
		function __construct()
		{
			$this->user = new User_m();	// Tự động chạy hàm __construct()
		}
		//Phạm Tĩnh
		public function contact() {
		return $this->user->getContact();
		}
		public function about() {
			return $this->user->getAbout();
		}
		public function slides() {
			return $this->user->getSildes();
		}
		public function feedback() {
		}
		public function randdomHot() {
			return $this->user->getRandHot();
		}
		
		
		public function User()
		{
			if (isset($_GET['page'])) {
	            $page = $_GET['page'];
	        }else { 
	            $page = 'home';
	        }

	        switch ($page) {
	        	case 'home':
	        		$limit = 4;
		        	$products_all 	= $this->user->GetProductsAll();
		        	$products_hot 	= $this->user->GetProductsHot();
		        	$products_new 	= $this->user->GetProductsNew();
		        	$new_home		= $this->user->Get_New($limit);

	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

	        	case 'pro_details':
	        		if (isset($_GET['proID'])) {
	        			$proID 		= $_GET['proID'];
	        			// Lấy thông tin sản phẩm thông qua proID
	        			$getPro_ID 	= $this->user->GetPro_ID($proID);
	        			$rowPro 	= $getPro_ID[0];
						
	        			// Hiện đánh giá
	        			$getProImgs_ID = $this->user->GetProImgs_ID($proID);
	        			$getProRate_ID = $this->user->GetProRates_ID($proID);

	        			// Đánh giá
		                $show = 0;
		                // orderID + proID => statusRate => ĐK 1
		                // orderID => Username customer. If Username customer == S_SESSION['user']['Username'] => ĐK 2
		                if (isset($_GET['orderID'])) {
		                	$orderID 	 = $_GET['orderID'];
		                	$getStatus 	 = $this->user->GetStatusRate_ProID_OrderID($orderID, $proID);
		                	$getCusInfor = $this->user->GetCusUsername_OrderID($orderID);
		                	$status 	 = $getStatus[0]['Status'];
		                	$cusUsername = $getCusInfor[0]['Username'];
		   
		                	if ($status == 1 && $cusUsername == $_SESSION['user']['Username']) {
		                		$show = 1;
		                	}
		        			
		        			if (isset($_POST['sm_rate'])) {
		        				$cusID 		= $getCusInfor[0]['CustomerID'];
		        				$summary 	= $_POST['summary'];
		        				$ratePoint 	= $_POST['whatever1'];
		        				$comment 	= $_POST['comment'];

		        				// Insert đánh giá người dùng vào bảng rate
		        				$this->user->Rate($cusID, $proID, $ratePoint, $summary, $comment);

		        				// Update lại lượt đánh giá và số sao bên bảng products
		        				$viewCount 	= $rowPro['ViewCount'] + 1;
		        				$getAvrRate = $this->user->GetAvrRate($proID);
		        				$rate 		= $getAvrRate[0]['Rate'];
		        				$this->user->UpdateProductRate_ID($viewCount, $rate, $proID);

		        				// Update lại trạng thái đánh giá bên bảng order_detail
		        				$status = 2;
		        				$this->user->UpdateStatusRate_OrderDetail($status, $orderID, $proID);

		        				// load lại trang
		        				header('Location: index.php?page=pro_details&proID='.$proID.'#Tags');
		        			}
		                }

		        		include_once 'mvc/views/user/'.$page.'.php';
	        		}else {
	        			echo "Something wrong here...";
	        		}
	        		break;

	        	case 'productlist':
	        		$getProCates 	= $this->user->GetCatePros();

	        		// tìm kiếm nhanh bằng header_search
	        		if (isset($_POST['header_search'])) {
	        			
	        		}

	        		/*----------------Hiện sản phẩm----------------*/ 
	        		if (isset($_GET['cateID'])) { $cateID = (int)$_GET['cateID']; }else{ $cateID = '0'; }
	        		if (isset($_GET['status'])) { $status = $_GET['status']; }else{ $status = '0'; }


	        		$getProCate_CateID 	= $this->user->GetCatePro_CateID($cateID);

	        		// Lấy tất cả sản phẩm theo điều kiện
	        		if ($cateID == '0' && $status == '0') {
	        			$products = $this->user->GetProductsAll();
	        		}elseif ($cateID == '0' && $status != '0') {
	        			switch ($status) {
	        				case 'hot':
	        					$products = $this->user->GetProductsHot();
	        					break;
	        				case 'new':
	        					$products = $this->user->GetProductsNew();
	        					break;
	        				default:
	        					$products = $this->user->GetProductsAll();
	        					break;
	        			}
	        		}elseif ($cateID != '0' && $status == '0') {
	        			$products = $this->user->GetProducts_CateID($cateID);
	        		}elseif ($cateID != '0' && $status != '0') {
	        			switch ($status) {
	        				case 'hot':
	        					$products = $this->user->GetProductsHot_Status($cateID);
	        					break;
	        				case 'new':
	        					$products = $this->user->GetProductsNew_Status($cateID);
	        					break;
	        				default:
	        					$products = $this->user->GetProducts_CateID($cateID);
	        					break;
	        			}
	        		}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

	        	case 'cart':

	        		// Lấy thông tin khách hàng
					if (isset($_POST['sm_order'])) {
						if (isset($_SESSION['user'])) {
							$name 		= $_SESSION['user']['FirstName'].' '.$_SESSION['user']['LastName'];
			                $phone 		= $_SESSION['user']['Phone'];
			                $email 		= $_SESSION['user']['Email'];
			                $address 	= $_SESSION['user']['Address'];
							$userName = $_SESSION['user']['Username'];
						}else{
							$name 		= $_POST['name'];
							$phone 		= $_POST['phone'];
							$email 		= $_POST['email'];
							$address 	= $_POST['address'];
							$userName 	= "";
						}

						// Thêm cus
						$addCustomer = $this->user->AddCustomer($userName, $name, $phone, $email, $address);

						// Lấy id cus vừa insert
						$cusID = $this->user->pdo->lastInsertId();

						// Lưu đơn đặt hàng
						$note = $_POST['note'];
						$totalMoney = 0;
                        foreach ($_SESSION['cart'] as $ProID => $rowCart) {
                          	$totalMoney += $rowCart['qty']*$rowCart['PromotionPrice'];
                      	}
						$addOrder = $this->user->AddOrder($cusID, $totalMoney, $note);
						// Lấy id đơn hàng vừa insert
						$orderID = $this->user->pdo->lastInsertId();

						// Lưu đơn hàng chi tiết lấy từ trong giỏ hàng
						foreach ($_SESSION['cart'] as $proID => $rowPro) {
							$totalPrice_aPro = $rowPro['qty']*$rowPro['PromotionPrice'];
							$addOrderDetail = $this->user->AddOrderDetail($orderID, $proID, $rowPro['PromotionPrice'], $rowPro['qty'], $totalPrice_aPro);
						}

						// Thiết lập nội dung gửi mail
						$body = '<div class="container"';
						$body .= '<div class="row"><h2><p>Cảm ơn anh/chị '.$name.' đã mua sản phẩm tại shop của chúng tôi!</p></h2></div>';
						$body .= '<div class="row"><h3 style="color: #f8635a; padding: 20px 0px;">Thông tin khách hàng</h3></div>';
						$body .= '
								<p>Họ và tên: '.$name.'</p>
								<p>Số điện thoại: '.$phone.'</p>
								<p>Địa chỉ nhận hàng: '.$address.'</p>
								<p>Ghi chú: '.$note.'</p>
								<br>
						';
						$body .= '<div class="row"><h3 style="color: #f8635a; padding: 20px 0px;">Hóa đơn đặt hàng tại Kenshop</h3></div>';
						$body .= '<div class="row">';
						$body .= '<table border="1px solid black" style="text-align: center; border-spacing: 0px; border: 1px;"><thead>';
						$body .= '<tr>';
						$body .= '<th style="padding: 3px 10px;">STT</th>';
						$body .= '<th style="padding: 3px 10px;">Mã sản phẩm</th>';
						$body .= '<th style="padding: 3px 10px;">Tên sản phẩm</th>';
						$body .= '<th style="padding: 3px 10px;">Hình ảnh sản phẩm</th>';
						$body .= '<th style="padding: 3px 10px;">Giá</th>';
						$body .= '<th style="padding: 3px 10px;">Số lượng</th>';
						$body .= '<th style="padding: 3px 10px;">Tổng</th></tr></thead><tbody>';
	            		$stt = 0;
	                	$total_price_all = 0;
	                	foreach ($_SESSION['cart'] as $proID => $rowCart) {
		                  	$stt += 1;
		                  	$total_price_aPro = $rowCart['qty']*$rowCart['PromotionPrice'];
		                  	$total_price_all += $total_price_aPro;
		                  	$proUrlName = makeUrl($rowCart['ProductName']);

		                  	$body .= '<tr>';
		                  	$body .= '<td style="padding: 3px 10px;">'.$stt.'</td>';
		                  	$body .= '<td style="padding: 3px 10px;">'.$rowCart['ProductCode'].'</td>';
		                  	$body .= '<td style="padding: 3px 10px;">'.$rowCart['ProductName'].'</td>';
		                  	$body .= '<td style="padding: 3px 10px;"><a href="http://hatblack.online/san-pham/'.$rowCart['ProductID'].'/'.$proUrlName.'.html"><img src="http://hatblack.online/public/images/products/'.$rowCart['ProductImage'].'" alt="" width="100px"></a></td>';
							$body .= '<td style="padding: 3px 10px;"><h6>'.number_format($rowCart['PromotionPrice']).'</h6></td>';
							$body .= '<td style="padding: 3px 10px;">'.$rowCart['qty'].'</td>';           	
							$body .= '<td style="padding: 3px 10px;"><h6>'.number_format($total_price_aPro).'</h6></td>';
							$body .= '</tr>';
								              
	                	}
	                	$body .= '</tbody><tfoot><tr>';
	                	$body .= '<th colspan="6" style="padding: 3px 10px;"><h5><strong style="color: #f8635a; padding: 0px 50px">Đơn giá</strong></h5></th>';
	                	$body .= '<th style="padding: 3px 10px;"><h5><strong style="color: #f8635a;">'.number_format($total_price_all).'</strong></h5></th></tr>';
	                	$body .= '</tfoot></table></div>';
	                	// $body .= '<div class="row"><br><br><p><strong>Cảm ơn quý khách khi đã mua hàng tại shop của chúng tôi!</strong></p></div></div>';

						// Tiến hành gửi email cho khách
						include_once "PHPMailer/class.phpmailer.php"; 
						include_once "PHPMailer/class.smtp.php"; 
						include_once "PHPMailer/sent-email.php";
						
						// Xóa bỏ $_SESSION['cart'];
						unset($_SESSION['cart']);
						echo "<script>location.href='index.php'</script>";
					}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;
	        		//Xem thông tin chi tiết bài viết 

	        	case 'new_detail':
		        	if (isset($_GET['newID'])) {
		        		$id = $_GET['newID'];
		        		$newID = $this->user->Get_NewID($id);
		        	}
		        		include_once 'mvc/views/user/'.$page.'.php';
		        		break;	
	        	
	        	case 'newlist':
		        	if (isset($_GET['cateID'])) {
		        		$cateID = $_GET['cateID'];

		        	} else {
		        		$cateID="%%";
		        	}
		        	if (isset($_GET['note'])) {
		        		$offset =( $_GET['note'] - 1)* 5;	
		        	} else {
		        		$offset = 0;
		        	}
	        		$countnew= $this->user->CountNews();
	        		$newcat = $this->user->getCatenew();
	        		$newlist = $this->user->Get_NewAll($cateID,$offset);
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;	

	        	case 'blog':
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

	        	case 'contact':
					if (isset($_POST['submit_feedback'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$reply = $_POST['reply'];
						$res = $this->user->getFeedback($name, $phone, $email, $reply);
						$noti =1;
						
					}
					if ( isset($noti) && $noti == 1 ){
						echo "<script>alert('Cảm ơn bạn đã phản hồi ! Shop sẽ nhanh chóng trả lời phản hồi của bạn.');</script>";
						unset ($noti);
					}
					
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

	        	case 'ordered':
	        		if (isset($_SESSION['flag']) && $_SESSION['flag'] == 1) {
		        		$userName 	 	= $_SESSION['user']['Username'];
			        	$cusOrderInfor 	= $this->user->GetCosOrderInfor_Username($userName);
	        		}else{
	        			header('Location:index.php');
	        		}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

	        	case 'register':
		        	if (isset($_SESSION['flag']) && $_SESSION['flag'] == 1) {
		        		header('Location:index.php');
		        	}else{
		        		if (isset($_POST['sm_register'])) {
		        			$firstName 	= trim($_POST['firstName']);
		        			$lastName 	= trim($_POST['lastName']);
		        			$userName 	= trim($_POST['userName']);
		        			$phone 		= trim($_POST['phone']);
		        			$email 		= trim($_POST['email']);
		        			$passw 		= md5(trim($_POST['passw']));
		        			$address 	= trim($_POST['address']);
		        			$createBy 	= trim($_POST['userName']);
		        			$status 	= '1';
		        			$stt 		= '1';

			        		$users = $this->user->GetUsers();
			        		foreach ($users as $rowUser) {
			        			if ($userName == $rowUser['Username']) {
			        				$err_userName = 'Tên tài khoản đã tồn tại!';
			        				break;
			        			}
			        		}
			        		foreach ($users as $rowUser) {
			        			if ($email == $rowUser['Email']) {
			        				$err_email = 'Email đã tồn tại!';
			        				break;
			        			}

			        		}
			        		foreach ($users as $rowUser) {
			        			if ($phone == $rowUser['Phone']) {
			        				$err_phone = 'Số điện thoại đã tồn tại!';
			        				break;
			        			}
			        		}

			        		if (!isset($err_userName) && !isset($err_phone) && !isset($err_email)) {
				        		$this->user->Register($userName, $firstName, $lastName, $phone, $email, $address, $passw, $createBy, $status, $stt);
				        		echo "<script>alert('Tạo tài khoản thành công! Mời tiếp tục đăng nhập!'); location.href='index.php?page=login'; </script>";
			        		}
		        		}
		        	}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;  

	        	case 'login':
	        		if (isset($_SESSION['flag']) && $_SESSION['flag'] == 1) {
		        		header('Location:index.php');
		        	}else{
		        		if (isset($_POST['sm_login'])) {
		        			$email = $_POST['email'];
		        			$passW = $_POST['passw'];
		        			$passw = md5($passW);

			        		$user = $this->user->Login($email, $passw);
			        		if (!empty($user)) {
				        		foreach ($user as $rowUser) {
				        			$_SESSION['user'] 	= $rowUser;
				        			$_SESSION['status'] = $rowUser['Status'];
				        			$_SESSION['flag'] = 1;

				        			header('Location:index.php');
				        		}
			        		}else {
			        			$err_login = "Tài khoản hoặc mật khẩu của bạn không hợp lệ";
			        		}
		        		}
		        	}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;

        		case 'logout':
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break; 

	        	case 'profile':
	        		$id 			= $_SESSION['user']['UserID'];
	        		$getUsers_All 	= $this->user->GetUsers();
	        		$getUser 		= $this->user->GetUser_ID($id);
	        		$user 			= $getUser[0];

	        		if (isset($_POST['sm_edit_user'])) {
    					$firstName 	= trim($_POST['firstName']);
	        			$lastName 	= trim($_POST['lastName']);
	        			$userName 	= trim($_POST['userName']);
	        			$email 		= trim($_POST['email']);
	        			$phone 		= trim($_POST['phone']);
	        			$address 	= trim($_POST['address']);

	        			if ($userName != $user['Username']) {
	        				foreach ($getUsers_All as $rowUser) {
	        					if ($userName == $rowUser['Username']) {
	        						$err_userName = 'Tài khoản đã tồn tại!';
	        					}
	        				}
	        			}
	        			if ($email != $user['Email']) {
	        				foreach ($getUsers_All as $rowUser) {
	        					if ($email == $rowUser['Email']) {
	        						$err_email = 'Địa chỉ email đã tồn tại!';
	        					}
	        				}
	        			}
	        			if ($phone != $user['Phone']) {
	        				foreach ($getUsers_All as $rowUser) {
	        					if ($phone == $rowUser['Phone']) {
	        						$err_phone = 'Số điện thoại đã tồn tại!';
	        					}
	        				}
	        			}

	        			if (!isset($err_userName) && !isset($err_email) && !isset($err_phone)) {
		        			$editUser = $this->user->EditUser($firstName, $lastName, $userName, $email, $phone, $address, $id);
		        			$_SESSION['note'] = 'Cập nhật tài khoản thành công!';
		        			echo "<script>location.href='index.php?page=profile';</script>";
	        			}
    				}
	        		include_once 'mvc/views/user/'.$page.'.php';
	        		break;
	        	default:
	        		echo "<h2 class='err404'>Trang không tồn tại!</h2>";
	        		break;
	        }
		}
	}

?>