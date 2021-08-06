 <?php

        include "../config.php";

?>

<div class="col-md-6" style="float: right; padding-left: 10px;">


                                        <div class="input-group"style="background-color: white; text-align: justify; height: auto; width: 100%;">
                                             <form method="POST" enctype="multipart/form-data" >
                                            <table border="2" style="width: 100%; height: auto;">
                                              <?php
                                                    $sql=mysql_query("SELECT * FROM canboyte");
                                                    $request=mysql_fetch_array($sql);
                                              ?>
                                                <tr>
                                                    <td style="text-align: center; width: 320px;font-weight: bold; font-size: 20px;">Khám tuyển chọn</td>
                                                    <td style="text-align: center;width: auto;font-weight: bold; font-size: 20px;">Lấy máu</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4" style="padding-left: 20px;padding-right: 20px;">
                                                    <p>- Họ tên:<input type="text" name="ten" readonly="" value="<?php echo $row['HOTEN']; ?>" style="width: 200px;"></p>
                                                    <p>- Cân nặng:<input type="text" name="cannangKG" value="<?php echo $row['cannangKG']; ?>" style="width: 70px;">  Kg.</p> 
                                                    <p>- Nhiệt độ:<input style="width: 70px;" type="text" value="<?php echo $row['nhietdoC']; ?>"  name="nhietdoC" >   &deg;C</p>
                                                    <p>- Huyết áp:<input type="text" name="HAmmHg"  value="<?php echo $row['HAmmHg']; ?>" style="width: 70px;">/<input type="text" value="180" style="width: 70px;">  mmHg.</p>
                                                    <p>-  Mạch:<input style="width: 70px;" value="<?php echo $row['mach']; ?>"  type="text" name="mach">  lần/phút.</p>
                                                    <p>Giờ đo lần 1:<input type="text" name="giodo1" value="<?php echo $row['giodo1']; ?>"  style="width: 70px;">/   <input type="text" value="180" style="width: 50px;">  mmHg.</p>
                                                    <p>-  Mạch:<input style="width: 70px;" type="text" name="mach1"  value="<?php echo $row['mach1']; ?>" >  lần/phút.</p>
                                                    <p>- Giờ đo lần 2:<input type="text" name="giodo2"  value="<?php echo $row['giodo2']; ?>"  style="width: 70px;"></p>
                                                    <p>-  Người thực hiện:<select name="nguoith">
                                                        <option value="">--Chọn--</option>
                                                        <option value="bùi tiến dũng"  selected="selected">bùi tiến dũng</option>
                                                        <option value="triển chính hi">triển chính hi</option>
                                                    </select></p>
                                                    <p>Nhân viên xét nghiệm:<select name="nhanvienxn">
                                                        <option value="">--Chọn--</option>
                                                        <option value="bùi tiến dũng"  >bùi tiến dũng</option>
                                                        <option value="triển chính hi" selected="selected">triển chính hi</option>
                                                    </select></p>
                                                    <p>-  Tình trạng lâm sàng:<textarea name="phanung"  style="width: 120px;">  <?php echo $row['phanung']; ?></textarea></p>
                                                    <p>Bác sĩ:<input type="text" name="bacsi" value="<?php echo $_SESSION['TEN']; ?>" readonly style="width: 170px;"></p>
                                                    <br>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;"><p>Ngày-Tháng-Năm:<input type="text" readonly style="width: 120px;" name="ngayLM"  value="<?php echo $row['ngaydkONLM']; ?>" ></p>
                                                    <p>Thể tích máu lấy được:<input type="text" name="thetichmauML"  value="<?php echo $row['thetichmauML']; ?>"  style="width: 70px;">   ml.</p>
                                                    <p>Nhóm Máu:<input type="text" name="LoaiMau" value="<?php echo $row['LoaiMau']; ?>" style="width: 70px;"></p>
                                                    <p>Phản ứng:<textarea name="phanung"  style="width: 120px;">  <?php echo $row['phanung']; ?></textarea></p>
                                                    <p>Xử trí:<textarea name="xutri"  style="width: 150px; ">  <?php echo $row['xutri']; ?> </textarea></p>
                                                    <p>Người lấy máu: <select name="nguoilaymau">
                                                        <option value="">--Chọn--</option>
                                                        <option value="đặng văn lâm"  selected="selected">đặng văn lâm</option>
                                                        <option value="quang hải">quang hải</option>
                                                        <option value="tiến linh">tiến linh</option>
                                                    </select></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center; width: auto;font-weight: bold; font-size: 20px;">Kết luận</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;"><p>-   Hiến máu được:   450ml <input type="radio" name="thetichmauML" value="450" <?php if($row['thetichmauML']=='250' || $row['thetichmauML']=='450') {?> checked="checked" <?php } ?> ></p>
                                                    <p style="margin-left: 125px;">350ml <input type="radio" name="thetichmauML" value="350" <?php if($row['thetichmauML']=='350') {?> checked="checked" <?php } ?> ></p>
                                                    <br>
                                                    <p>-  Không hiến máu được:<input type="radio" name="KETLUAN" value="1" <?php if($row['KETLUAN']=='0') {?> checked="checked" <?php } ?> >  .</p>
                                                    <p>- Tạm hoãn: <input type="text" name="tamhoan" <?php if($row['KETLUAN']=='0') {?> value="1" <?php } ?> style="width: 70px;">  tuần.</p>
                                                    <p>-   Lý do:<textarea name="lydohoan" style="width: 150px;"><?php echo $row['lydohoan']; ?></textarea></p>
                                                    <p>Bác sĩ:<input type="text" name="bacsi" value="<?php echo $_SESSION['TEN']; ?>" readonly style="width: 170px;"></p>
                                                    <br>

                                                </td>
                                                </tr> 
                                                
                                            </table>
                                        </form>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 20px; float: left;"><input style="width: 80%; margin-left: 20px; margin-right: 20px;" type="submit" name="updkcbyt" class=" btn btn-danger" value="Lưu"></div>
                                                
                                        <div class="col-md-6" style="margin-top: 20px; float: right; "><a href="../include/dangky.php" style="text-decoration: none;"><button  style="width: 80%; margin-left: 20px; margin-right: 20px;" type="button" class="btn btn-danger btn-block" style="color: black;">Hỗ trợ đăng ký</button></a></div>
                                    </div>
