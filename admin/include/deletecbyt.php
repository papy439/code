<?php
	include "../config.php";
	if(isset($_REQUEST['MSCBYT']) and $_REQUEST['MSCBYT']!=""){
		$id=$_GET['MSCBYT'];
		$query="DELETE FROM canboyte WHERE MSCBYT='$id' ";
		if(mysql_query($query)==TRUE)
	    {
	    	?><script>
            alert('Delete Success');
            window.history.go(-1);
        </script>
    <?php
		}
	 	else
	 		{
	    	?><script>
            alert('Delete Fail');
            window.history.go(-1);
        </script>
    <?php
		}
	 	die();
	 }
	// header('Location:quanlythongtinnhm.php');
?>