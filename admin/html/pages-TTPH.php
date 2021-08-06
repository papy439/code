<?php
    session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ung Dung Ho Tro Quan Ly Hien Mau</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <?php
        include "../config.php";
         $ykienErr = "";
        if(isset($_POST['upph']))
        {
            $id=$_SESSION['MSNHM'];
            $ykien=addslashes($_POST['ykien']);

            $query2 = "UPDATE thongtinphanhoi SET YKIEN='$ykien' WHERE id_NHM='$id'";
             if (empty($ykien)) {
                $ykienErr = "Không được để trống ý kiến";
             }
             elseif (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/", $ykien )) {
                        $ykienErr = "Bạn chỉ được nhập chữ cái và khoảng trắng";
            }

            else{
                if(mysql_query($query2))
                {
                    ?><script>
                    alert('Update Success');
                    window.history.go(-1);
                </script>
            <?php
                }
            else
                {
                echo "FAIL";
                }
            }
        }
    ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6"style="background-color: #6CA6CD;" >
            <?php
                include "../include/header.php";
            ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <?php
                        include "../include/left-side.php";
                    ?>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Table</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="trangchu.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thông tin phản hồi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column --><form method="POST" enctype="multipart/form-data">
                   
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin người hiến máu</h4>
                                
                                <div class="table-responsive">
                                    <form method="POST" enctype="multipart/form-data" >
                                    <table class="table user-table" >
                                        <?php 
                                            if(isset($_POST['timcccd']))
                                            {
                                                include "../config.php";
                                               
                                                $cccd= addslashes($_POST['CCCD']);
                                                 if (!$cccd) {
                                                    echo "Vui lòng nhập số căn cước công dân của người hiến máu cần tìm. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                    
                                                }
                                                $query = mysql_query("SELECT * FROM hosohienmau join nguoihienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM WHERE CCCD like 
                                '$cccd'  ");
                                                if (mysql_num_rows($query) == 0) {
                                                    echo "Mã CCCD này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                    
                                                }
                                                $row = mysql_fetch_array($query);
                                                
                                                $_SESSION['CCCD'] = $cccd;
                                                $_SESSION['MSNHM']=$row['MSNHM'];
                                                
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <td>Họ Tên</td>
                                                        <td>Nghề nghiệp</td>
                                                        <td>Giới tính</td>
                                                        <td>Địa chỉ</td>
                                                        <td>Điện thoại</td>
                                                        <td>Ngày sinh</td>
                                                        <td>CCCD</td>
                                                        <td>Email</td>
                                                    </tr>
                                                    </thead>
                                                    
                                               
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row['HOTEN']; ?></td>
                                                            <td><?php echo $row['NGHENGHIEP']; ?></td>
                                                            <td><?php if($row['GIOITINH']==0) echo "Nam"; else echo "Nữ"; ?></td>
                                                            <td><?php echo $row['DIACHI']; ?></td>
                                                            <td><?php echo $row['SODT'] ?></td>
                                                            <td><?php echo $row['NGAYSINH']; ?></td>
                                                            <td><?php echo $row['CCCD']; ?></td>
                                                            <td><?php echo $row['EMAIL']; ?></td>
                                                        </tr>
                                                    </tbody>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin phản hồi</h4>
                                
                                <div class="table-responsive">
                                    <form method="POST" class="form-horizontal form-material mx-2" enctype="multipart/form-data" >
                                    <table class="table user-table" >
                                        <tr>
                                            <?php 
                                                $cccd=$_SESSION['CCCD'];
                                                $query= mysql_query("SELECT * FROM thongtinphanhoi inner join nguoihienmau on thongtinphanhoi.id_NHM= nguoihienmau.MSNHM inner join canboyte on thongtinphanhoi.id_CBYT= canboyte.MSCBYT WHERE nguoihienmau.CCCD=$cccd");
                                                $result=mysql_fetch_array($query);
                                                
                                                
                                            ?>
                                            <td colspan="2"><p style="font-weight: bold;text-align: center; font-size: 20px;">Thông tin phản hồi từ người hiến máu sau khi hiến</p>
                                                <p style="margin-left: 20px;">Người tiếp nhận: <input type="text" name="nguoitn" readonly value="<?php echo $result['HOTEN']; ?>" style="width: 325px;"></p>
                                                <p style="margin-left: 20px;">Nội dung: <textarea readonly name="noidung"  style="width: 372px;"><?php echo $result['NOIDUNG']; ?></textarea></p>
                                                <p style="margin-left: 20px;">Ý kiến bác sĩ: <input type="text"  value="<?php echo $result['YKIEN']; ?>" name="ykien" style="width: 350px;"><span class="error" style="color: red;">* <?php echo $ykienErr;?></span></p>
                                                <p style="margin-left: 20px;">Ngày-Tháng-Năm:<input type="text" readonly value="<?php echo $result['NGAYPH']; ?>" style="width: 150px;" name="ngayph" ></p>
                                                <p style="margin-left: 20px;">Bác sĩ: <input type="text" readonly value="<?php echo $result['TEN']; ?>" name="bacsi" style="width: 350px;"></p>
                                                <button type="submit" name="upph" class="btn btn-block btn-danger">Cập nhật</button> 
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                                                <?php
                                            
                                            } else{ 
                                            ?>
                                             <div class="col-sm-12" style="width: 1200px;">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-10" style="float: left;"> 
                                    <div class="input-group"><span style="margin-top: 6px;" class="input-group-addon">Nhập CCCD: </span><input name="CCCD" placeholder="Căn cước công dân" class="form-control" type="text">
                                    </div>  
                                </div> 
                                <div class="col-md-2" style="float: right;"><button type="submit" name="timcccd" class="btn btn-success btn-block">Tìm</button></div>
                                
                                <div class="table-responsive">
                                    <form method="POST" enctype="multipart/form-data">
                                    <table class="table user-table" > <?php    
                                            include "../config.php";
                                                $i=0;
                                                $query = mysql_query("SELECT * FROM nguoihienmau");
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">#</th>
                                                        <th class="border-top-0">Full Name</th>
                                                        <th class="border-top-0">CCCD</th>
                                                        <th class="border-top-0">SĐT</th>
                                                        <th class="border-top-0">Trạng Thái</th>
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
                                                        } ?>
                                                </tbody>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> 
                <?php include "../include/footer.php"; ?>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>