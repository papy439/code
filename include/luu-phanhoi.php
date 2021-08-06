<?php 
session_start();
if (isset($_POST['btn-xacnhan'])) {
	include"../ketnoi.php";
	include"function.php";
$NOIDUNG=$_POST['tNOIDUNG'];
$NGAYPH=date('Y-m-d');
$id_NHM=$_SESSION['MSNHM'];

$query="INSERT INTO thongtinphanhoi(id_NHM,id_CBYT,NOIDUNG,YKIEN,NGAYPH) VALUES ('$id_NHM', NULL,'$NOIDUNG',NULL,'$NGAYPH')";
if ($NOIDUNG==NULL) {
	
		?>
		<script>
		alert('Thêm phản hồi thất bại, không được để  trống');
		window.history.go(-1);
		</script>
		<?php
	
}
elseif (mysql_query($query)) {
	?>

		<script>
		alert('Thêm phản hồi thành công !!!');
		window.history.go(-1);
		
		</script>
		<?php
}
	
}
?>