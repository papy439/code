 <?php

        include "../config.php";
                $msnhm=$_SESSION['MSNHM'];
                $cannangKG= addslashes($_POST['cannangKG']);
                $nhietdoC= addslashes($_POST['nhietdoC']);
                $HAmmHg= addslashes($_POST['HAmmHg']);
                $mach= addslashes($_POST['mach']);
                $giodo1= addslashes($_POST['giodo1']);           
                $mach1= addslashes($_POST['mach1']);
                $giodo2= addslashes($_POST['giodo2']);
                $LoaiMau=addslashes($_POST['LoaiMau']); 
                $thetichmauML = addslashes($_POST['thetichmauML']);
                $ngayLM= addslashes($_POST['ngayLM']);
                $phanung= addslashes($_POST['phanung']);
                $xutri= addslashes($_POST['xutri']);
                $lydohoan= addslashes($_POST['lydohoan']);

                $sql ="UPDATE hosohienmau  SET LoaiMau='$LoaiMau', cannangKG='$cannangKG', HAmmHg='$HAmmHg', nhietdoC='$nhietdoC', mach='$mach', mach1='$mach1', giodo1='$giodo1', giodo2='$giodo2', thetichmauML='$thetichmauML', ngayLM='$ngayLM', phanung='$phanung', xutri='$xutri', lydohoan='$lydohoan'   WHERE id_NHM='$msnhm'";
                    if($cannangKG<43){
                        ?><script>
                            alert('Không đủ cân nặng để hiến!!!');
                            window.history.go(-1);
                        </script>
                    <?php 
                    }  elseif($nhietdoC<35 || $nhietdoC>37){
                        ?><script>
                            alert('Nhiệt độ không phù hợp để hiến!!!');
                            window.history.go(-1);
                        </script>
                    <?php 
                    }
                      elseif($HAmmHg>180 || $giodo1>180 || $giodo2>180){
                        ?><script>
                            alert('Huyết áp không phù hợp để hiến!!!');
                            window.history.go(-1);
                        </script>
                    <?php 
                    }           
                    elseif(mysql_query($sql))
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
                
        
        

        
    ?> 