<?php
    include "../config.php";
$id= $_GET['MSNHM'];
                                 if (!$id) {
                                    echo "Vui lòng nhập số căn cước công dân của người hiến máu cần tìm. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }
                                $query = mysql_query("SELECT * FROM nguoihienmau LEFT JOIN hosohienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM WHERE MSNHM='$id'");
                                if (mysql_num_rows($query) == 0) {
                                    echo "Mã CCCD này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }
                                $row = mysql_fetch_array($query);
                                if ($id != $row['MSNHM']) {
                                    echo "CCCD không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                    
                                }
                                $_SESSION['CCCD'] = $row['CCCD'];
                                $_SESSION['MSNHM']= $id;

                               ?> 
                                <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin người hiến máu</h4>
                                
                                <div class="table-responsive">
                                    <form method="POST" enctype="multipart/form-data">
                                    <table class="table user-table" >
                                        
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0" style="width: 80px;">Full Name</th>
                                                        <th class="border-top-0" style="width: 110px;">CCCD</th>
                                                        <th class="border-top-0" style="width: 100px;">PHONE</th>
                                                        <th class="border-top-0" style="width: 50px;">MALE</th>
                                                        <th class="border-top-0" style="width: 70px;">BIRTHDAY</th>
                                                        <th class="border-top-0" style="width: 100px;">JOB</th>
                                                        <th class="border-top-0" style="width: 30px;">BLOOD</th>
                                                        <th class="border-top-0" style="width: 130px;">EMAIL</th>
                                                        <th class="border-top-0" style="width: 190px;">ADDRESS</th>
                                                        <th class="border-top-0" style="width: 100px;">UPDATE</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                <tr>
                                                    <td><input name="ho-ten"  class="form-control" type="text" value="<?php echo $row['HOTEN']; ?>"></td>
                                                    <td><input name="so-cccd"  class="form-control" type="text" value="<?php echo $row['CCCD']; ?>"></td>
                                                    <td><input name="so-dt"  class="form-control" type="text" value="<?php echo $row['SODT']; ?>"></td>
                                                    <td><input name="gioitinh"  class="form-control" type="text" value="<?php if($row['GIOITINH']==0) echo "Nam"; else echo "Nữ"; ?>"></td>
                                                    <td><input name="ngay-sinh"  class="form-control" type="text" value="<?php echo $row['NGAYSINH']; ?>"></td>
                                                    <td><input name="nghenghiep"  class="form-control" type="text" value="<?php echo $row['NGHENGHIEP']; ?>"></td>
                                                    <td><input name="loaimau"  class="form-control" type="text" value="<?php echo $row['LoaiMau']; ?>"></td>
                                                    <td><input name="emailnhm"  class="form-control" type="text" value="<?php echo $row['EMAIL']; ?>"></td>
                                                    <td><input name="diachi"  class="form-control" type="text" value="<?php echo $row['DIACHI']; ?>"></td>
                                                    <td><a href="updateqlnhm.php?MSNHM=<?php echo $row['MSNHM']; ?>" >Cập nhật</a></td>
                                                </tr>
                                                
                                            </tbody>
                                        
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
