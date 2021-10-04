 <?php 
	class Admin_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		// Phạm tĩnh
		public function getSlide() {
		$sql = "SELECT *FROM slide ";
		return $this->pdo->query($sql);
		}
		public function getLogo() {
			$sql = "SELECT *FROM logo ";
			return $this->pdo->query($sql);
		}
		public function getContact() {
			$sql = "SELECT *FROM contact ";
			return $this->pdo->query($sql);
		}
		public function getPro() {
			$sql = "SELECT *FROM product ORDER BY ProductID DESC ";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getProNew() {
			$sql = "SELECT *FROM product ORDER BY ProductID DESC LIMIT 0,1 ";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getNew() {
			$sql = "SELECT *FROM new ORDER BY NewID DESC ";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getTrademark() {
			$sql = "SELECT *FROM trademark ";
			return $this->pdo->query($sql);
		}
		
		public function DeleteCatePro($userID)
		{
			$sql = "DELETE FROM `product_category` WHERE `CategoryID` = :UserID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':UserID', $UserID);
			$UserID = (int)$userID;
			$pre->execute();
		}
		public function DeleteTrademark($userID)
		{
			$sql = "DELETE FROM `trademark` WHERE `TrademarkID` = :UserID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':UserID', $UserID);
			$UserID = (int)$userID;
			$pre->execute();
		}
		public function DeleteNewCate($userID)
		{
			$sql = "DELETE FROM `new_category` WHERE `NewCategoryID` = :UserID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':UserID', $UserID);
			$UserID = (int)$userID;
			$pre->execute();
		}

		public function editContact($hotline, $email, $address, $content,$contactID)
		{
			$sql = "UPDATE `contact` SET 
				`Email` = '$email',
				`Hotline` = '$hotline',
				`Address` = '$address',
				`Content` = '$content'
			
			WHERE `contact`.`ContactID` = $contactID";
			$pre = $this->pdo->query($sql);
		}

		
		public function Add_trade_mark($name, $des, $status)
		{
			$sql = "INSERT INTO `trademark` (`Name`, `MetaTitle`, `Status`) VALUES ('$name', '$des', '$status')";
			return $this->pdo->query($sql);
		}
		public function Add_post_cate($name, $des, $status)
		{
			$sql = "INSERT INTO `new_category` (`Name`, `MetaTitle`, `Status`) VALUES ('$name', '$des', '$status')";
			return $this->pdo->query($sql);
		}
		public function edit_catepro($name, $metal, $status, $id)
		{
			$sql = "UPDATE `product_category` SET 
				`Name` = '$name',
				`MetaTitle` = '$metal',
				`Status` = $status
				
			
			WHERE `CategoryID` = $id";
			$pre = $this->pdo->query($sql);
		}
		public function edit_catepost($name, $metal, $status, $id)
		{ 
			$sql = "UPDATE `new_category` SET 
				`Name` = '$name',
				`MetaTitle` = '$metal',
				`Status` = $status
				
			
			WHERE `NewCategoryID` = $id";
			$pre = $this->pdo->query($sql);
		}
		public function edit_catetrademark($name, $metal, $status, $id)
		{
			$sql = "UPDATE `trademark` SET 
				`Name` = '$name',
				`MetaTitle` = '$metal',
				`Status` = $status
				
			
			WHERE `TradeMarkID` = $id";
			$pre = $this->pdo->query($sql);
		}
		public function DeletePro_ID($proID,$tradeID,$cateID)
		{	
			$sqlimage = "DELETE FROM `image` WHERE `ProductID` = $proID";
			$preimage = $this->pdo->query($sqlimage);
		
			$sql = "DELETE FROM `product` WHERE `product`.`CategoryID`=$cateID AND `product`.`TradeMarkID`=$tradeID AND `product`.`ProductID`=$proID";
			return $this->pdo->query($sql);
		}
		public function DeletePost_ID($postID,$cateID)
		{	
			
			$sql = "DELETE FROM `new` WHERE `new`.`NewCategoryID`=$cateID AND  `new`.`NewID`=$postID";
			return $this->pdo->query($sql);
		}
		public function GetProImgs_ID($id)
		{
			$sql = "SELECT * FROM `image` WHERE ProductID = :id AND Status = 1 ORDER BY ImageID DESC ";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $ID);
			$ID = (int)$id;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//edit_pro
		public function edit_pro($cate,$trade,$proname,$code,$des,$img,$price,$sale,$pricepm,$qty,$detail,$status,$id)
		{
			$sql = "UPDATE `product` SET
			 `CategoryID`=$cate,
			 `TradeMarkID`=$trade,
			 `ProductName`='$proname',
			 `ProductCode`='$code',
			 `Description`='$des',
			 `ProductImage`='$img',
			 `Price`=$price,
			 `Sale`=$sale,
			 `PromotionPrice`=$pricepm,
			 `Quantity`=$qty,
			 `Detail`='$detail',
			 `Status`=$status WHERE `ProductID` = $id";
			$pre = $this->pdo->query($sql);
		} 
		public function edit_pronotimg($cate,$trade,$proname,$code,$des,$price,$sale,$pricepm,$qty,$detail,$status,$id)
		{
			$sql = "UPDATE `product` SET
			 `CategoryID`=$cate,
			 `TradeMarkID`=$trade,
			 `ProductName`='$proname',
			 `ProductCode`='$code',
			 `Description`='$des',
			 `Price`=$price,
			 `Sale`=$sale,
			 `PromotionPrice`=$pricepm,
			 `Quantity`=$qty,
			 `Detail`='$detail',
			 `Status`=$status WHERE `ProductID` = $id";
			$pre = $this->pdo->query($sql);
		}
		
		public function edit_imgpro($idpro,$img,$idha)
		{
			$sql = "UPDATE `image` SET
			`ProductID`=$idpro,
			`Image`='$img',
			`Description`=' ' 
			 WHERE `ImageID` = $idha";
			$pre = $this->pdo->query($sql);
		}
		public function Add_pro($idm,$cate,$trade,$proname,$code,$des,$img,$price,$sale,$pricepm,$qty,$detail,$status)
		{
			$sql = "INSERT INTO `product` (`ProductID`,
			 `CategoryID`, 
			 `TradeMarkID`,
			  `ProductName`,
			   `ProductCode`, 
			   `Description`, 
			   `ProductImage`,
			    `Price`,
				 `Sale`, 
				 `PromotionPrice`,
				  `Quantity`,
				   `Detail`,
					`Status`) VALUES ($idm,$cate,$trade,'$proname','$code','$des','$img',$price,$sale,$pricepm,$qty,'$detail',$status
					)";
			return $this->pdo->query($sql);
		}
		public function Add_imgpro($idpro,$img)
		{
			$sql = "INSERT INTO `image`( `ProductID`,
			 `Image`,
			  `Description`
			  ) VALUES ($idpro,'$img',' ')";
			return $this->pdo->query($sql);
		}

		public function edit_post($newname,$cate,$des,$img,$detail,$status,$id)
		{
			$sql = "UPDATE `new` SET
			 `NewCategoryID`=$cate,
			 `Title`='$newname',
			 `Description`='$des',
			 `NewImage`='$img',
			 `Detail`='$detail',
			 `Status`=$status WHERE `NewID` = $id";
			$pre = $this->pdo->query($sql);
		} 
		public function edit_postNotimg($newname,$cate,$des,$detail,$status,$id)
		{
			$sql = "UPDATE `new` SET
			 `NewCategoryID`=$cate,
			 `Title`='$newname',
			 `Description`='$des',
			 `Detail`='$detail',
			 `Status`=$status WHERE `NewID` = $id";
			$pre = $this->pdo->query($sql);
		} 
		public function Add_post($newname,$cate,$des,$img,$detail,$status)
		{
			$sql = "INSERT INTO `new`(  `NewCategoryID`,
			`Title`,
			  `Description`,
			  `NewImage`,
			  `Detail`,
			  `Status`
			  ) VALUES ($cate,'$newname','$des','$img','$detail',$status)";
			return $this->pdo->query($sql);
		}
		//edit slide
		public function edit_slide($id,$img,$des)
		{
			$sql = "UPDATE `slide` SET `slide`.`Image`='$img',
			 `slide`.`Description`='$des'
			 WHERE `slide`.`SlideID`=$id";
				return $this->pdo->query($sql);
		} 
		public function edit_slideNotimg($id,$des)
		{
			$sql = "UPDATE `slide` SET 
			 `slide`.`Description`='$des'
			 WHERE `slide`.`SlideID`=$id";
				return $this->pdo->query($sql);
		} 
		//edit_logo
		public function edit_logo($id,$img,$des)
		{
			$sql = "UPDATE `logo` SET `logo`.`Image`='$img',
			 `logo`.`Description`='$des'
			 WHERE `logo`.`LogoID`=$id";
				return $this->pdo->query($sql);
		}
		public function edit_logoNotimg($id,$des)
		{
			$sql = "UPDATE `logo` SET 
			 `logo`.`Description`='$des'
			 WHERE `logo`.`LogoID`=$id";
				return $this->pdo->query($sql);
		}
		//Lấy phản hồi của khách hàng
		public function getFeedback()
		{
			$sql = "SELECT *FROM feedback ORDER BY CreatDate DESC ";
			return $this->pdo->query($sql);
		}
		public function edit_feedback($id)
		{
			$sql = "UPDATE `feedback` SET
			 `Status` = '0' 
			 WHERE
			  `feedback`.`FeedbackID` = $id";
				return $this->pdo->query($sql);
		}
		public function getAbout()
		{
			$sql = "SELECT *FROM about  ";
			return $this->pdo->query($sql);
		}


		//edit about

		public function edit_about($MetaTitle,$Title,$img,$detail,$id)
		{
			$sql = "UPDATE `about` SET
			 `Meta Title`='$MetaTitle',
			 `Title`='$Title',
			 `Image`='$img',
			 `Detail`='$detail'
			  WHERE `AboutID` = $id";
			$pre = $this->pdo->query($sql);
		} 
		public function edit_aboutNotimg($MetaTitle,$Title,$detail,$id)
		{
			$sql = "UPDATE `about` SET
			 `Meta Title`='$MetaTitle',
			 `Title`='$Title',
			 `Detail`='$detail'
			  WHERE `AboutID` = $id";
			$pre = $this->pdo->query($sql);
		} 

		// Nguyễn nhung
		public function Get_all_pro_cates()
		{
			$sql = "SELECT *FROM product_category ";
			return $this->pdo->query($sql);
		}

		public function Get_all_post_cates()
		{
			$sql = "SELECT *FROM `new_category`";
			return $this->pdo->query($sql);
		}

		public function Add_pro_cate($name_pro_cate, $description_pro_cate, $status)
		{
			$sql = "INSERT INTO `product_category` (`Name`, `MetaTitle`, `Status`) VALUES ('$name_pro_cate', '$description_pro_cate', '$status')";
			return $this->pdo->query($sql);
		}

		// Quản lý tài khoản
		public function GetUsers()
		{
			$sql = "SELECT * FROM user WHERE Stt > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetUsers_StatusUser($statusUser)
		{
			$sql = "SELECT * FROM user WHERE Status <= $statusUser";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function GetUser_UserID($statusUser, $userID)
		{
			$sql = "SELECT * FROM user WHERE Status <= :StatusUser AND UserID = :UserID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':StatusUser', $StatusUser);
			$pre->bindParam(':UserID', $UserID);
			$StatusUser = $statusUser;
			$UserID 	= (int)$userID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function EditUser($firstName, $lastName, $userName, $email, $phone, $address, $status, $stt, $userID)
		{
			$sql = "UPDATE `user` 
					SET `FirstName` = '$firstName',
						`LastName` 	= '$lastName',
						`Username` 	= '$userName',
						`Email` 	= '$email',
						`Phone` 	= '$phone',
						`Address` 	= '$address',
						`Status` 	= '$status',
						`Stt` 		= '$stt'
					WHERE `user`.`UserID` = '$userID'";
			return $this->pdo->query($sql);
		}
		public function AddUser($firstName, $lastName, $userName, $email, $phone, $address, $password, $createBy, $status, $stt)
		{
			$sql = "INSERT INTO `user` (`Username`, `Password`, `FirstName`, `LastName`, `Address`, `Email`, `Phone`, `CreatedBy`, `Status`, `Stt`) VALUES ('$userName', '$password', '$firstName', '$lastName', '$address', '$email', '$phone', '$createBy', '$status', '$stt')";
			return $this->pdo->query($sql);
		}

		public function DeleteUser_ID($userID)
		{
			$sql = "DELETE FROM `user` WHERE `UserID` = :UserID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':UserID', $UserID);
			$UserID = (int)$userID;
			$pre->execute();
		}
		// Quản lý đơn hàng
		public function GetOrders()
		{
			$sql = "SELECT OrderID, customer.CustomerID, customer.Name, TotalMoney, Note, CreatedDate, UpdateDate, Status_order FROM `order`, `customer` WHERE order.CustomerID = customer.CustomerID ORDER BY Status_order ASC, OrderID DESC";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function GetOrders_Stt($stt)
		{
			$sql = "SELECT OrderID, customer.CustomerID, customer.Name, TotalMoney, Note, CreatedDate, UpdateDate, Status_order FROM `order`, `customer` WHERE order.CustomerID = customer.CustomerID AND Status_order = :Stt ORDER BY Status_order ASC, OrderID DESC";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':Stt', $stt);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function EditOrderedStt_ID($orderID, $status)
		{
			$sql = "UPDATE `order` SET `Status_order` = '$status' WHERE `order`.`OrderID` = '$orderID'";
			$pre = $this->pdo->query($sql);
		}
		public function GetOrderDetail_OrderID($orderID)
		{
			$sql = "SELECT OrderID, product.ProductID, product.ProductCode, product.ProductName, product.ProductImage, order_detail.Price, order_detail.Quantity AS Qty, product.Quantity AS Quantity, order_detail.Total FROM `order_detail`, `product` WHERE OrderID = :OrderID AND order_detail.ProductID = product.ProductID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':OrderID', $OrderID);
			$OrderID = (int)$orderID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function GetCusDetail_ID($cusID)
		{
			$sql = "SELECT * FROM `customer` WHERE CustomerID = :CustomerID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':CustomerID', $CustomerID);
			$CustomerID = (int)$cusID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// update lại số lượng sản phẩm
		public function UpdateProQty($proID, $qty)
		{
			$sql = "UPDATE `product` SET `Quantity` = '$qty' WHERE `product`.`ProductID` = $proID";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		/* Thống kê */
		// Thống kê lượt vote trong tháng
		public function VoteStatistic()
		{
			$sql = "SELECT ProductCode, ProductName, ViewCount, Rate, trademark.Name AS 'TrademarkName'
					FROM `rate`, `product`, `trademark` 
					WHERE rate.ProductID = product.ProductID 
					AND	 product.TrademarkID = trademark.TrademarkID
					AND rate.DateCreate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()
					AND rate.Status = 1 
					-- AND product.Status > 0
					GROUP BY rate.ProductID
					ORDER BY product.Rate DESC, product.ViewCount DESC";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		/*SELECT rate.DateCreate, product.ProductCode, product.Rate, product.ViewCount*/

		// Thống kê doanh số trong tháng
		public function SalesStatistic()
		{
			$sql = "SELECT 
					    product.ProductCode, 
					    product.PromotionPrice, 
					    SUM(order_detail.Quantity) AS 'sold_quantity', 
					    SUM(order_detail.Total) AS 'sold_money'
					FROM `order_detail`, `product`, `order`
					WHERE order_detail.OrderID = order.OrderID
					AND order_detail.ProductID = product.ProductID
					AND order.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()
					AND order.Status_order = 4
					GROUP BY order_detail.ProductID";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Thống kê doanh thu trong tháng 
		public function ProceedsStatistic()
		{
			$sql = "SELECT * FROM `order` 
					WHERE order.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()
					AND Status_order = 4";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		
	}
?>