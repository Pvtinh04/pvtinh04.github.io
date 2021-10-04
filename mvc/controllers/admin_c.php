 <?php 
		 //include_once "../mvc/models/admin_m.php";
		 
	class Admin_c extends Admin_m
	{
		private $admin;
		function __construct()
		{
			$this->admin = new Admin_m();
		}
		
	
		public function slides() {
		return $this->admin->getSlide();
		}
		public function logo() {
			return $this->admin->getLogo();
		}
		public function contact() {
			return $this->admin->getContact();
		}
		public function prodcut() {
			return $this->admin->getPro();
		}
		
		
		
		//End

		public function Admin()
		{
			if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }else {
                $page = "home";
            }

            switch ($page) {
            	case 'home':
            		$getOrders_new  	 = $this->admin->GetOrders_Stt(1);
            		$vote_statistic 	 = $this->admin->VoteStatistic();
            		$sales_statistic  	 = $this->admin->SalesStatistic();
            		$proceeds_statistic  = $this->admin->ProceedsStatistic();
            		include_once "../mvc/views/admin/".$page.".php";
					break;
				
				case 'statistic':
					if (isset($_GET['method'])) {
		                $method = $_GET['method'];
		            }else {
		                $method = "home";
		            }
					switch ($method) {
						case 'vote':
							$vote_statistic 	 = $this->admin->VoteStatistic();
							include_once "../mvc/views/admin/vote_statistic.php";
							break;
						case 'sales':
							$sales_statistic  	 = $this->admin->SalesStatistic();
							include_once "../mvc/views/admin/sales_statistic.php";
							break;
						case 'proceeds':
							$proceeds_statistic  = $this->admin->ProceedsStatistic();
							include_once "../mvc/views/admin/proceeds_statistic.php";
							break;
						default:
							header("Location: index.php");
							break;
					}
					break;

				case 'edit_cate':
					if (isset($_GET['method'])) {
						$method = $_GET['method'];
						if(isset($_GET['id'])){
							$id = $_GET['id'];
						}
					}
					switch ($method) {
						case 'cate_pro':
							//echo "sản phẩm";
							$rs = $this->admin->Get_all_pro_cates();
							if (isset($_POST['sm_edit_cate'])) {
								$name_pro_cate 			= $_POST['name'];
								$description_pro_cate 	= $_POST['description'];
								if (isset($_POST['status'])) {
									$status = $_POST['status'];
								}else {
									$status = 0;
								}

								$edit_catepro = $this->admin->edit_catepro($name_pro_cate, $description_pro_cate, $status,$id);
								
									echo "<script> alert('Sửa thành công!');";
									echo "location.href = 'index.php?page=category&method=cate_all';</script>";
								
							}
							break;
						case 'cate_post':
						   //echo "bài viết";
						   $rs =  $this->admin->Get_all_post_cates();
						   if (isset($_POST['sm_edit_cate'])) {
							$name_pro_cate 			= $_POST['name'];
							$description_pro_cate 	= $_POST['description'];
							if (isset($_POST['status'])) {
								$status = $_POST['status'];
							}else {
								$status = 0;
							}

							$edit_catepost = $this->admin->edit_catepost($name_pro_cate, $description_pro_cate, $status,$id);
							
								echo "<script> alert('Sửa thành công!');";
								echo "location.href = 'index.php?page=category&method=cate_all';</script>";
							
						}		
							break;
						case 'cate_trademark':
						  // echo "thương hiệu" ;# code...
						  $rs =$this->admin->getTrademark();
						  if (isset($_POST['sm_edit_cate'])) {
							$name_pro_cate 			= $_POST['name'];
							$description_pro_cate 	= $_POST['description'];
							if (isset($_POST['status'])) {
								$status = $_POST['status'];
							}else {
								$status = 0;
							}

							$edit_catetrade = $this->admin->edit_catetrademark($name_pro_cate, $description_pro_cate, $status,$id);
							
							
								echo "<script> alert('Sửa thành công!');";
								echo "location.href = 'index.php?page=category&method=cate_all';</script>";
						}
							break;
						
						default:
							# code...
							break;
					}
		           
		            	
					include_once "../mvc/views/admin/".$page.".php";				
			        break;

            	case 'category':
            		if (isset($_GET['method'])) {
		                $method = $_GET['method'];
		            }else {
		                $method = "cate_all";
		            }
		            switch ($method) {
		            	case 'cate_all':
		            		// Lấy dữ liệu
		            		$pro_cates = $this->admin->Get_all_pro_cates();
		            		$post_cates = $this->admin->Get_all_post_cates();
							$trademark = $this->admin->getTrademark();
							if (isset($_POST['sm_add_pro_cate'])) {
								$name_pro_cate 			= $_POST['name_pro_cate'];
								$description_pro_cate 	= $_POST['description_pro_cate'];
								if (isset($_POST['status'])) {
									$status = $_POST['status'];
								}else {
									$status = 0;
								}

								$add_pro_cate = $this->admin->Add_pro_cate($name_pro_cate, $description_pro_cate, $status);
								if ($add_pro_cate) {
									echo "<script> alert('Thêm mới thành công!');";
									echo "location.href = 'index.php?page=category&method=cate_all';</script>";
								}else {
									echo "<script> alert('Thêm mới không thành công!');</script>";
								}
							}
							if (isset($_POST['sm_add_trade_mark'])) {
								$name_trade_mark			= $_POST['name_trade_mark'];
								$description_trade_mark 	= $_POST['description_trade_mark'];
								if (isset($_POST['status'])) {
									$status = $_POST['status'];
								}else {
									$status = 0;
								}

								$add_trade_mark = $this->admin->Add_trade_mark($name_trade_mark, $description_trade_mark, $status);
								if ($add_trade_mark) {
									echo "<script> alert('Thêm mới thành công!');";
									echo "location.href = 'index.php?page=category&method=cate_all';</script>";
								}else {
									echo "<script> alert('Thêm mới không thành công!');";
								}
							}

							if (isset($_POST['sm_add_post_cate'])) {
								 

							 	$name_post_cate			= $_POST['name_post_cate'];
							 	$description_post_cate 	= $_POST['description_post_cate'];
							 	if (isset($_POST['status'])) {
							 		$status = $_POST['status'];
							 	}else {
							 		$status = 0;
								}

							 	$add_post_cate = $this->admin->Add_post_cate($name_post_cate, $description_post_cate, $status);
							 	if ($add_post_cate) {
							 		echo "<script> alert('Thêm mới thành công!');";
							 		echo "location.href = 'index.php?page=category&method=cate_all';</script>";
								}else {
									echo "<script> alert('Thêm mới không thành công!');</script>";
							 	}
							 }
							
							
							include_once "../mvc/views/admin/".$method.".php";
							
		            		break;
						case 'products':
							$pro_cates = $this->admin->Get_all_pro_cates();
		            		$post_cates = $this->admin->Get_all_post_cates();
							$trademark = $this->admin->getTrademark();
		            		include_once "../mvc/views/admin/".$method.".php";
							break;
						case 'edit_pro':
							$pro = $this->admin->getPro();
							$pro_catess = $this->admin->Get_all_pro_cates();
		            		$post_cates = $this->admin->Get_all_post_cates();
							$trademarks = $this->admin->getTrademark();
							if (isset($_GET['id'])) {
								$id = $_GET['id'];
							}
							if (isset($_POST['sm_edit_pro'])) {
								$ProductName = $_POST['ProductName'];
								$CategoryID = $_POST['cate'];
								$TradeMarkID = $_POST['trademark'];
								$ProductCode =trim($_POST['ProductCode']); 
								$Description = $_POST['Description'];
								$Detail = $_POST['Detail'];
								$Price = $_POST['Price'];
								$Sale = $_POST['Sale'];
								$tmp = round($Price*$Sale/100, -3);
								$pricepm = $Price -$tmp;
								$Quantity = $_POST['Quantity'];
								$Status = $_POST['Status'];
								$idhinhanh1 = $_POST['idhinhanh1'];
								$idhinhanh2 = $_POST['idhinhanh2'];
								$idhinhanh3 = $_POST['idhinhanh3'];
								$idhinhanh4 = $_POST['idhinhanh4'];
								 foreach ($pro as $key => $value) {
									if ($ProductCode == $value['ProductCode'] && $value['ProductID'] != $id) {
										$err_code = "Mã sản phẩm đã tồn tại ";
									}
								 }
								 
								 if (isset($err_code)) {
									echo "<script> alert('Sửa không thành công')</script>";
								 } else {
								
								 $target_dir    = "../public/images/products/";
					
					
						

							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
						// 	echo "<pre>";
						// print_r($files);
						// echo "</pre>";
						

						        $names      = $files['name'];
						        $types      = $files['type'];
						        $tmp_names  = $files['tmp_name'];
						        $errors     = $files['error'];
						        $sizes      = $files['size'];

						       
								$numitems = count($names);
								
								
						        //$numfiles = 0;
						        for ($i = 0; $i < $numitems; $i ++) {
						       
									$names[$i] = time().convert_name($names[$i]);
						            	switch ($i) {
											case '0':
												$edit_pro = $this->admin->edit_pro($CategoryID,$TradeMarkID,$ProductName,
											$ProductCode,$Description,$names[$i],$Price,$Sale,$pricepm,$Quantity,$Detail,$Status,$id);
											move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
											
												break;
											case '1':
												 $edit_img1 =$this->admin->edit_imgpro($id,$names[$i],$idhinhanh1);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '2':
												$edit_img2 =$this->admin->edit_imgpro($id,$names[$i],$idhinhanh2);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '3':
												$edit_img3 =$this->admin->edit_imgpro($id,$names[$i],$idhinhanh3);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '4':
												$edit_img4 =$this->admin->edit_imgpro($id,$names[$i],$idhinhanh4);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
														
											default:
											
												break;
										}

						               
						            
								} 
								
								echo "<script> alert('Sửa thành công!');";
								echo "location.href = 'index.php?page=category&method=products';</script>";
								
							
						} 
					else {
							$edit_pro = $this->admin->edit_pronotimg($CategoryID,$TradeMarkID,$ProductName,
											$ProductCode,$Description,$Price,$Sale,$pricepm,$Quantity,$Detail,$Status,$id);
											
											echo "<script> alert('Sửa thành công!');";
											echo "location.href = 'index.php?page=category&method=products';</script>";
											
						}
					}
									   
								
								
								
								
							
							
							
							}
							include_once "../mvc/views/admin/".$method.".php";
							break;
						case 'add_pro':
							$pro = $this->admin->getPro();
							$pro_catess = $this->admin->Get_all_pro_cates();
		            		$post_cates = $this->admin->Get_all_post_cates();
							$trademarks = $this->admin->getTrademark();
							if (isset($_POST['sm_add_pro'])) {
								$ProductName = $_POST['ProductName'];
								$CategoryID = $_POST['cate'];
								$TradeMarkID = $_POST['trademark'];
								$ProductCode =trim($_POST['ProductCode']); 
								$Description = $_POST['Description'];
								$Detail = $_POST['Detail'];
								$Price = $_POST['Price'];
								$Sale = $_POST['Sale'];
								$tmp = round($Price*$Sale/100, -3);
								$pricepm = $Price -$tmp;
								$Quantity = $_POST['Quantity'];
								if (isset($_POST['Status'])) {
									$Status = $_POST['Status'];
								} else {
									$Status = 0;
								}
								
							
								$idm = 0;
								$rs =$this->admin->getProNew();
								foreach ($rs as $key => $value) {
									$idm = $value['ProductID'];
								}
								$idm ++;
								 foreach ($pro as $key => $value) {
									if ($ProductCode == $value['ProductCode'] && $value['ProductID'] != $id) {
										$err_code = "Mã sản phẩm đã tồn tại ";
									}
								 }
								 
								 if (isset($err_code)) {
									echo "<script> alert('Sửa không thành công')</script>";
								 } else {
								
								 $target_dir    = "../public/images/products/";
					
					
						

							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
						// 	echo "<pre>";
						// print_r($files);
						// echo "</pre>";
						

						$names      = $files['name'];
						        $types      = $files['type'];
						        $tmp_names  = $files['tmp_name'];
						        $errors     = $files['error'];
								$sizes      = $files['size'];
								$numitems = count($names);
								$names['0'] = time().convert_name($names['0']);
								$add_pro = $this->admin->Add_pro($idm,$CategoryID,$TradeMarkID,$ProductName,$ProductCode,$Description,$names['0'],$Price,$Sale,$pricepm,$Quantity,$Detail,$Status);
												
												
								if (isset($add_pro)) {
									
									move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
						        //$numfiles = 0;
						        for ($i = 1; $i < $numitems; $i ++) {
									$names[$i] = time().convert_name($names[$i]);
						            	switch ($i) {
											
											
											case '1':
												 $add_img1 =$this->admin->Add_imgpro($idm,$names[$i]);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '2':
												$add_img2 =$this->admin->Add_imgpro($idm,$names[$i]);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '3':
												$add_img3 =$this->admin->Add_imgpro($idm,$names[$i]);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
											case '4':
												$add_img4 =$this->admin->Add_imgpro($idm,$names[$i]);
												 move_uploaded_file($tmp_names[$i], $target_dir.$names[$i]);
												 
												break;
														
											default:
											
												break;
										}

						               
						            
								} 
								echo "<script> alert('Thêm mới thành công!');";
								echo "location.href = 'index.php?page=category&method=add_pro';</script>";
							}
								
								
							
						} 
					else {
							
											
											echo "<script> alert('Vui lòng thêm hình ảnh(5 hình)');";
											echo "</script>";
											
						}
					}
									   
								
								
								
								
							
							
							
							}
							include_once "../mvc/views/admin/".$method.".php";
							break;	
						case 'posts':
							$new =$this->admin->getNew();
							$rs = $this->admin->Get_all_post_cates();
							
		            		include_once "../mvc/views/admin/".$method.".php";
							break;
						case 'edit_post':
							$new =$this->admin->getNew();
							$rs = $this->admin->Get_all_post_cates();
							if (isset($_GET['id'])) {
								$id = $_GET['id'];
							}
							if (isset($_POST['sm_edit_post'])) {
								$NewName = $_POST['NewName'];
								$NewCategoryID = $_POST['cate'];
								$Description = $_POST['Description'];
								$Detail = $_POST['Detail'];
								$Status = $_POST['Status'];
								 $target_dir    = "../public/images/new/";
							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
						        $names      = $files['name'];
						        $types      = $files['type'];
						        $tmp_names  = $files['tmp_name'];
						        $errors     = $files['error'];
								$sizes      = $files['size'];
								$names['0'] = time().convert_name($names['0']);
								$this->admin->edit_post($NewName,$NewCategoryID,$Description,$names['0'],$Detail,$Status,$id);
								move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
						        
						       
								
								echo "<script> alert('Sửa thành công!');";
								echo "location.href = 'index.php?page=category&method=posts';</script>";
								
							
						} 
					else {
							$edit_pro = $this->admin->edit_postNotimg($NewName,$NewCategoryID,$Description,$Detail,$Status,$id);
											
											echo "<script> alert('Sửa thành công!');";
											echo "location.href = 'index.php?page=category&method=posts';</script>";
											
						}
											
							}
							include_once "../mvc/views/admin/".$method.".php";
							break;
						case 'add_post':
							$new =$this->admin->getNew();
							$rs = $this->admin->Get_all_post_cates();
							if (isset($_POST['sm_add_post'])) {
								$NewName = $_POST['NewName'];
								$NewCategoryID = $_POST['cate'];
								$Description = $_POST['Description'];
								$Detail = $_POST['Detail'];
								$Status = $_POST['Status'];
								 $target_dir    = "../public/images/new/";
							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
						        $names      = $files['name'];
						        $types      = $files['type'];
						        $tmp_names  = $files['tmp_name'];
						        $errors     = $files['error'];
								$sizes      = $files['size'];
								$names['0'] = time().convert_name($names['0']);
								$this->admin->Add_post($NewName,$NewCategoryID,$Description,$names['0'],$Detail,$Status);
								move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
						        
						       
								
								echo "<script> alert('Thêm mới thành công!');";
								echo "location.href = 'index.php?page=category&method=add_post';</script>";
								
							
						} 
					else {
							
											
											echo "<script> alert('Vui lòng thêm hình ảnh cho bài viết');</script>";
											
											
						}
											
							}
							include_once "../mvc/views/admin/".$method.".php";
							break;
		            	
		            	default:
		            		echo "<h2 class='err404'>ERROR 404 Trang không tồn tại</h2>";
		            		break;
		            }
					break;
					

            	case 'user':
            		$statusUser = $_SESSION['user']['Status'];
            		$getUsers 	= $this->admin->GetUsers_StatusUser($statusUser);
            		$method 	= isset($_GET['method']) ? $_GET['method'] : 'list';
    				$getUsers_All = $this->admin->GetUsers();
            		switch ($method) {
            			case 'edit_user':
            				$userID   = $_GET['userID'];
            				$getUser  = $this->admin->GetUser_UserID($statusUser, $userID);
            				$user 	  = $getUser[0];

            				if (isset($_POST['sm_edit_user'])) {
            					$firstName 	= trim($_POST['firstName']);
			        			$lastName 	= trim($_POST['lastName']);
			        			$userName 	= trim($_POST['userName']);
			        			$email 		= trim($_POST['email']);
			        			$phone 		= trim($_POST['phone']);
			        			$address 	= trim($_POST['address']);
			        			$status 	= $_POST['status'];
			        			$stt 		= isset($_POST['stt']) ? $_POST['stt'] : 0;

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
				        			$editUser = $this->admin->EditUser($firstName, $lastName, $userName, $email, $phone, $address, $status, $stt, $userID);
				        			$_SESSION['note'] = 'Cập nhật thành công!';
				        			echo "<script>location.href='index.php?page=user';</script>";
			        			}
            				}
            				include_once "../mvc/views/admin/".$method.".php";
            				break;
            			
            			default:
            				if (isset($_POST['sm_add_user'])){
            					$firstName 	= trim($_POST['firstName']);
			        			$lastName 	= trim($_POST['lastName']);
			        			$userName 	= trim($_POST['userName']);
			        			$email 		= trim($_POST['email']);
			        			$phone 		= trim($_POST['phone']);
			        			$address 	= trim($_POST['address']);
			        			$passw 		= trim($_POST['passw']);
			        			$password 	= md5(trim($_POST['passw']));
			        			$createBy 	= $_SESSION['user']['Username'];
			        			$status 	= $_POST['status'];
			        			$stt_u 		= isset($_POST['stt']) ? 1 : 0;
		        				
		        				foreach ($getUsers_All as $rowUser) {
		        					if ($userName == $rowUser['Username']) {
		        						$err_userName = 'Tài khoản đã tồn tại!';
		        					}
		        				}
		        				foreach ($getUsers_All as $rowUser) {
		        					if ($email == $rowUser['Email']) {
		        						$err_email = 'Địa chỉ email đã tồn tại!';
		        					}
		        				}
		        				foreach ($getUsers_All as $rowUser) {
		        					if ($phone == $rowUser['Phone']) {
		        						$err_phone = 'Số điện thoại đã tồn tại!';
		        					}
		        				}
		        				if (!isset($err_userName) && !isset($err_email) && !isset($err_phone)) {
				        			$addUser = $this->admin->AddUser($firstName, $lastName, $userName, $email, $phone, $address, $password, $createBy, $status, $stt_u);
				        			$_SESSION['note'] = 'Thêm mới thành công!';
				        			echo "<script>location.href='index.php?page=user';</script>";
				        			
			        			}else{
			        				echo "<script>alert('Thêm mới thất bại! Mời kiểm tra lại dữ liệu bạn nhập!');</script>";
			        			}
            				}
            				include_once "../mvc/views/admin/".$page.".php";
            				break;
            		}
            		break;

            	case 'ordered':
            		if (isset($_GET['method'])) {
            			$method = $_GET['method'];
            		}else {
            			$method = 'list';
            		}
            		switch ($method) {
            			case 'ordered_detail':
            				if (isset($_GET['orderID'])) {
            					$orderID 		= $_GET['orderID'];
	            				$getOrderDetail = $this->admin->GetOrderDetail_OrderID($orderID);
			            		include_once "../mvc/views/admin/".$method.".php";
            				}
            				break;
            			case 'customer_detail':
            				if (isset($_GET['cusID'])) {
            					$cusID 			= $_GET['cusID'];
	            				$getCusDetail 	= $this->admin->GetCusDetail_ID($cusID);
			            		include_once "../mvc/views/admin/".$method.".php";
            				}
            				break;
            			default:
            				if ($method == 'new_ordered') {
            					$stt = 1;
            					$getOrders = $this->admin->GetOrders_Stt($stt);
            				}else{
	            				$getOrders = $this->admin->GetOrders();
            				}
            				foreach ($getOrders as $rowOrder){
            					$orderID = $rowOrder['OrderID'];
            					// Nếu đơn hàng đã giao thì cập nhật lại số lượng sản phẩm
            					if ($rowOrder['Status_order'] == 3) {
            						$getOrderDetail = $this->admin->GetOrderDetail_OrderID($orderID);
            						
            						$this->admin->EditOrderedStt_ID($orderID, 4);
            						foreach ($getOrderDetail as $rowOrderDetail) {
            							$proID 		= $rowOrderDetail['ProductID'];
            							$qty 		= $rowOrderDetail['Qty'];
            							$quantity 	= $rowOrderDetail['Quantity'];
            							$this->admin->UpdateProQty($proID, $quantity-$qty);
            						}
            					}
            				}
		            		include_once "../mvc/views/admin/".$page.".php";
            				break;
            		}
            		break;
				
				case 'info':

					if (isset($_GET['method'])) {
						$method = $_GET['method'];
					}
					switch ($method) {
					case 'contact':
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					case 'feedback':
						$feedback =$this->admin->getFeedback();
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					case 'reply':
						$feedback =$this->admin->getFeedback();
						if (isset($_POST['sm_reply'])) {
							$reply = $_POST['reply'];
							$email = $_POST['email'];
							$id = $_POST['id'];
							//Thiết lập thông tin gửi mail cho khách
							$body = '<div class="row"><h3 style="color: #f8635a; padding: 20px 0px;">Cảm ơn quý khách đã phản hồi KenShop!</h3></div>';
							$body .= '<div class="row"><br><br><p ><strong>Trả lời phản hồi của quý khách:</strong></p></div></div>';
							$body .= '<div class="row"><br><br><p>'.$reply.'</p></div></div>';
							// Tiến hành gửi email cho khách
							include_once "../PHPMailer/class.phpmailer.php"; 
							include_once "../PHPMailer/class.smtp.php"; 
							include_once "../PHPMailer/sent-email.php";
							$this->admin->edit_feedback($id);
							echo "<script> alert('Đã gửi phản hồi thành công!');";
								echo "location.href = 'index.php?page=info&method=feedback';</script>";

						}
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					case 'about':
						$about =$this->admin->getAbout();

						include_once "../mvc/views/admin/" . $method . ".php";
						break;	
					case 'edit_about':
						$about =$this->admin->getAbout();
						if (isset($_GET['id'])) {
							$id = $_GET['id'];
						}
						if (isset($_POST['sm_edit_about'])) {
							$MetaTitle = $_POST['MetaTitle'];
									$Title = $_POST['Title'];
									$Detail = $_POST['Detail'];
									$target_dir    = "../public/images/blog/";
								$files = $_FILES['fileupload'];
								if($files['name']['0'] != "" ) {
									$names      = $files['name'];
									$types      = $files['type'];
									$tmp_names  = $files['tmp_name'];
									$errors     = $files['error'];
									$sizes      = $files['size'];
									$names['0'] = time().convert_name($names['0']);
									$this->admin->edit_about($MetaTitle,$Title,$names['0'],$Detail,$id);
									move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
									
									
									
									echo "<script> alert('Sửa thành công!');";
									echo "location.href = 'index.php?page=info&method=about';</script>";
									
								
							} 
						else {
								 $this->admin->edit_aboutNotimg($MetaTitle,$Title,$Detail,$id);
												
								 echo "<script> alert('Sửa thành công!');";
								 echo "location.href = 'index.php?page=info&method=about';</script>";
												
							}
						}

						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					}
					break;
					
				case 'image':
					if (isset($_GET['method'])) {
						$method = $_GET['method'];
					}
					switch ($method) {
					case 'slide':
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					case 'edit_slide':
						if (isset($_GET['id'])) {
							$idslide = $_GET['id'];
						}
						if (isset($_POST['sm_edit_slide'])) {
							$des = $_POST['Description'];
							$status =$_POST['Status'];
							if ($status == 1) {
								$target_dir    = "../public/images/banners/slides-banner/";
							} else {
								$target_dir    = "../public/images/banners/promotion-banner/";
							}
							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
								$names      = $files['name'];
								$tfilesildeypes      = $files['type'];
								$tmp_names  = $files['tmp_name'];
								$errors     = $files['error'];
								$sizes      = $files['size'];
								$names['0'] = time().convert_name($names['0']);
								$img = $names['0'];
								
								$res = $this->admin->edit_slide($idslide,$img,$des);
								move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
								echo "<script> alert('Sửa thành công!');";
								
							echo "location.href = 'index.php?page=image&method=edit_slide';</script>";
						} 
					else {		
							$this->admin->edit_slideNotimg($idslide,$des);
								echo "<script> alert('Sửa thành công!');";
								echo "location.href = 'index.php?page=image&method=edit_slide';</script>";				
						}
						}
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					case 'logo':
						if (isset($_POST['sm_edit_logo'])) {
							$des = $_POST['Description'];
							$id = $_POST['id'];
							$target_dir    = "../public/images/logos/";
							$files = $_FILES['fileupload'];
							if($files['name']['0'] != "" ) {
								$names      = $files['name'];
								$tfilesildeypes      = $files['type'];
								$tmp_names  = $files['tmp_name'];
								$errors     = $files['error'];
								$sizes      = $files['size'];
								$names['0'] = time().convert_name($names['0']);
								$img = $names['0'];
								
								$res = $this->admin->edit_logo($id,$img,$des);
								move_uploaded_file($tmp_names['0'], $target_dir.$names['0']);
								echo "<script> alert('Sửa thành công!');</script>";
								
							
						} 
					else {		
							$this->admin->edit_logoNotimg($id,$des);
								echo "<script> alert('Sửa thành công!');</script>";
												
						}

						}
						include_once "../mvc/views/admin/" . $method . ".php";
						break;
					
					}
					break;
		            	default:
		            		echo "<h2 class='err404'>ERROR 404 Trang không tồn tại</h2>";
		            		break;
		            }
		}
	}

?>