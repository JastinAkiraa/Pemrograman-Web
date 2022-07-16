<?php
session_start();
if(!isset($_SESSION['login'])){
	header('Location:index.php');
}
include "../inc/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Administrator</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
<table width="100%">
	<tr>
		<td colspan="2" bgcolor="#00f260"><h1>Dashboard Admin</h1></td>
	</tr>
	<tr>
		<td valign="top" width="250px" bgcolor="#00f260">
			<div class="menu">
				<ul>
					<li><a href="./dashboard.php">Home</a></li>
					<li><a href="./dashboard.php?m=kategori">Manajemen Kategori</a></li>
					<li><a href="./dashboard.php?m=berita">Manajemen Berita</a></li>
					<li><a href="./dashboard.php?m=komentar">Manajemen Komentar</a></li>
					<li><a href="./dashboard.php?m=halaman">Manajemen Halaman</a></li>
					<li><a href="./logout.php">Logout</a></li>
				</ul>
			</div>
		</td>
		<td valign="top">
			<div class="content">
				<?php include "content.php"; ?>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#00f260" align="center">Copyright &copy; 2022</td>
	</tr>
</table>

<script>
	CKEDITOR.replace('editor1',{
		filebrowserImageBrowseUrl: '../assets/kcfinder'
	});
</script>
</body>
</html>