$(document).ready(function () {
	$(document).on('click','.add_cart', function (e) {
		e.preventDefault();
		var proID = $(this).val();
		if ( $('#qty').val() == undefined ) {
			var qty = Number(1);		// ép kiểu cho qty
		}else {
			var qty = Number($('#qty').val());
		}
		var proQuantity = Number($(this).attr('quantity'));		// Ép kiểu

		if (qty > 0) {
			if (proQuantity > 0) {
				if (qty <= 20) {
					if (qty <= proQuantity) {
						$.post('server/user/add_cart.php', {proID : proID, qty : qty, proQuantity : proQuantity}, function (data) {
							$("#header_cart").load(" #dropdown_header_cart");
							$("#show").fadeIn();
							$("#show").html(data);
							$("#show").delay(5000).slideUp();
						});
					}else{
						alert('Hàng tồn kho không đủ!');
					}
				}else{
					alert('Đặt tối đa 20 sản phẩm!');
				}
			}else{
				alert('Cửa hàng đã hết sản phẩm này!');
			}
		}else{
			alert('Đặt hàng thất bại!');
		}

		
	});

	$(document).on('click', '.remove_cart', function (e) {
		e.preventDefault();
		var action = confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');
		if (action == true) {
			var proID = $(this).attr("id");		
			$.post('server/user/del_cart.php', {proID:proID}, function (data) {
				$("#table-cart").load(" #table-cart-data");
				$("#header_cart").load(" #dropdown_header_cart");
				$("#show").fadeIn();
				$("#show").html(data);
				$("#show").fadeOut(2000);
				// $("#slide").animate({width:'toggle'},350);
				// $("#show").fadeOut(5000);
			});
		}
	});

	/* button up to top */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#upTop").fadeIn(200);
			$(".logo").css({"display":"none"});
		}else{
			$("#upTop").fadeOut(200);
			$(".logo").css({"display":"inherit"});
		}
	});

	$("#upTop").click(function (e) {
		e.preventDefault();
		$("html,body").animate({scrollTop:0}, 600);
	});

	// Phân trang
	$(document).on('click', '.paginate', function (e) {
		e.preventDefault();

	});
	
}); 
/*-------------------------------------Update cart-------------------------------------*/
function UpdateCart(proID, qty, proQuantity) {
	$.post('server/user/update_cart.php', {proID : proID, qty : qty}, function (data) {
		$("#table-cart").load(" #table-cart-data");
		$("#header_cart").load(" #dropdown_header_cart");
	});
}
/*----------------------------------------search----------------------------------------*/
function Search(cateID,page) {
	var selectOp = document.getElementById("selectOpSearch").value;
	var status 	 = document.getElementById("proSttSearch").value;
	var key 	 = document.getElementById("inputSearch").value;

	$.post('server/user/search_pro.php', {status:status, cateID:cateID, page:page, selectOp:selectOp, key:key}, function (data) {
		if (status != '0') {
			$("#status").html('<span style="font-weight:300; text-transform: uppercase"><i class="glyphicon glyphicon-menu-right"></i>'+status+'</span>');
		}else {
			$("#status").html('');
		}
		$("#showList").html(data);
		$("#selectPage").load(" #dataPage");
	});
}

/*----------------------------------------js đánh giá sao----------------------------------------*/
var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});