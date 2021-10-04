	<?php
$blog = new User_c();
$rs = $blog->about();
if (isset($_GET['status'])) {
	$status = $_GET['status'];
} else {
	$status = 1;
}

foreach ($rs as $key => $value) {
	if ($status == $value['Status']) {

		?>
			<div class="container_fullwidth" style="font-family: Times;">
				<div class="container">
					<h3><?php echo $value['Meta Title']; ?></h3>	
				<hr>
				<br>
				<h4> <span><?php echo $value['Title']; ?></span></h4>
			</br>
			<div class="text-center"><img style="width: 80%; height: 80%;" src="public/images/blog/<?php echo $value['Image']; ?>" alt=""></div>


			<p style="font-size: 20px;line-height: 30px; ">
				<?php echo $value['Detail']; ?>
			</p>

		</div>
		<?php
}
}
?>
</div>
