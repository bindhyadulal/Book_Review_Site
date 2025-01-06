<?php

include("database.php");
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];

    

    $sql="Select * from user where email='$email'";
    $result=mysqli_query($conn,$sql);
    $count_email= mysqli_num_rows($result);

    if(   $count_email==0){
        $sql="INSERT INTO user(fname,lname,email,password_hash,usertype) VALUES 
        ('$fname','$lname','$email','$password','$usertype')";
        $result=mysqli_query($conn,$sql);
        if($result){
            header ("Location:log.php");
        }
    }else{
        if($count_email>0){
            echo '<script>
            alert("Email already exist");
            </script>';
        }
    }
}
?>
