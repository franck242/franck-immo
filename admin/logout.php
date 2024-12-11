<?php 
session_start ();
session_destroy ();
unset($_SESSION['connecte']);
 header ('location:/Agence-immobilliere/admin/login.php');
?>