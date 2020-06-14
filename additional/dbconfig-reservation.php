<?php
   $dbSevername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "spice_villa";

   $con = new mysqli($dbSevername, $dbUsername, $dbPassword, $dbName);

   if($con->connect_error)
   {
      die($con->connect_error);
   }
?>