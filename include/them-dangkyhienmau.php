<?php 

session_start();
include 'function.php';
include '../ketnoi.php';

  include"../class.smtp.php";
    include "../class.phpmailer.php";

//query 1 them 1 nguoi vao bang nguoihienmau

    	$MSNHM= nextMSNHM(lastMSNHM());
	$rGIOITINH=isset($_POST['rGIOITINH'])?$_POST['rGIOITINH']:'';
	$EMAIL= $_POST['tEMAIL'];//email nguoi nhan
	$SODT=$_POST['tSODT'];
	$CCCD=$_POST['tCCCD'];
	$HOTEN=$_POST['tHOTEN'];
	$NGAYSINH=$_POST['tNGAYSINH'];

   $nFrom = "ỨNG DỤNG QUẢN LÝ ĐĂNG KÝ HIẾN MÁU NHÂN ĐẠO !!!";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'dh51500086@student.stu.edu.vn';  //dia chi email cua ban 
    $mPass = '03101997a';       //mat khau email cua ban
    $nTo = 'lala'; //Ten nguoi nhan
     
    $mail             = new PHPMailer();
    $body             = 'CẢM ƠN BẠN ĐÃ ĐÓNG GÓP VÀO TÚI MÁU NHÂN ĐẠO CỦA CHÚNG TÔI.
    Thông tin tài khoảng của bạn là: tên đăng nhập = số điện thoại bạn đăng ký hiến máu { ';
     $pat=' } ; Mật khẩu đăng nhập = 123. Khiến nghị nên đổi lại mật khẩu sau lần đầu đăng nhập!. Lưu ý: Bạn hãy đến hiến máu nhanh nhất trong ngày hôm nay.';   // Noi dung email

    $title = 'HƯỚNG DẪN ĐĂNG NHẬP VÀO ỨNG DỤNG ';   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('https://bthh.org.vn/', 'bthh.org.vn'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body.$SODT.$pat);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($EMAIL, $nTo);
    // thuc thi lenh gui mail 
   

		$query="INSERT INTO `nguoihienmau` (`MSNHM`, `CCCD`, `id_CBYT`, `HOTEN`, `NGAYSINH`, 
			`DIACHI`, `GIOITINH`, `NGHENGHIEP`, `EMAIL`, `SODT`, `password`,`trangthai`, `loaimau`, `benhnen`) 
			VALUES ('$MSNHM', '$CCCD', NULL, '$HOTEN', '$NGAYSINH', 
			'{$_POST['tDIACHI']}', '$rGIOITINH', '{$_POST['tNGHENGIEP']}', '$EMAIL', '$SODT', '123','1',NULL,NULL);";
//$query2 them nguoi tren vao bang hosohienmau
	$ngaydkONLINE=date('Y-m-d');

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




		$query2= " INSERT INTO hosohienmau( LoaiMau, thetichmauML, ngaydkONLM, tungHM, id_NHM, cacbenh, benhkhac, sotret12, vacxin12, vacxincuthe12, truyenmau, sutcan6, noihach6, chuarang6, xamhinh6, xamhinhcuthe6, matuy6, qhHIV6, qhcunggioi6, tiemtietnieu1, tiemtietnieukhac1, vacxin1, loaivacxin1, luuhanh, cum7, dungthuoc7, tiemvacxin7, loaivacxin7, phunu1, phunu2, xntbHIV, cannangKG, HAmmHg, mach, HA1mmHg, mach1, giodo1, giodo2, mach2, HA2mmHg, ggl, viemB, xutri, lydohoan, phanung, KETLUAN, nhietdoC) VALUES (NULL,NULL,'$ngaydkONLINE','$tungHM','$MSNHM','$cacbenh','$benhkhac','$sotret12','$vacxin12','$vacxincuthe12','$truyenmau','$sutcan6','$noihach6','$chuarang6','$xamhinh6','$xamhinhcuthe6','$matuy6','$qhHIV6','$qhcunggioi6','$tiemtietnieu1','$tiemtietnieukhac1','$vacxin1','$loaivacxin1','$luuhanh','$cum7','$dungthuoc7','$tiemvacxin7','$loaivacxin7','$phunu1','$phunu2','$xntbHIV',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";


	//cac ham if kiem tra
	$partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
	$subject = "phancuong.qt@gmail.com";
	$now = (date('Y') - date('Y',strtotime($NGAYSINH)));
	if (!preg_match($partten ,$EMAIL, $matchs)|| !preg_match ("/^[a-zA-z]*\s/", $HOTEN) || (strlen($SODT)<10 && strlen($SODT)>10 ) || (strlen($CCCD)<11 && strlen($CCCD)>11)|| !preg_match ("/^[0-9]*$/", $SODT) || !preg_match ("/^[0-9]*$/", $CCCD)||$now<18  )
	{
			
	
				if(!preg_match($partten ,$EMAIL, $matchs))
				{
				?>
					<script>
					alert('Mail bạn vừa nhập không đúng định dạng vd:phong123@gmail.com');
					
					window.history.go(-1);
					
					</script>
					<?php
			  		exit;
				}
				if (!preg_match ("/^[a-zA-z]*\s/", $HOTEN) ) 
				{  
			    ?>
					<script>
					alert('Họ và tên: Bạn chỉ được nhập chữ cái và khoảng trắng.');
					window.history.go(-1);
					</script>
					<?php   
					exit;
				}
				if (strlen($SODT)<10 && strlen($SODT)>10 ) 
				{
				?>
					<script>
					alert('Số điện thoại phải có 10 chữ số.');
					window.history.go(-1);
					</script>
					<?php
					exit;

				}
				if (strlen($CCCD)<11 && strlen($CCCD)>11 ) 
				{
				?>
					<script>
					alert('CCCD phải có 11 chữ số.');
					window.history.go(-1);
					</script>
					<?php
					exit;

				}
				if (!preg_match ("/^[0-9]*$/", $SODT) )
				{  
			  
			    ?>
					<script>
					alert('Số điện thoại không hợp lệ. Chỉ được nhập số [0-9]');
					window.history.go(-1);
					</script>
					<?php
					exit;
				}
				if (!preg_match ("/^[0-9]*$/", $CCCD) )
				{  
			  
			    ?>
					<script>
					alert('CCCD không hợp lệ. Chỉ được nhập số [0-9]');
					window.history.go(-1);
					</script>
					<?php
					exit;
				}
				if ($now<18) 
				{
					?>
					<script>
					alert('Xin lỗi nhưng bạn không đủ 18 tuổi.');
					window.history.go(-1);
					</script>
					<?php
					exit;
				}
				
	}
	elseif (mysql_query($query)) 
	{	
	  	 if(!$mail->Send()) {
	        echo 'gữi mail Co lỗi!';
	         
	    } else {
	    	if (mysql_query($query2)) {
	         
	        ?>
			<script>
			alert('Đăng ký hiến máu thành công ! Hãy kiểm tra thư trong Email của bạn lấy hướng dẫn đăng nhập !!!');
			window.history.go(-2);	
			</script>
			<?php
		exit;
	    }
	}
}
   


?>
