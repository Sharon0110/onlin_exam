<?php
session_start();
include("database.php");
        if(isset($_POST["send"]))
        {
            $nm=$_POST["nm"];
            $eml=$_POST["eml"];
            $subj=$_POST["subj"];
            $msj=$_POST["message"];
        
        if(isset($_SESSION["login"]))
        {
       
         $q="insert into contact_us(name,req_type,subject,Description,email,dt_tm) values('".$nm."','registered ','".$subj."','".$msj."','".$eml."','".CURRENT_TIMESTAMP."')";
             
              $r=mysql_query($q,$cn);
                    if($r>0)
                    {
                        header("location:feedback.php?f_msj=your feedback have submitted");
                    }
                             
        }
            
        }

?>