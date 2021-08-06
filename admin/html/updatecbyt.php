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
        $cccd=$_SESSION['CCCD'];
        $query = mysql_query("SELECT * FROM canboyte WHERE CCCD='$cccd'");
        $row = mysql_fetch_array($query);

    $nameErr =$cccdErr = $passErr = $jobErr= "";
    ?>
    <?php
if (isset($_POST['upttcn'])) {
    include "../config.php";
    $cccd2= addslashes($_POST['so-cccd']);
    $hoten2 = addslashes($_POST['ho-ten']);
    $pass2=addslashes($_POST['pass']);
    $job2=addslashes($_POST['chucvu']);
    $mscbyt2=addslashes($_POST['mscbyt']);
    $query2 = "UPDATE canboyte SET TEN='$hoten2', CCCD='$cccd2',password='$pass2', CHUCVU='$job2' WHERE MSCBYT='$mscbyt2' ";
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
    else if (empty($pass2)) {
        $passErr = "Không được để trống password";
     }
     elseif (!preg_match("/^[0-9]*$/", $pass2 )) {
                $passErr = "Password không hợp lệ";
             }
             elseif (strlen ($pass2) >= 10) {
                $passErr = "Password phải ít hơn 10 ký tự.";
             }
     else if (empty($job2)) {
        $jobErr = "Không được để trống công việc";
     }
    else if (empty($hoten2)) {
        $nameErr = "Không được để trống họ tên";
     }
     elseif (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/", $hoten2 )) {
                $nameErr = "Bạn chỉ được nhập chữ cái và khoảng trắng";
    }else {
        
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6" style="background-color: #6CA6CD;">
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
                        <h3 class="page-title mb-0 p-0">Profile</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="trangchu.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                     <?php
                                            if(isset($_REQUEST['MSCBYT']) and $_REQUEST['MSCBYT']!=""){
                                                $id= $_GET['MSCBYT'];
                                                include "../config.php";
                                                if (!$id) {
                                                    echo "Vui lòng nhập số căn cước công dân của cán bộ y tế cần tìm. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                    
                                                }
                                                $query = mysql_query("SELECT * FROM canboyte WHERE MSCBYT='$id'");
                                                if (mysql_num_rows($query) == 0) {
                                                    echo "Mã CCCD này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                   

                                                }
                                                $row = mysql_fetch_array($query);
                                                if ($id != $row['MSCBYT']) {
                                                    echo "CCCD không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                    
                                                }
                                                $_SESSION['CCCD'] = $row['CCCD'];
                                                $_SESSION['MSCBYT']= $id; 
                                            
                                                }
                                        ?>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-7" style="float: left;">
                                            <input type="text" name="ho-ten" value="<?php echo $row['TEN']; ?>" class="form-control ps-0 form-control-line">
                                        </div>
                                        <div class="col-md-5" style="float: right;"><span class="error" style="color: red;">* <?php echo $nameErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-7" style="float: left;">
                                            <input type="password" value="<?php echo $row['password']; ?>" class="form-control ps-0 form-control-line" name="pass">
                                        </div>
                                        <div class="col-md-5" style="float: right;"><span class="error" style="color: red;">* <?php echo $passErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">CCCD</label>
                                        <div class="col-md-7" style="float: left;">
                                            <input type="text" value="<?php echo $_SESSION['CCCD']; ?>"
                                                class="form-control ps-0 form-control-line" name="so-cccd">
                                        </div>
                                        <div class="col-md-5" style="float: right;"><span class="error" style="color: red;">* <?php echo $cccdErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Job</label>
                                        <div class="col-md-7" style="float: left;">
                                            <select name="chucvu">
                                                <option value="">--Chọn--</option>
                                                <option value="lấy máu" <?php if($row['CHUCVU']=='lấy máu'){ ?> selected="selected" <?php } ?>>lấy máu</option>
                                                <option value="lấy thông tin"<?php if($row['CHUCVU']=='lấy thông tin'){ ?> selected="selected" <?php } ?>>lấy thông tin</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5" style="float: right;"><span class="error" style="color: red;">* <?php echo $jobErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">MSCBYT</label>
                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" readonly="" value="<?php echo $row['MSCBYT']; ?>"
                                                class="form-control ps-0 form-control-line" name="mscbyt">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                           <button type="submit" name="upttcn" class="btn btn-success mx-auto mx-md-0 text-white" >Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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