<form method="POST" enctype="multipart/form_data">
	<input type="file" name="upload"></input>
	<input type="submit" value="Kirim" name="submit"></input>

</form>

<?php
error_reporting(0);
if ($_FILES["upload"]["error"] > 0) 
{
	echo "Error :" . $_FILES["upload"]["error"]. "</br>"
}
else 
{
	echo "Upload : " .$_FILES["upload"]["name"]. "<br/>";
	echo "Tipe : " .$_FILES["upload"]["type"]. "</br>";
	echo "Besar : " . ($_FILES["upload"]["size"] / 1024) .
	" Kb<br/>";
	echo "Disimpan di : " . $_FILES["upload"]["tmp_name"];

		if file_exists("fileupload/" . $_FILES["upload"]["name"]))
	{
		echo $_FILES["upload"]["name"]." already exists. ";
	}
	else 
	{
		move_uploaded_file($_FILES["upload"]["tmp_name"], "fileupload/" . $_FILES["upload"]["name"]);
		echo "Stored in" . "fileupload/" . $_FILES["upload"]["name"];
	}
}