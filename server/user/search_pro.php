<?php  
	session_start();
	include_once '../../config/connect.php';
	include_once '../../mvc/models/user_m.php';
	$pre = new User_m();

	$status 	= $_POST['status'];
	$cateID 	= $_POST['cateID'];
	$page 		= $_POST['page'];
	$selectOp 	= $_POST['selectOp'];
	$key 		= $_POST['key'];
	$start 		= ($page-1)*5;
	$limit 		= 5;

	$_SESSION['page'] = $page;

	if ($selectOp == 'Brand') {
		$keyBrand 	= $key;
		$keyPro 	= "";
		$opPro 		= 'ProductName';
	}else{
		$keyBrand 	= "";
		$keyPro 	= $key;
		$opPro 		= $selectOp;
	}

	$productsAll = $pre->GetProductsAll();
	$countProAll = count($productsAll);

	// Lấy tất cả sản phẩm theo điều kiện
	if ($cateID == '0' && $status == '0') {
		$products 		= $pre->GetProductsAll_limit($start,$limit,$opPro,$keyBrand,$keyPro);
		$proSearchAll 	= $pre->GetProductsAll_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
	}elseif ($cateID == '0' && $status != '0') {
		switch ($status) {
			case 'hot':
				$products 		= $pre->GetProductsHot_limit($start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsHot_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'new':
				$products 		= $pre->GetProductsNew_limit($start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsNew_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'liked':
				$products 		= $pre->GetProductsLiked_limit($start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsLiked_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'sellOut':
				$products 		= $pre->GetProductsSellOut_limit($start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsSellOut_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			default:
				$products 		= $pre->GetProductsAll_limit($start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsAll_limit(0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
		}
	}elseif ($cateID != '0' && $status == '0') {
		$products 		= $pre->GetProducts_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
		$proSearchAll 	= $pre->GetProducts_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
	}elseif ($cateID != '0' && $status != '0') {
		switch ($status) {
			case 'hot':
				$products 		= $pre->GetProductsHot_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsHot_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'new':
				$products 		= $pre->GetProductsNew_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsNew_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'liked':
				$products 		= $pre->GetProductsLiked_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsLiked_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			case 'sellOut':
				$products 		= $pre->GetProductsSellOut_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProductsSellOut_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
			default:
				$products 		= $pre->GetProducts_CateID_limit($cateID,$start,$limit,$opPro,$keyBrand,$keyPro);
				$proSearchAll 	= $pre->GetProducts_CateID_limit($cateID,0,$countProAll,$opPro,$keyBrand,$keyPro);
				break;
		}
	}

	$_SESSION['total_page'] = count($proSearchAll);
?>

<?php  
	if (count($products) > 0) {
		foreach ($products as $key => $rowPro) {
?>
			<ul class="products-listItem">
			  	<li class="products">
			    	<?php if ($rowPro['Sale']>0) {
			      		echo '<div class="offer"> -'.$rowPro['Sale'].'%</div>';
			    	} ?>
			    	<div class="thumbnail">
				      	<a href="index.php?page=pro_details&proID=<?php echo $rowPro['ProductID']; ?>">
				        	<img src="public/images/products/<?php echo $rowPro['ProductImage']; ?>" alt="<?php echo $rowPro['ProductName']; ?>">
				      	</a>
			    	</div>
			    	<div class="product-list-description">
				      	<div class="productname"><?php echo $rowPro['ProductName']; ?></div>
				      	<p>
				        	<!-- Hiển thị số sao -->
				        	<?php
					          	$n = $rowPro['Rate'];
					          	if ($n != 0) {
					            	for ($i=0; $i < floor($n); $i++) { 
					              		echo '<i class="fa fa-star light-red"></i>';
					            	}
					            	if (ceil($n) != $n) {
					              		echo '<i class="fa fa-star-half-o light-red"></i>';
					            	}
					            	for ($i=ceil($n); $i < 5; $i++) { 
					              		echo '<i class="fa fa-star-o gray"></i>';
					            	}
					          	}else{
					            	for ($i=$n; $i < 5; $i++) { 
					              		echo '<i class="fa fa-star-o gray"></i>';
					            	}
					          	}
				        	?>
				        	<a href="#" class="review_num">
				          		<?php echo $rowPro['ViewCount']; ?> Review(s)
				        	</a>
				      	</p>
				      	<!-- hiển thị số lượng tồn kho -->
				      	<p>Số lượng: <i style="color: red"><?php echo $rowPro['Quantity']; ?></i></p>
				      	<!-- Hiển thị tên hãng -->
				      	<p>Hãng: <i style="color: red"><?php echo $rowPro['Name']; ?></i></p>
				      	<p><?php echo $rowPro['Description']; ?></p>

				      	<div class="list_bottom">
				        	<div class="price">
					          	<span class="new_price"><?php echo number_format($rowPro['PromotionPrice']); ?><sup>đ</sup></span>
					          	<?php  
					            	if ($rowPro['Sale'] > 0) {
					          	?>
					              		<span class="old_price"><?php echo number_format($rowPro['Price']); ?><sup>đ</sup></span>
					          	<?php
					            	}
					          	?>
				        	</div>
				        	<div class="button_group" style="float: right;">
				          		<?php  
		                            if ($rowPro['Quantity'] > 0) {
		                        ?>
		                             	<button class="button add_cart" name="sm_cart" value="<?php echo $rowPro['ProductID']; ?>" quantity="<?php echo $rowPro['Quantity']; ?>">Thêm vào giỏ hàng</button>
		                        <?php
		                            }else{
		                        ?>
		                              	<button class="button" name="" disabled>Đã hết hàng</button>
		                        <?php
		                            }
		                        ?>
				        	</div>
				      	</div>
			    	</div>
			  	</li>
			</ul>
<?php
		}	
	}else{
		echo "<h4 class='empty'>Không có sản phẩm nào trong cửa hàng!</h4>";
	}
?>
