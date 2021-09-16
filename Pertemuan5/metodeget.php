<!DOCTYPE html>
<html>
<body>
	<form method="GET" action="">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

</<?php 

if ($_GET) {
	echo "Nama : ". $_GET['nama'];
	echo "<br>";
	echo "Email : ". $_GET['email'];
}
?>