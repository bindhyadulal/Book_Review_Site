<?php
   include ("database.php");
   if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM user where id=$id");
    header('location:user.php');
   }
?>
