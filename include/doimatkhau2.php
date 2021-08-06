<?php 
session_start();
include 'function.php';
include '../ketnoi.php';

$SDT= $_SESSION['username'];
$pwd=$_POST['pwd'];
$newpwd=$_POST['newpwd'];
$renewpwd=$_POST['renewpwd'];

if ($newpwd != $renewpwd)
{
	?>
	<script>
		alert('Mật Khẩu nhập lại không đúng !!!');
		window.history.go(-1);
	</script>
	<?php 
	exit;
}

//
if (ktrapwd($SDT, $pwd)==false)
{
	?>
	<script>
		alert('Mật khẩu cũ không trùng khớp !!!');
		window.history.go(-1);
	</script>
	<?php 
	exit;
}

include '../ketnoi.php';
$query ="update nguoihienmau set password='$newpwd' where sodt='$SDT' ";
	//echo $query; exit;
$result =mysql_query($query);
?>
	<script>
		alert('Đã đổi mật khẩu thành công !!!');
		window.history.go(-2);
	</script>
	<?php 
	exit;

/*
lay thong tin
1. kiem tra mkhau cu dung khong? -> sai -> khong doi va stop
2. ktra mkau moi va mk moi nhap lai bang nhau. Neu sai -> stop


*/
