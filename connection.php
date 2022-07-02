<?php
 $link =mysqli_connect("localhost","id13393459_root","mnbmnbmnb123*M");
    mysqli_select_db($link ,"id13393459_circle");
   if($link->connect_error){
   	die("Connection failed :" . $link->connect_error);
   }
?>