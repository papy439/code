<?php
	$cccd="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$cccd=kiemTra_input($_POST['CCCD']);
	}
	function kiemTra_input($data){
		$data=trim($data);
		$data = stripslashes($data);
    	$data = htmlspecialchars($data);
		return $data;
	}

?>