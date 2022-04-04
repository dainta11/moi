<div class="header">
	<div class="logo">
		<a href="index.php">
			<img src="images/logo.png" height="100px">
		</a>
	</div>
	<div class="timkiem">
		<p>
			<form action="index.php?quanly=timkiem" method="POST">
				<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
				<input type="submit" name="timkiem" value="Tìm kiếm">
			</form>
		</p>
	</div>
	<div class="khach" style="float: left; color: white; margin: 50px; font-size: 20px;">
		<?php
			if(isset($_SESSION['dangky'])){
			echo 'Xin chào: '.$_SESSION['dangky'].'</span>'; 
			} 
		?>
	</div>
</div>