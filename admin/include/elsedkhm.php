
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-10" style="float: left;"> 
                                    <div class="input-group"><span style="margin-top: 6px;" class="input-group-addon">Nhập CCCD: </span><input name="CCCD" placeholder="Căn cước công dân" class="form-control" type="text">
                                    </div>  
                                </div> 
                                <div class="col-md-2" style="float: right;"><button type="submit" name="timcccd" class="btn btn-success btn-block">Tìm</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin người hiến máu</h4>
                                
                                <div class="table-responsive">
                                    <form method="POST" enctype="multipart/form-data">
                                    <table class="table user-table" >
                                        <?php
                                                $i=0;
                                                $query = mysql_query("SELECT * FROM nguoihienmau");
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">#</th>
                                                        <th class="border-top-0">Full Name</th>
                                                        <th class="border-top-0">CCCD</th>
                                                        <th class="border-top-0">SĐT</th>
                                                        <th class="border-top-0">Trạng thái</th>
                                                        <th class="border-top-0">Disactive</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                while($row = mysql_fetch_array($query))
                                                {
                                                    $i++;
                                                    ?>
                                                
                                                <tbody>

                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $row['HOTEN']; ?></td>
                                                            <td><?php echo $row['CCCD']; ?></td>
                                                            <td><?php echo $row['SODT']; ?></td>
                                                            <td> <?php if($row['trangthai']==1){ ?>
                                                                <input type="checkbox" name="hientt" checked="checked" value="1"> active
                                                           <?php } else { ?>
                                                                <input type="checkbox" name="hientt" checked="checked" value="0"> disactive
                                                           <?php } ?>
                                                            </td>
                                                            <td><a href="../include/disactive.php?MSNHM=<?php echo $row['MSNHM']; ?>"><input type="button" name="hienantt" class="btn btn-block btn-success" value="submit"></a></td>
                                                        </tr>
                                                        <?php }
                                                         ?>
                                                </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
