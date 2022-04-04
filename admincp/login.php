<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
		.wrapper-login {
		    width: 30%;
		    margin-top: 100px;
		    margin-left: 600px;
		}
		table.table-login {
		    width: 100%;
	</style>
</head>
<body>
<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
		<table class="table-login" style="text-align: center;border-collapse: collapse; background:#fff;">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" style="width: 90%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; " name="username"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" style="width: 90%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" name="password"></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" style="background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
