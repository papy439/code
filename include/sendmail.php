<?php

session_start();
    //goi thu vien

    include"../class.smtp.php";
    include "../class.phpmailer.php"; 
    include "../ketnoi.php";
  $SDT= $_POST['txtsdt'];
    $mTo = $_POST['txtemail'];   //dia chi nhan mail

     $query=mysql_query( "SELECT * FROM nguoihienmau WHERE SODT='$SDT' ");
    while ($row = mysql_fetch_array($query)) {

  
     //$pass=$_POST['password'];
    //$pass=$_SESSION['password'];
        
    $nFrom = "ỨNG DỤNG QUẢN LÝ HIẾN MÁU NHÂN ĐẠO";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'dh51500086@student.stu.edu.vn';  //dia chi email cua ban 
    $mPass = '03101997a';       //mat khau email cua ban
    $nTo = 'lala'; //Ten nguoi nhan
  
    $mail             = new PHPMailer();
    $body             = 'CẢM ƠN BẠN ĐÃ ĐÓNG GÓP VÀO TÚI MÁU NHÂN ĐẠO CỦA CHÚNG TÔI.
    Xin chào bạn:';
    $ten=$row['HOTEN'];
    $tt=' . Với số điện thoại = ';
   // $rsodt='số điện thoại bạn đăng ký hiến máu ';
    $noip=' . Mật khẩu đăng nhập đã lấy lại = ';
    $pass=$row['password'];
    $pat=' . Khiến nghị nên đổi lại mật khẩu sau lần đăng nhập này!';
       // Noi dung email
    $title = 'BẠN ĐÃ LẤY LẠI MẬT KHẨU THÀNH CÔNG';   //Tieu de gui mail
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
    $mail->MsgHTML($body.$ten.$tt.$SDT.$noip.$pass.$pat);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    // thuc thi lenh gui mail 

    $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
   
    if(!preg_match($partten ,$mTo, $matchs)){
    ?>
        <script>
        alert('Mail bạn vừa nhập không đúng định dạng vd:phong123@gmail.com');
        
        window.history.go(-1);
        
        </script>
        <?php
  
    }
 elseif(!$mail->Send()) {
        echo 'Co loi!';
         
    } else {
         
        ?>
        <script>
        alert('Mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả.');
        window.history.go(-2);  
        </script>
        <?php
    }
    
    
}

?>