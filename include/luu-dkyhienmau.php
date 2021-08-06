<?php 
session_start();

	include"../ketnoi.php";
	include 'function.php';
	if (isset($_POST['btn-save-dk'])) {


	$id_NHM=$_SESSION['MSNHM'];
$ngaydkONLINE= date('Y-m-d');
//date_modify($ngaydkONLINE,"+30 days");
$ngayLMcu= date_create( lastngaylm($id_NHM));
//$ngayLMcu=mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
$ngayLMcu=date_modify($ngayLMcu,"+30 days");
$ngayLMcu=date_format($ngayLMcu,'Y-m-d');
//$now = (date('m',strtotime($ngaydkONLINE)) - date('m',strtotime($ngayLMcu)));

//$dateok= $ngaydkONLINE-$ngayLMcu;


$tungHM=isset($_POST['rtungHM'])?$_POST['rtungHM']:'';
$cacbenh=isset($_POST['rcacbenh'])?$_POST['rcacbenh']:'';

$benhkhac=$_POST['tbenhkhac'];

$sotret12= isset($_POST['rsotret12'])?$_POST['rsotret12']:'';
$vacxin12=isset($_POST['rvacxin12'])?$_POST['rvacxin12']:'';

$vacxincuthe12=$_POST['tvacxincuthe12'];

$truyenmau=isset($_POST['rtruyenmau'])?$_POST['rtruyenmau']:'';
$sutcan6= isset($_POST['rsutcan6'])?$_POST['rsutcan6']:'';
$noihach6= isset($_POST['rnoihach6'])?$_POST['rnoihach6']:'';
$chuarang6= isset($_POST['rchuarang6'])?$_POST['rchuarang6']:'';
$xamhinh6=isset($_POST['rxamhinh6'])?$_POST['rxamhinh6']:'';

$xamhinhcuthe6=$_POST['txamhinhcuthe6'];

$matuy6=isset($_POST['rmatuy6'])?$_POST['rmatuy6']:'';
$qhHIV6=isset($_POST['rqhHIV6'])?$_POST['rqhHIV6']:'';
$qhcunggioi6=isset($_POST['rqhcunggioi6'])?$_POST['rqhcunggioi6']:'';
$tiemtietnieu1=isset($_POST['rtiemtietnieu1'])?$_POST['rtiemtietnieu1']:'';

$tiemtietnieukhac1=$_POST['ttiemtietnieukhac1'];

$vacxin1=isset($_POST['rvacxin1'])?$_POST['rvacxin1']:'';

$loaivacxin1=$_POST['tloaivacxin1'];

$luuhanh=isset($_POST['rluuhanh'])?$_POST['rluuhanh']:'';
$cum7=isset($_POST['rcum7'])?$_POST['rcum7']:'';
$dungthuoc7=isset($_POST['rdungthuoc7'])?$_POST['rdungthuoc7']:'';
$tiemvacxin7=isset($_POST['rtiemvacxin7'])?$_POST['rtiemvacxin7']:'';

$loaivacxin7=$_POST['tloaivacxin7'];

$phunu1=isset($_POST['rphunu1'])?$_POST['rphunu1']:'';
$phunu2=isset($_POST['rphunu2'])?$_POST['rphunu2']:'';
$xntbHIV=isset($_POST['rxntbHIV'])?$_POST['rxntbHIV']:'';




$query= " INSERT INTO hosohienmau( LoaiMau, thetichmauML, ngaydkONLM, tungHM, id_NHM, cacbenh, benhkhac, sotret12, vacxin12, vacxincuthe12, truyenmau, sutcan6, noihach6, chuarang6, xamhinh6, xamhinhcuthe6, matuy6, qhHIV6, qhcunggioi6, tiemtietnieu1, tiemtietnieukhac1, vacxin1, loaivacxin1, luuhanh, cum7, dungthuoc7, tiemvacxin7, loaivacxin7, phunu1, phunu2, xntbHIV, cannangKG, HAmmHg, mach, HA1mmHg, mach1, giodo1, giodo2, mach2, HA2mmHg, ggl, viemB, xutri, lydohoan, phanung, KETLUAN, nhietdoC) VALUES (NULL,NULL,'$ngaydkONLINE','$tungHM','$id_NHM','$cacbenh','$benhkhac','$sotret12','$vacxin12','$vacxincuthe12','$truyenmau','$sutcan6','$noihach6','$chuarang6','$xamhinh6','$xamhinhcuthe6','$matuy6','$qhHIV6','$qhcunggioi6','$tiemtietnieu1','$tiemtietnieukhac1','$vacxin1','$loaivacxin1','$luuhanh','$cum7','$dungthuoc7','$tiemvacxin7','$loaivacxin7','$phunu1','$phunu2','$xntbHIV',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

	
	if (strtotime($ngaydkONLINE)<=strtotime($ngayLMcu)) {
	?>
		<script>
		alert('Bạn chỉ được đăng ký hiến máu khi qua 30 ngày từ lần cuối !!');
		window.history.go(-1);
		</script>
		<?php
		exit;
	}

	elseif (mysql_query($query)){
		?>
		<script>
		alert('Đăng Ký Thành Công !');
		window.history.go(-2);
		</script>
		<?php
		
		
	}
	
}
?>