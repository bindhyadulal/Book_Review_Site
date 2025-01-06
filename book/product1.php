<?php

include("database.php");
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category=$_POST['category'];
    $writer=$_POST['writer'];
    $rating=$_POST['rating'];
    $image=$_POST['images'];
    $des=$_POST['descr'];

    

    $sql="Select * from book where title= '$title'";
    $result=mysqli_query($conn,$sql);
    $count_title= mysqli_num_rows($result);

    if(   $count_title==0){
        $sql="INSERT INTO book(title,category,writer,rating,image,description) VALUES 
        ('$title','$category','$writer','$rating','$image','$des')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Book added sucessfully";
            header ("Location:pub.php");
        }
    }else{
        if($count_title>0){
            echo '<script>
            alert("book already exist");
            </script>';
        }
    }
}
?>
