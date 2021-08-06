<?php 
	include "../ketnoi.php";?>
	<form method="post" action="luu-dkyhienmau.php">
	<div class="input-group"style="background-color: white; text-align: justify; height: 100px; width: 800px; margin-left: 400px; margin-right: 400px; margin-top: 20px">
	<table border="2" style="height: 600px; width: auto;" >
		<tr style="color: blue;">
				<td style="font-weight: bold;text-align: center; font-size: 24px;">Dành cho người hiến máu</td>
				<td style="font-weight: bold;text-align: center; width: 100px;font-size: 24px;"> Có </td>
				<td style="font-weight: bold;text-align: center; width: 100px;font-size: 24px;">Không</td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">1. Anh chị đã từng hiến máu ?</td>
			<td style="text-align: center;" ><input name="rtungHM" id="rtungHM" value="1" type="radio"checked ></td>
			<td style="text-align: center;"><input name="rtungHM" id="rtungHM" value="0" type="radio" disabled ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">2. Hiện tại, anh/chị có bị các bệnh viêm khớp, đau dạ dày, viêm gan/vàng da, bệnh tim, huyết áp thấp/cao, hen, ho kéo dài, bệnh máu, lao ?
				<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
				<label for="tbenhkhac">Bệnh khác:
				</label>
				<input id="tbenhkhac" name="tbenhkhac" class="form-control" type="text" style="width: 550px;"><hr>
				</div>
			</td>
			<td style="text-align: center;"><input name="rcacbenh" id="rcacbenh" value="1" type="radio" ></td>
			<td style="text-align: center;"><input name="rcacbenh" id="rcacbenh" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">3. Trong vòng 12 tháng gần đây, anh/chị có mắc các bệnh và đã được điều trị khỏi :</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Sốt rét,giang mai,lao,viêm não,phẩu thuật ngoại khoa ?</td>
			<td style="text-align: center;"><input name="rsotret12" id="rsotret12" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rsotret12" id="rsotret12" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin bệnh dại ?
				<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
				<label for="tvacxincuthe12">Khác(cụ thể):</label>
				<input id="tvacxincuthe12" name="tvacxincuthe12" class="form-control" type="text" style="width: 550px;"><hr>
				</div>
			</td>
			<td style="text-align: center;"><input name="rvacxin12" id="rvacxin12" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rvacxin12" id="rvacxin12" value="0" type="radio"required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Được truyền máu và các chế phẩm máu ?</td>
			<td style="text-align: center;"><input name="rtruyenmau" id="rtruyenmau" value="1" type="radio"></td>
			<td style="text-align: center;"><input name="rtruyenmau" id="rtruyenmau" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">4. trong vòng 6 tháng gần đây.anh/chị có bị một trong các triệu chứng sau không ?</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Sút cân nhanh không rõ nguyên nhân ?</td>
			<td style="text-align: center;"><input name="rsutcan6" id="rsutcan6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rsutcan6" id="rsutcan6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Nổi hạch kéo dài ?</td>
			<td style="text-align: center;"><input name="rnoihach6" id="rnoihach6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rnoihach6" id="rnoihach6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Chữa răng, châm cứu ?</td>
			<td style="text-align: center;"><input name="rchuarang6" id="rchuarang6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rchuarang6" id="rchuarang6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Xăm mình, xỏ lỗ tai, lỗ mũi?
				<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
					<label for="txamhinhcuthe6">Khác(cụ thể):</label>
					<input id="txamhinhcuthe6" name="txamhinhcuthe6" class="form-control" type="text" style="width: 550px;"><hr>
				</div>
			</td>
			<td style="text-align: center;"><input name="rxamhinh6" id="rxamhinh6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rxamhinh6" id="rxamhinh6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Sử dụng ma túy HIV ?</td>
			<td style="text-align: center;"><input name="rmatuy6" id="rmatuy6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rmatuy6" id="rmatuy6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Quan hệ tình dục với người nhiễm HIV hoặc người có hành vi nguy cơ lây nhiếm HIV ?</td>
			<td style="text-align: center;"><input name="rqhHIV6" id="rqhHIV6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rqhHIV6" id="rqhHIV6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Quan hệ tình dục với người cùng giới ?</td>
			<td style="text-align: center;"><input name="rqhcunggioi6" id="rqhcunggioi6" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rqhcunggioi6" id="rqhcunggioi6" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">5. Trong vòng 5 tháng gần đây anh/chị có :</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Khỏi bệnh sau khi mắc các bệnh viêm đường tiết niệu, viêm đa nhiễm trùng ,viêm phế quảng ,viêm phổi,sởi,quai bị,Rubella ?
				<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
				<label for="ttiemtietnieukhac1" >Khác(cụ thể):</label>
					<input id="ttiemtietnieukhac1" name="ttiemtietnieukhac1" class="form-control" type="text" style="width: 550px;"><hr>
				</div>
			</td>
			<td style="text-align: center;"><input name="rtiemtietnieu1" id="rtiemtietnieu1" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rtiemtietnieu1" id="rtiemtietnieu1" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin phòng bệnh ?
				<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
				<label for="tloaivacxin1" >Khác(cụ thể):</label>
					<input id="tloaivacxin1" name="tloaivacxin1" class="form-control" type="text" style="width: 550px;"><hr>
				</div>
			</td>
			<td style="text-align: center;"><input name="rvacxin1" id="rvacxin1" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rvacxin1" id="rvacxin1" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Đi vào vùng có dịch bệnh lưu hành(sốt rết, sốt xuất huyết, Zika,...) ?</td>
			<td style="text-align: center;"><input name="rluuhanh" id="rluuhanh" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rluuhanh" id="rluuhanh" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">6. Trong vòng 7 ngày gần đây anh/chị có :</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Bị cúm , ho, nhức đầu, sốt ?</td>
			<td style="text-align: center;"><input name="rcum7" id="rcum7" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rcum7" id="rcum7" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Dùng thuốc kháng sinh, Aspirin, Cortuvid ?</td>
			<td style="text-align: center;"><input name="rdungthuoc7" id="rdungthuoc7" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rdungthuoc7" id="rdungthuoc7" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin phòng viêm gan siêu vi B, Human Papilloma Virus ?
			<div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
				<label for="tloaivacxin7">Khác(ghi cụ thể):</label>
				<input id="tloaivacxin7" name="tloaivacxin7" class="form-control" type="text" style="width: 550px;"><hr>
			</div>
			</td>
			<td style="text-align: center;"><input name="rtiemvacxin7" id="rtiemvacxin7" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rtiemvacxin7" id="rtiemvacxin7" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">7. Câu hỏi dành cho phụ nữ?</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Hiện có thai, nuôi con dưới 12 tháng tuổi ?</td>
			<td style="text-align: center;"><input name="rphunu1" id="rphunu1" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rphunu1" id="rphunu1" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">- Có kinh nguyệt trong vòng 1 tuần hay không ?</td>
			<td style="text-align: center;"><input name="rphunu2" id="rphunu2" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rphunu2" id="rphunu2" value="0" type="radio" required ></td>
		</tr>
		<tr>
			<td style="padding-left: 20px;padding-right: 20px;">8. Anh/chị đồng ý xét nghiệm HIV, nhận thông báo và được tư vấn khi kết quả xét nghiệm HIV nghi ngờ hoặc dương tính</td>
			<td style="text-align: center;"><input name="rxntbHIV" id="rxntbHIV" value="1" type="radio" required ></td>
			<td style="text-align: center;"><input name="rxntbHIV" id="rxntbHIV" value="0" type="radio" required ></td>
		</tr>
	</table>
</div>  
<ul style="padding-top: 20px;">
		<a href="luu-dkyhienmau.php"><input type="submit" name="btn-save-dk" style="border-radius: 20px;height: 50px;width: 250px;font-weight: bolder;font-size: 20px;font-family: Book Antiqua;text-align: center; "class="btn-success" value="Lưu Đăng ký">
		</a>
	</ul>
</form>
