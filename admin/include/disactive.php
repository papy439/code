<?php
    include "../config.php";
    if(isset($_REQUEST['MSNHM']) and $_REQUEST['MSNHM']!=""){
        $id=$_GET['MSNHM'];
        $query="UPDATE nguoihienmau SET trangthai='0' WHERE MSNHM='$id' ";
        if(mysql_query($query)==TRUE)
        {
            ?><script>
            alert('UPDATE Success');
            window.history.go(-1);
        </script>
    <?php
        }
        else
            {
            ?><script>
            alert('UPDATE Fail');
            window.history.go(-1);
        </script>
    <?php
        }
        die();
     }
    // header('Location:quanlythongtinnhm.php');
?>