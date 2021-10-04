 <?php  
	 //include_once '../config/connect.php';

	class User_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct(); // Tự động chạy hàm __construct()
		}
		// Pham tĩnh
		public function getContact() {
		$sql = "SELECT *FROM contact";
		return $this->pdo->query($sql);
			}
			public function getAbout() {
				$sql = "SELECT *FROM about";
				return $this->pdo->query($sql);
			}
			public function getSildes() {
				$sql = "SELECT *FROM slide";
				return $this->pdo->query($sql);
			}
			public function getFeedback($name, $phone, $email, $reply) {
				$sql = "INSERT INTO feedback(Name,Phone,Email,Content) VALUES(:name, :phone, :email, :content)";
				$feb = $this->pdo->prepare($sql);
				$feb->bindParam(':name', $name);
				$feb->bindParam(':phone', $phone);
				$feb->bindParam(':email', $email);
				$feb->bindParam(':content', $reply);
				$feb->execute();

			}
		//Lấy Ngẫu nhiên 3 sản phẩm trong sản phẩm hot 
		public function getRandHot() {
				$sql = "SELECT *FROM product WHERE Status = 2 ORDER BY RAND() LIMIT 3";
				$pre = $this->pdo->query($sql);
				return $pre->fetchAll(PDO::FETCH_ASSOC);
			}

	//Bài viết 		
			//Lấy ra bài viết 
		public function Get_New($limit)
		{
			// 
			$sql = "SELECT * FROM `new` WHERE Status > 0
					ORDER BY CreatedDate DESC LIMIT $limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy ra tất cả bài viết 
		public function Get_NewAll($cateID,$offset)
		{
			// 
			$sql = "SELECT * FROM `new`
				WHERE Status > 0 AND NewCategoryID LIKE '$cateID' 
					ORDER BY CreatedDate DESC LIMIT $offset,5 ";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy bài viết với ID
		public function Get_NewID($id)
		{
			//
			$sql = "SELECT * FROM `new` 
					where NewID = $id";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//lấy ra danh sách nhóm bài viết
		public function getCatenew()
		{
			$sql = "SELECT * FROM `new_category` ";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function CountNews()
		{
			$sql = "SELECT * FROM `new` WHERE Status > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//lấy ra bài viết trong cùng 1 nhóm
		//
			//end

		// Nguyễn nhung
		public function GetUsers()
		{
			$sql = "SELECT * FROM user WHERE Stt > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function Login($email, $passw)
		{
			$sql = "SELECT * FROM user WHERE Email = :email AND Password = :passw AND Status > 0";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':email', $email);
			$pre->bindParam(':passw', $passw);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function Register($userName, $firstName, $lastName, $phone, $email, $address, $passw, $createBy, $status, $stt)
		{
			$sql = "INSERT INTO `user` (`Username`, `Password`, `FirstName`, `LastName`, `Address`, `Email`, `Phone`, `CreatedBy`, `Status`, `Stt`) VALUES (:Username, :Password, :FirstName, :LastName, :Address, :Email, :Phone, :CreatedBy, :Status, :Stt)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':Username', $userName);
			$pre->bindParam(':FirstName', $firstName);
			$pre->bindParam(':LastName', $lastName);
			$pre->bindParam(':Password', $passw);
			$pre->bindParam(':Address', $address);
			$pre->bindParam(':Email', $email);
			$pre->bindParam(':Phone', $phone);
			$pre->bindParam(':CreatedBy', $createBy);
			$pre->bindParam(':Status', $status);
			$pre->bindParam(':Stt', $stt);
			$pre->execute();
		}
		public function AddCustomer($userName, $name, $phone, $email, $address)
		{
			$sql = "INSERT INTO `customer` (`Username`, `Name`, `Email`, `Phone`, `Address`) VALUES ('$userName', '$name', '$email', '$phone', '$address')";
			$pre = $this->pdo->query($sql);
		}

		// Hiện tất cả các đơn hàng user đã đặt
		// Lấy tất cả đơn hàng (gồm thông tin khách hàng và đơn hàng) bằng $_SESSION['user']['UserName']
		public function GetCosOrderInfor_Username($userName)
		{
			$sql = "SELECT * FROM `order`, `customer` 
					WHERE order.CustomerID = customer.CustomerID  
					AND customer.Username = '$userName'";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// lấy thông tin đơn hàng chi tiết(gồm cả sản phẩm)
		public function GetProductOrder_OrderID($orderID)
		{
			$sql = "SELECT 
						order_detail.ProductID,
						order_detail.Price, 
						order_detail.Quantity, 
						order_detail.Total, 
						order_detail.Status,
						product.ProductCode,
						product.ProductName,
						product.ProductImage 
					FROM `order_detail`, `product` 
					WHERE order_detail.ProductID = product.ProductID 
					AND order_detail.OrderID = '$orderID'";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// Lấy thông tin Username của cus thông qua orderID 
		public function GetCusUsername_OrderID($orderID)
		{
			$sql = "SELECT customer.CustomerID, customer.Username FROM `order`, `customer` WHERE order.CustomerID = customer.CustomerID AND order.OrderID = :OrderID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':OrderID', $OrderID);
			$OrderID = (int)$orderID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// Lấy trạng thái đánh giá thông qua proID và orderID
		public function GetStatusRate_ProID_OrderID($orderID, $proID)
		{
			$sql = "SELECT Status FROM `order_detail` WHERE order_detail.OrderID = :OrderID AND order_detail.ProductID = :ProductID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':OrderID', $OrderID);
			$pre->bindParam(':ProductID', $ProductID);
			$OrderID 	= (int)$orderID;
			$ProductID 	= (int)$proID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetAvrRate($proID)
		{
			$sql = "SELECT AVG(RatePoint) AS Rate FROM `rate` WHERE ProductID = :ProductID GROUP BY ProductID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':ProductID', $ProductID);
			$ProductID 	= (int)$proID;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Update lại trạng thái đánh giá bên bảng order_detail
		public function UpdateStatusRate_OrderDetail($status, $orderID, $proID)
		{
			$sql = "UPDATE `order_detail` SET `Status` = :Status WHERE `order_detail`.`OrderID` = :OrderID AND `order_detail`.`ProductID` = :ProductID";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':Status', $Status);
			$pre->bindParam(':OrderID', $OrderID);
			$pre->bindParam(':ProductID', $ProductID);
			$Status 	= $status;
			$OrderID 	= (int)$orderID;
			$ProductID 	= (int)$proID;
			$pre->execute();
		}

		public function AddOrder($cusID, $totalMoney, $note)
		{
			$sql = "INSERT INTO `order` (`CustomerID`, `TotalMoney`, `Note`) VALUES ('$cusID', '$totalMoney', '$note')";
			$pre = $this->pdo->query($sql);
		}
		public function AddOrderDetail($orderID, $proID, $price, $qty, $totalMoney)
		{
			$sql = "INSERT INTO `order_detail` (`OrderID`, `ProductID`, `Price`, `Quantity`, `Total`) VALUES ('$orderID', '$proID', '$price', '$qty', '$totalMoney')";
			$pre = $this->pdo->query($sql);
		}

		public function CountPros()
		{
			$sql = "SELECT * FROM `product` WHERE Status > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//------------------------------------- Productlist / Home -------------------------------------//

		// cate product
		public function GetCatePros()
		{
			$sql = "SELECT * FROM `product_category` WHERE status > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsAll()
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsHot()
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status = 2 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsNew()
		{
			// sp mới là sp được thêm vào trong 1 tháng gần đây
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() 
					AND product.Status > 0
					AND product.Quantity > 0
					AND trademark.TradeMarkID = product.TradeMarkID";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProducts_CateID($cateID)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID
					AND product.CategoryID = '$cateID'";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsHot_Status($cateID)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status = 2 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID
					AND product.CategoryID = '$cateID'";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsNew_Status($cateID)
		{
			// sp mới là sp được thêm vào trong 1 tháng gần đây
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() 
					AND product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID
					AND product.CategoryID = '$cateID'";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsAll_limit($start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsHot_limit($start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status = 2 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// sp mới là sp được thêm vào trong 1 tháng gần đây
		public function GetProductsNew_limit($start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() 
					AND product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// sp ưa thích dựa theo số sao sp
		public function GetProductsLiked_limit($start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					AND product.Rate >= 3 
					ORDER BY product.ProductID ASC, product.Rate DESC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// sp hết hàng
		public function GetProductsSellOut_limit($start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity = 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProducts_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND product.CategoryID = '$cateID' 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%'
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsHot_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status = 2 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND product.CategoryID = '$cateID' 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro  LIKE '%$keyPro%'
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsNew_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro)
		{
			// sp mới là sp được thêm vào trong 1 tháng gần đây
			$sql = "SELECT * FROM `product`, `trademark`
					WHERE product.CreatedDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() 
					AND product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND product.CategoryID = '$cateID' 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%'
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsLiked_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity > 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND product.CategoryID = '$cateID' 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					AND product.Rate > 3 
					ORDER BY product.ProductID ASC, product.Rate DESC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetProductsSellOut_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro)
		{
			$sql = "SELECT * FROM `product`, `trademark` 
					WHERE product.Status > 0 
					AND product.Quantity = 0 
					AND trademark.TradeMarkID = product.TradeMarkID 
					AND product.CategoryID = '$cateID' 
					AND trademark.Name LIKE '%$keyBrand%' 
					AND product.$opPro LIKE '%$keyPro%' 
					ORDER BY product.ProductID ASC
					LIMIT $start,$limit";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetPro_ID($id)
		{
			$sql = "SELECT * FROM `product`, `trademark` WHERE ProductID = :id AND trademark.TradeMarkID = product.TradeMarkID ";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $ID);
			$ID = (int)$id;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function GetPro_ID_obj($id)
		{
			$sql = "SELECT * FROM `product` WHERE ProductID = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $ID);
			$ID = (int)$id;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function GetProImgs_ID($id)
		{
			$sql = "SELECT * FROM `image` WHERE ProductID = :id AND Status = 1 ORDER BY ImageID DESC LIMIT 0,4";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $ID);
			$ID = (int)$id;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// Lấy các đánh giá sao của sản phẩm từ bảng rate thông qua proID
		public function GetProRates_ID($id)
		{
			$sql = "SELECT rate.RatePoint, rate.Summary, rate.Comment, rate.DateCreate, customer.Name FROM rate, customer 
					WHERE customer.CustomerID = rate.CustomerID 
					AND rate.ProductID = :id
					AND rate.Status = 1
					AND customer.Status > 0";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $ID);
			$ID = (int)$id;
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function GetCatePro_CateID($cateID)
		{
			$sql = "SELECT * FROM `product_category` WHERE CategoryID = '$cateID' AND Status > 0";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// ĐÁNH GIÁ SẢN PHẨM
		public function Rate($CustomerID, $ProductID, $RatePoint, $Summary, $Comment)
		{
			$sql = "INSERT INTO `rate` (`CustomerID`, `ProductID`, `RatePoint`, `Summary`, `Comment`) VALUES ('$CustomerID', '$ProductID', '$RatePoint', '$Summary', '$Comment')";
			$pre = $this->pdo->query($sql);
		}
		public function UpdateProductRate_ID($ViewCount, $Rate, $ProID)
		{
			$sql = "UPDATE `product` SET `ViewCount` = '$ViewCount', `Rate` = '$Rate' WHERE `product`.`ProductID` = $ProID";
			$pre = $this->pdo->query($sql);
		}

		/* Profile */
		public function GetUser_ID($id)
		{
			$sql = "SELECT * FROM user WHERE Stt > 0 AND UserID = $id";
			$pre = $this->pdo->query($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function EditUser($firstName, $lastName, $userName, $email, $phone, $address, $userID)
		{
			$sql = "UPDATE `user` 
					SET `FirstName` = '$firstName',
						`LastName` 	= '$lastName',
						`Username` 	= '$userName',
						`Email` 	= '$email',
						`Phone` 	= '$phone',
						`Address` 	= '$address'
					WHERE user.UserID = '$userID'";
			return $this->pdo->query($sql);
		}
	}

?>