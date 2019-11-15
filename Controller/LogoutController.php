<?php
   if(isset($_GET['Logout'])){
   session_start();
   session_unset();
   session_destroy();



   header("Location: ../index.php");
}

?>