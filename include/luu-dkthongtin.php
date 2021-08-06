<?php 
session_start();
if (isset($_POST['btn-save-tttk'])) {
	include"../ketnoi.php";

$CCCD=$_POST['tCCCD'];
$HOTEN=$_POST['tHOTEN'];
$NGAYSINH=$_POST['tNGAYSINH'];

$DIACHI=$_POST['tDIACHI'];
$GIOITINH=$_POST['rGIOITINH'];
$NGHENGHIEP=$_POST['tNGHENGHIEP'];
$EMAIL=$_POST['tEMAIL'];
$SODT=$_POST['tSODT'];
$MSNHM='HM000'.cái gì đó cộng thêm 1;





$query= "INSERT INTO nguoihienmau(MSNHM, CCCD, id_CBYT, HOTEN, NGAYSINH, DIACHI, GIOITINH, NGHENGHIEP, EMAIL, SODT, password) VALUES ('$MSNHM','$CCCD',NULL,'$HOTEN','$NGAYSINH','$DIACHI','$GIOITINH','$NGHENGHIEP','$EMAIL','$SODT','123)";

if (mysql_query($query)) {
	echo "them ok";
}
	else {
		echo "no ok";
	}
	
}
?>