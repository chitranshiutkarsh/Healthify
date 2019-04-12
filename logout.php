<?php
include ("doctor.php");
session_start();
session_unset($_SESSION['name']);
session_unset($_SESSION['email']);
session_unset($_SESSION['address']);
if(session_destroy())
{
  header("Location:index.php");
}
 ?>
