<?php
    session_start();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <html xmlns="http://www.w3.org/1999/xhtml">
    
</head>

<body>
    <?php
        include "../config.php";
        $msnhm=$_SESSION['MSNHM'];
        $sql = mysql_query("SELECT * FROM nguoihienmau LEFT JOIN hosohienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM WHERE MSNHM='$msnhm'");
        $row = mysql_fetch_array($sql);                                          
        $emailErr =$cccdErr = $nameErr = $jobErr= $phoneErr= $diaErr= "";
        
    ?>
    <?php
        if (isset($_POST['upttnhm'])) {
            include "../config.php";
            $msnhm=$_SESSION['MSNHM'];
            $cccd2= addslashes($_POST['so-cccd']);
            $hoten2= addslashes($_POST['ho-ten']);
            $sodt2= addslashes($_POST['so-dt']);
            $ngaysinh2= addslashes($_POST['ngay-sinh']);
            $email2= addslashes($_POST['emailnhm']);
            $loaimau2= addslashes($_POST['loaimau']);
            $diachi2= addslashes($_POST['diachi']);
            $nghenghiep2= addslashes($_POST['nghenghiep']);
            $query2 = "UPDATE hosohienmau join nguoihienmau on nguoihienmau.MSNHM = hosohienmau.id_NHM SET HOTEN='$hoten2', SODT='$sodt2',
            NGAYSINH='$ngaysinh2', CCCD='$cccd2', EMAIL='$email2', LoaiMau='$loaimau2', DIACHI='$diachi2', NGHENGHIEP='$nghenghiep2' WHERE MSNHM='$msnhm'";
            if(empty($cccd2))
            {
                $cccdErr = "Không được để trống";
            }
            elseif (!preg_match ("/^[0-9]*$/",$cccd2)) {
                $cccdErr = "Bạn chỉ được nhập giá trị số";
            }
            elseif (strlen ($cccd2) != 11) {
                $cccdErr = "CCCD phải là 11 ký tự.";
             }
            else if (empty($sodt2)) {
                $phoneErr = "Không được để trống phone";
             }
             elseif (!preg_match("/^[0-9]*$/", $sodt2 )) {
                $phoneErr = "Số điện thoại không hợp lệ";
             }
             elseif (strlen ($sodt2) != 10) {
                $phoneErr = "Số điện thoại phải là 10 ký tự.";
             }
             else if (empty($diachi2)) {
                $diaErr = "Không được để trống địa chỉ";
             }
             elseif (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/", $diachi2 )) {
                $diaErr = "Bạn chỉ được nhập chữ cái và khoảng trắng";
             }
             else if (empty($nghenghiep2)) {
                $jobErr = "Không được để trống nghề nghiệp";
             }
             elseif (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/", $nghenghiep2 )) {
                $jobErr = "Bạn chỉ được nhập chữ cái và khoảng trắng";
             }
             else if (empty($hoten2)) {
                $nameErr = "Không được để trống họ tên";
             }
             elseif (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/", $hoten2 )) {
                $nameErr = "Bạn chỉ được nhập chữ cái và khoảng trắng";
             }
            else if (empty($email2)) {
                $emailErr = "Không được để trống email";
             }
            else if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Không đúng định dạng email";
            }else{
                 if(mysql_query($query2))
                    {
                ?><script>
                    alert('Update Success');
                    window.history.go(-1);
                </script>
                <?php }
                else
                {
                    ?><script>
                    alert('Update Fail');
                    window.history.go(-1);
                    </script>
                <?php  } 
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6" style="background-color: #6CA6CD;">
            <?php include "../include/header.php"; ?>
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
                        <h3 class="page-title mb-0 p-0">Trang chủ</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Thông tin người hiến máu</h4>
                                    <form method="POST" enctype="multipart/form-data"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    
                                        <?php
                                            if(isset($_REQUEST['MSNHM']) and $_REQUEST['MSNHM']!=""){
                                                $id= $_GET['MSNHM'];
                                                include "../config.php";
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
                                            
                                                }
                                        ?>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="col-md-6" style="float: left;">
                                                    <label class="col-md-3 mb-0">Full Name</label>
                                                </div>
                                                <div class="col-md-6" style="float: left;">
                                                    <label class="col-md-3 mb-0">CCCD</label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3" style="float: left;">
                                                    <input name="ho-ten"  class="form-control ps-0 form-control-line" type="text" value="<?php echo $row['HOTEN']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: left;"><span class="error" style="color: red;">* <?php echo $nameErr;?></span>
                                                </div>
                                                <div class="col-md-3" style="float: left;">
                                                    <input name="so-cccd" class="form-control ps-0 form-control-line" type="text" value="<?php echo $_SESSION['CCCD']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: right;"><span class="error" style="color: red;">* <?php echo $cccdErr;?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                
                                                <div class="col-md-6" style="float: left;">
                                                    <label class="col-md-3 mb-0">ADDRESS</label>
                                                </div>
                                                <div class="col-md-6" style="float: right;">
                                                    <label class="col-md-3 mb-0">PHONE</label>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-3" style="float: left;">
                                                    <input name="diachi"  class="form-control" type="text" value="<?php echo $row['DIACHI']; ?>">
                                                </div>
                                                 <div class="col-md-3" style="float: left;"><span class="error" style="color: red;">* <?php echo $diaErr;?></span></div>
                                                <div class="col-md-3" style="float: left;">
                                                    <input name="so-dt"  class="form-control" type="text" value="<?php echo $row['SODT']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: right;"><span class="error" style="color: red;">* <?php echo $phoneErr;  ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-4" style="float: left;">
                                                    <label class="col-md-3 mb-0">BIRTHDAY</label>
                                                </div>
                                                <div class="col-md-2" style="float: left;">
                                                    <label class="col-md-3 mb-0">BLOOD</label>
                                                </div>
                                                <div class="col-md-6" style="float: right;">
                                                    <label class="col-md-3 mb-0">JOB</label>
                                                </div>
                                                
                                            </div>
                                            

                                            <div class="col-md-12">
                                                <div class="col-md-4" style="float: left;">
                                                    <input name="ngay-sinh"  class="form-control" type="text" value="<?php echo $row['NGAYSINH']; ?>">
                                                </div>
                                                <div class="col-md-2" style="float: left;">
                                                    <input name="loaimau"  class="form-control" type="text" value="<?php echo $row['LoaiMau']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: left;">
                                                    <input name="nghenghiep"  class="form-control" type="text" value="<?php echo $row['NGHENGHIEP']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: right;"><span class="error" style="color: red;"> <?php echo $jobErr;?></span></div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="col-md-6" style="float: left;">
                                                    <label class="col-md-3 mb-0">MALE</label>
                                                </div>
                                                <div class="col-md-6" style="float: right;">
                                                    <label class="col-md-3 mb-0">EMAIL</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6" style="float: left;">
                                                    <input name="gioitinh"  class="form-control" type="text" value="<?php if($row['GIOITINH']==0) echo "Nam"; else echo "Nữ"; ?>">
                                                </div>
                                                 <div class="col-md-3" style="float: left;">
                                                    <input name="emailnhm"  class="form-control" type="text" value="<?php echo $row['EMAIL']; ?>">
                                                </div>
                                                <div class="col-md-3" style="float: right;"><span class="error" style="color: red;">* <?php echo $emailErr;?></span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                <div class="col-md-4" style="float: right;"><button type="submit" name="upttnhm" class="btn btn-block btn-danger" style="float: right;"> Cập nhật</button></div>
                                        </div>
                                            
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>