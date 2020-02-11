<!DOCTYPE html>
<html>
<head>
	<title>simpan</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$status = $_POST['status'];

include "koneksi.php";
mysql_query("insert into pkl(nama,email,gender,city,status) values ('$nama','$email','$gender','$city','$status')") or die ("menyimpan gagal");
?>

<a href="form.php">kembali</a>
</body>
</html>






