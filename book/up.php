<?php
include ("database.php");
$id="";
if(isset($_GET['edit'])){
$id=$_GET['edit'];}
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category=$_POST['category'];
    $writer=$_POST['writer'];
    $rating=$_POST['rating'];
    $image=$_POST['images'];
    $des=$_POST['descr'];
    $sql="Select * from book where id=$id";
    
    
     $update="UPDATE book SET title='$title', category='$category',writer='$writer',rating='$rating',image='$image',description='$des' WHERE id=$id;";
        $upload=mysqli_query($conn,$update);
        if($upload){
            echo "Book uploded sucessfully";
            header ("Location:book.php");
        }
    }



?>