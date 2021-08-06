<?php
    
                                            include "../config.php"
?>

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin người hiến máu</h4>
                                
                                <div class="table-responsive">
                                    <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <table class="table user-table">
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
                                                                <td><a href="pages-DKHM.php?MSNHM=<?php echo $row['MSNHM']; ?>"><?php echo $row['HOTEN']; ?></a></td>
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
                                                </tbody>
                                                <?php }
                                                         ?>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>