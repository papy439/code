<?php 
session_start();
if (isset($_POST['btn-save-tttkcn'])) {


include "../ketnoi.php";
//$MSNHM= nextMSNHM(lastMSNHM());
$SDT= $_SESSION['username'];
//$user= $_GET['SODT'];
$CCCD= addslashes($_POST['tCCCD']);
$HOTEN= addslashes($_POST['tHOTEN']);
$NGAYSINH=addslashes($_POST['tNGAYSINH']);
$DIACHI=addslashes($_POST['tDIACHI']);
$GIOITINH=addslashes(isset($_POST['rGIOITINH'])?$_POST['rGIOITINH']:'');
$NGHENGHIEP=addslashes($_POST['tNGHENGHIEP']);
$EMAIL=addslashes($_POST['tEMAIL']);

$query=" UPDATE nguoihienmau set CCCD= '$CCCD',HOTEN='$HOTEN',NGAYSINH='$NGAYSINH',DIACHI='$DIACHI',GIOITINH='$GIOITINH',NGHENGHIEP='$NGHENGHIEP',EMAIL='$EMAIL' where SODT='$SDT' ";
if (mysql_query($query)) {
	$_SESSION['username']=$SDT;
	$_SESSION['CCCD']=$CCCD;
	$_SESSION['NGHENGHIEP'] = $NGHENGHIEP;
	$_SESSION['EMAIL'] = $EMAIL;
	$_SESSION['DIACHI'] = $DIACHI;
	$_SESSION['GIOITINH'] = $GIOITINH;
	$_SESSION['HOTEN'] = $HOTEN;
	
	?>
		<script>
		alert('Cập nhật thành công !!!');		
		window.history.go(-1);
		</script>
		<?php
}
	else {
		if (empty($GIOITINH)) {
		?>
		<script>
		alert('Cập nhật không thành công !!!');	
		window.history.go(-1);
		</script>
		<?php
	}
}
}
?>
