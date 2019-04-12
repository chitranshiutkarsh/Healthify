<?php
    $conn=mysqli_connect('localhost','root','','users');
    if(!$conn)
    {
      die("Unable to to connect".mysqli_error($conn));
    }
 ?>
