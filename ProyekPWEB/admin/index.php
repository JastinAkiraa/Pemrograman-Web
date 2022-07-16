<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="loginbox">
	<div class="login_msg">
		<?php
		include "../inc/config.php";
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$pass=md5($_POST['password']);
			$sqlCek = mysqli_query($konek,"SELECT * FROM user 
							WHERE username='$_POST[username]' AND password='$pass' AND aktif='Y'");
			$jml=mysqli_num_rows($sqlCek);
			$d=mysqli_fetch_array($sqlCek);
			
			if($jml > 0){
				session_start();
				$_SESSION['login']		= TRUE;
				$_SESSION['id']			= $d['id'];
				$_SESSION['username']	= $d['username'];
				$_SESSION['nama']		= $d['nama_lengkap'];
				$_SESSION['upload_gambar']		= TRUE;
				
				header('Location:dashboard.php');
			}else{
				echo "<center>Username dan Password anda salah!!!</center>";
			}
		}
		?>
	</div>
	<div class="container">
			<h1>Login Dashboard Admin</h1>
			<form method="POST" name="login">
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" id="password" placeholder="Password" required>
				<a href="#" class="p-link">Forget password?</a>
				<input class="btn" type="submit" name="login" value="Login">
					<div class="signup-link">
					</div>
			</form>
		</div>
</div>
</body>
</html>