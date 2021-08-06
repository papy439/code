<?php
	include "../config.php";
                                $id= $_GET['MSNHM'];
                                 if (!$id) {
                                    echo "Vui lòng nhập số căn cước công dân của người hiến máu cần tìm. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }

                                $queryTong =mysql_query("SELECT sum(thetichmauML) as thetichmau, Count(thetichmauML)as solan
                                        FROM `hosohienmau` 
                                        WHERE id_NHM='$id'");

                                $kq=mysql_fetch_assoc($queryTong);

                                $sql = mysql_query("SELECT * FROM nguoihienmau LEFT JOIN hosohienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM WHERE MSNHM='$id'");
                                $query = mysql_query("SELECT * FROM nguoihienmau LEFT JOIN hosohienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM WHERE MSNHM='$id'");
                                if (mysql_num_rows($query) == 0) {
                                    echo "Mã NHM này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }
                                $row = mysql_fetch_array($query);
                                if ($id != $row['MSNHM']) {
                                    echo "Mã NHM không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }
                                $_SESSION['CCCD'] = $row['CCCD'];
                                $_SESSION['MSNHM']= $id;
                                $i=0;
                                ?>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Table Thông tin người hiến máu <a style="float: right;" name="timcccd" href="table-QLTTNHM?MSNHM=<?php echo $_SESSION['MSNHM']; ?>">Đổi thông tin</a></h4>
                                            <div class="table-responsive">
                                                <table class="table user-table" >
                                                    <thead>
                                                    <tr>
                                                        <td>Họ Tên</td>
                                                        <td>Nghề nghiệp</td>
                                                        <td>Giới tính</td>
                                                        <td>Điện thoại</td>
                                                        <td>Ngày sinh</td>
                                                        <td>CCCD</td>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row['HOTEN']; ?></td>
                                                            <td><?php echo $row['NGHENGHIEP']; ?></td>
                                                            <td><?php if($row['GIOITINH']==0) echo "Nam"; else echo "Nữ"; ?></td>
                                                            
                                                            <td><?php echo $row['SODT'] ?></td>
                                                            <td><?php echo $row['NGAYSINH']; ?></td>
                                                            <td><?php echo $row['CCCD']; ?></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr>
                                                            <td>Tổng số lần hiến máu</td>
                                                            <td>Tổng lượng máu hiến được</td>
                                                            <td>Nhóm máu</td>
                                                            <td>Email</td>
                                                            <td>Địa chỉ</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $kq['solan']; ?></td>
                                                            <td><?php echo $kq['thetichmau']; ?> ml</td>
                                                            <td><?php echo $row['LoaiMau']; ?></td>  
                                                            <td><?php echo $row['EMAIL']; ?></td>
                                                            <td><?php echo $row['DIACHI']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr>
                                                            <td>STT</td>
                                                            <td>Ngày đăng ký hiến máu</td>
                                                            <td>Ngày hiến máu</td>
                                                            <td>Thể tích máu</td>
                                                            <td>Tình trạng</td>
                                                            <td>Chi tiết</td>
                                                            
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <?php

                                                                
                                                                while ($request=mysql_fetch_array($sql))
                                                                {
                                                                    $i++;
                                                                
                                                            ?>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $request['ngaydkONLM']; ?></td>
                                                            <td><?php echo $request['ngaydkONLM']; ?></td>
                                                            
                                                            <td><?php echo $request['thetichmauML']; ?></td>
                                                            <td><?php if($request['KETLUAN']=='0') { echo "Đang chờ xét duyệt"; } else { echo "Đã hiến máu"; } ?></td>
                                                            <td><a href="xemthem.php?ngaydkONLM=<?php echo $request['ngaydkONLM']; ?>">Xem thêm</a></td>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    