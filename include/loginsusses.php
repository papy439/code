<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
  <title>Đăng ký hiến máu của Bệnh viện truyền máu huyết học</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/a.PNG" >

</head>
<body>

	
	<div style="height: 150px;width: auto;background-image:url('../img/background.jpg');">
		<a href="../index.php"><img src="../img/a.PNG" style="padding-top:15px;padding-left: 60px" alt="Home.vn"></a>
		<ul style="padding-right: 50px;float: right;padding-top: 50px;font-size: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="516 516">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>   08 38397535</ul>
<ul style="padding-right: 650px;float: right;padding-top: 10px;font-size: 20px; font-size: 30px;color: #0000FF;font-family:  Palatino Linotype;">BỆNH VIỆN <br>TRUYỀN MÁU HUYẾT HỌC</ul>
	</div>
	<div style="height: 70px;width: auto;font-size: 20px;font-family: Palatino Linotype;background-color: #00008B;padding-top: 10px;">
		<ul style="height: 50px;">
		<a href="../index.php" class="bi-house-door-fill" style="color: white;padding-left: 30px">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
		</svg>
					Trang chủ</a>
		<a href="../ginho.php" class=" doimau" style="padding-left: 30px;color: white;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-exclamation-fill" viewBox="0 0 16 16">
		  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</svg>
					Điều cần ghi nhớ</a>
		<a href="../thucamon.php"class=" doimau"style="padding-left: 30px;color: white;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
		  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
		</svg>
				Thư cảm ơn</a>
		<a href="../loiich.php" class=" disabled doimau" tabindex="-1" style="padding-left: 30px;color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
		  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
		</svg>Lợi ích của việc hiến máu</a>


		<a href="doittcanhan.php" style="float: right;color: white;padding-right: 20px;padding-left: 10px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
		  		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		  		<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg>
			</a>

			
		<a href="logout.php"  style="float: right;color: white;padding-right: 10px"><button type="button" class="btn btn-danger">Đăng xuất
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
			  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
			</svg>
		</button>
				
		</a>
		<a href="doimatkhau.php"  style="float: right;color: white;padding-right: 10px"><button type="button" class="btn btn-success">Đổi mật khẩu
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
		  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
		</svg>
			
		</button>
				
		</a>
		<a href="dangkyhienmau.php"  style="float: right;color: white;padding-right: 10px"><button type="button" class="btn btn-success">Đăng ký hiến máu
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
			  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
			  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
			</svg>
		</button>
				
		</a>
		<a href="phanhoi.php"  style="float: right;color: white;padding-right: 10px"><button type="button" class="btn btn-success">Phản Hồi
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
			  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
			</svg>		
		</button>			
		</a>	
	</ul>
	</div>
	<div style="height: 800px;width: 100%;padding-top: 30px;text-align: center; background-color:rgba(0, 155, 255, 0.1);">
		
		<div class="alert" style="background-color: #6495ED">
		    <strong>Xin chào!</strong> Nếu là đăng nhập lần đầu, khiến nghị đổi ngay mật khẩu vì lý do bảo mật
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		    </button>
		</div>
		<div style="font-weight: bold;font-family: Palatino Linotype;color: red;font-size: 40px;font-style: italic;"> <?php
						if (!isset($_SESSION['username'])) {
							header('location:login.php');
						}
						else{
							
						  		 echo "Chào mừng bạn " . $_SESSION['HOTEN'];				
						}
						?></div>
	<table border="1" style="height: 50px;width: 1000px;margin-left: 200px;margin-right: 100px;margin-top: 20px;">
		<tr style="font-weight: bold;color: red;font-family: Palatino Linotype;font-size: 20px;">
			<td>STT</td>
			<td>Ngày hiến máu</td>
			<td>Loại máu</td>
			
			<td>Số lượng máu lấy</td>
			<td>Xử trí</td>
			<td>Lý do hoãn</td>
			<td>Kết luận</td>
		</tr>
		<?php 
		include "../ketnoi.php";
		$user=$_SESSION['username'];
		$query= mysql_query("SELECT  * from nguoihienmau  join  hosohienmau on nguoihienmau.MSNHM=hosohienmau.id_NHM where SODT='$user'");
		$i=0;
		while ($row = mysql_fetch_array($query)) {
			$i++;
		?>
		<tr>
			<td><?php  
				echo $i;
			   ?></td>
			<td><?php echo $row['ngaydkONLM']; ?></td>
			<td><?php echo $row['LoaiMau']; ?></td>
			<td><?php  
			if ($row['thetichmauML']!=NULL) {
				echo $row['thetichmauML'] . " - ML";
			}else
				echo "0 - ML"; ?>
			
			</td>
			<td><?php if ($row['xutri']!=NULL) {
							echo $row['xutri'];
						}
						else 
				echo "Không"; 
				 ?></td>
			<td><?php if ($row['lydohoan']!=NULL) {
							echo $row['lydohoan'];
						}
						else 
				echo "Không"; 
				 ?></td>
			<td><?php if (!isset($row['KETLUAN'])) {
				echo "Chờ duyệt";
						}
			else{
				if($row['KETLUAN']==0) echo "Không được hiến máu !" ;
						else echo "Đã hiến máu !";
			}
			?></td>


		</tr>
		<?php  } ?>
</table>
	</div>
</body>
	<footer>
		<div style="width: 100%;background-image: url('../img/background.jpg');height: 200px;padding-top: 0px;">
			
			<ul style="float: left;height: auto;width: 30%;padding-left: 100px;padding-top: 20px;color: white;"><a href="https://bthh.org.vn/"><p style="color: blue">Về bthh.org.vn</p> </a><br>
<p style="color: red;">Trụ sở chính (Ngân hàng máu - Ngân hàng tế bào gốc):</p><br>
Địa chỉ Trụ sở chính tại 118 Hồng Bàng, Q.5, Tp. Hồ Chí Minh.
Điện thoại: 028.39571342 - Fax: 38552978
Website: <a href="https://bthh.org.vn/">http://bthh.org.vn</a>
Giấy phép: 23543/GP</ul>
	<ul style="float: left;height: auto;width: 20%;padding-left: 100px;padding-top: 20px;color: white;">
		<p style="color: blue">Từ khóa</p> <br>
		<a href="https://benhvien.org.vn/benh-vien/benh-vien-truyen-mau-huyet-hoc-tphcm/#">Bệnh viện chợ rẫy, Hoàn Mỹ, Phòng khám Victoria, Bệnh viện đa khoa, Bệnh viện FV, Phòng khám nhi Q1,</a>
</ul>
<ul style="height: auto;width: 20%;float: left;padding-top: 20px">
	<p style="color: red;">Chi nhánh (Khám chữa bệnh):</p><br>
	
		Địa chỉ: 201 Phạm Viết Chánh, P. Nguyễn Cư Trinh, Q.1, Tp. Hồ Chí Minh
		Điện thoại: 028.38397535 - Fax: 38256826
		Website: http://bthh.org.vn
		Giấy phép: 23543/GP
</ul>
	<ul style="height: auto;width: 23%;float: left;padding-top: 70px;">
		<a href="https://www.facebook.com/groups/1051356931604711/"><img src="../img/045-facebook.png" alt="" style="height: 50px;width: 70px; border-radius: 20px;"></a>
		<a href="https://www.youtube.com/channel/UC2KPM0F8QohHwI05FQBZ8UQ"><img src="../img/002-youtube.png"  style="height: 50px;width: 70px;border-radius: 20px;"></a>
		<a href="https://benhvien.org.vn/benh-vien/benh-vien-truyen-mau-huyet-hoc-tphcm/#"><img src="../img/013-twitter-1.png" alt="" style="height: 50px;width: 70px;border-radius: 20px;"></a>
		<a href="https://www.google.com/+BenhvienOrgVn45"><img src="../img/035-google-plus.png" alt="" style="height: 50px;width: 70px;border-radius: 20px;"></a>
	</ul>
		</div>
	</footer>
</html>
