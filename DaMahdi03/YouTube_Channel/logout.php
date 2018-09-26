<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have been logged out!';
   header('Refresh: 2; URL = health_database_sign_in.php');
?>