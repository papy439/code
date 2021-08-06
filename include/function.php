<?php 

function nextMSNHM($currentMSNHM='')
{
	if ($currentMSNHM=='')
		return 'HM-0000001';//nguoi dau tien
	$a= explode('-', $currentMSNHM);
	//echo $a[1]; echo '==='.$a[1]*1 .'==='; 
	return 'HM-'.    substr('000000' .($a[1]*1 +1), -7);
}

function lastMSNHM()
{
	include '../ketnoi.php';
	$query ="select MSNHM from nguoihienmau order by MSNHM desc limit 0, 1";
	$result =mysql_query($query);
	$row = mysql_fetch_assoc($result);
	return $row['MSNHM'];

}
function lastngaylm($id_NHM){
 include '../ketnoi.php';
	$query ="select ngaydkONLM from hosohienmau join nguoihienmau on hosohienmau.id_NHM=nguoihienmau.MSNHM where id_NHM='$id_NHM' order by ngaydkONLM desc limit 0, 1";
	$result =mysql_query($query);
	$row = mysql_fetch_assoc($result);
	return $row['ngaydkONLM'];
}

function ktrapwd($sdt, $pwd)
{
	include '../ketnoi.php';
	$query ="select *  from nguoihienmau where sodt='$sdt' and password='$pwd' ";
	//echo $query; exit;
	$result =mysql_query($query);
	if (mysql_num_rows($result)==0) return false;
	return true;
}
