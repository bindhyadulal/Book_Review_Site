<?php
  try{
     $conn=new PDO("mysql:host=localhost;dbname=review;charset=utf8","root","");
  }catch(PDOException $e){
     echo $e->getMessage();
  }
?>