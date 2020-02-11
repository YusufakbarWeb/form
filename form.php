
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="marquee">
	<marquee>Selamat Datang DiForm Saya</marquee>
	</div>
<link rel="stylesheet" type="text/css" href="style.css">
	
<div class="container">
<form action="submit.php" method="POST" name="form1">

	<div class="user">
	<div class="top">
	<label>Nama</label>
<br>
	<input type="text" name="nama" required>
</br>
<br>
	<label>Email</label>
<br>
	<input type="text" name="email" required>
</br>
	</div>
	<div class="gender">
<br>
	<label for="gender">Gender</label>
	<br>
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
</br>
</br>
	</div>
	<div class="city">
	<label for="city">City</label>
	<br>
	<select name="city">
	<option value="Solo">Solo</option>
	<option value="Karanganyar">Karanganyar</option>
	<option value="Sukoharjo">Sukoharjo</option>
	<option value="Sragen">Sragen</option>
	<option value="Wonogiri">Wonogiri</option>
	</select>
</br>
	</div>
<br>
	<div class="status">
	<label for="status">Status</label>
</br>
<br>
	<input type="checkbox" name="status" value="pelajar">Pelajar
</br>
<br>
	<input type="checkbox" name="status" value="kerja">Kerja
</br>
<br>
	<input type="checkbox" name="status" value="menikah">Menikah
</br>
	</div>
<br>
	<div class="submit">
	<input type="submit" name="Submit">
	</div>
</br>
	
	</div>
	</form>
	</div>
</body>
</html>

	



