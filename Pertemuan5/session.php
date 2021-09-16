<?
session_start();

if (!isset($SESSION["count"])) {
	$_SESSION["count"]=0;
}
else
{
	$_SESSION["count"]++;
}
if ($_SESSION)["count"] ==) {
		echo "Anda baru mengunjungi halaman ini";
}
else 
{
	echo "Anda sudah mengunjungi sebanyak ";
	echo $_SESSION["count"];
}
?>