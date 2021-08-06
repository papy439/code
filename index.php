
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
  <title>BV TRUYỀN MÁU HUYẾT HỌC -ĐĂNG KÝ HIẾN MÁU</title>
  <meta content="benh-vien-truyen-mau-huyet-hoc-tphcm" name="description">
  <meta content="dang ky hien mau" name="keywords">
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" sizes="16x16" href="img/a.PNG" >
</head>
<body>
	<?php include "include/header.php" ?>
	<?php include "include/menu.php" ?>
	<div style="background-color:rgba(0, 155, 255, 0.1);">
	<ul style="height:700px;width: 100%;padding-top: 30px;text-align: center;">
		<?php
						if (!isset($_SESSION['username'])) {
							?>
		<a href="include/dangkyhienmaunhanh.php"><input type="button" name="btn-quick-dk"value="Đăng ký Hiến Máu nhanh" style="border-radius: 50px;height: 70px;width: 350px;font-weight: bolder;font-size: 20px;font-family: Book Antiqua "class="btn-danger"></a>
	<?php } ?>
		<br>
		

	<img class="card-img-top" src="img/5k.png" alt="Card image cap" style="width: 500px;height: 550px;float: left;margin-top: 50px;">
	<hr><p style="font-size: 20px;color: blue;padding-top: 50px;padding-left: 50px;">Để chủ động phòng, chống dịch COVID-19 trong trạng thái “bình thường mới”, Bộ Y tế mong muốn và kêu gọi mỗi người dân Việt Nam cùng nhau thực hiện Chung sống an toàn với đại dịch COVID-19. Bộ Y tế gửi đến Bạn “Thông điệp 5K: Khẩu trang – Khử khuẩn – Khoảng cách – Không tụ tập – Khai báo y tế” với các nội dung chính sau đây:
		<br></p>
	
		<hr>
 	<p>KHẨU TRANG: Đeo khẩu trang vải thường xuyên tại nơi công cộng, nơi tập trung đông người; đeo khẩu trang y tế tại các cơ sở y tế, khu cách ly.
 		<br>
			KHỬ KHUẨN: Rửa tay thường xuyên bằng xà phòng hoặc dung dịch sát khuẩn tay. Vệ sinh các bề mặt/ vật dụng thường xuyên tiếp xúc (tay nắm cửa, điện thoại, máy tính bảng, mặt bàn, ghế…). Giữ vệ sinh, lau rửa và để nhà cửa thông thoáng.
<br>
			KHOẢNG CÁCH: Giữ khoảng cách khi tiếp xúc với người khác.
<br>
			KHÔNG TỤ TẬP đông người.
<br>
			KHAI BÁO Y TẾ: thực hiện khai báo y tế trên App NCOVI; cài đặt ứng dụng BlueZone tại địa chỉ https://www.bluezone.gov.vnđể được cảnh báo nguy cơ lây nhiễm COVID-19.
<br>
			Khi có dấu hiệu sốt, ho, khó thở hãy gọi điện cho đường dây nóng của Bộ Y tế 19009095 hoặc đường dây nóng của y tế địa phương để được tư vấn, hỗ trợ, hướng dẫn đi khám bệnh đảm bảo an toàn.
					</p>

	</ul><hr>
		
	<ul style="text-align: center;">
		<p style="font-weight: bold;font-size: 30px;color: #483D8B;font-family: Palatino Linotype">Đối tác</p><hr>
		<img src="img/benhvientudu.png" alt=""><br>
		<img src="img/benhvienthongnhat.png" alt=""><br>
		<img src="img/benhvienhanhphuc.png" alt=""><br>
		<img src="img/benhvienhoanmy.png" alt=""><br>
		
	</ul>
</div>
	


</body>
	<footer>
		<?php include "include/footer.php" ?>
	</footer>
</html>
