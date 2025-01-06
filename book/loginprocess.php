<?php
include("database.php");

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['pass'];


$sql="select * from user where email='$email' and password_hash='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC );
$count=mysqli_num_rows($result);
if($count==1){
    if($row['usertype']=='user'){
    header ("Location:home.php");
    }elseif($row['usertype']=='admin'){
        header ("Location:admin.php");
    }
    else{
        header ("Location:pub.php");
    }
}else{
    echo '<script>
    window.location.href="login.php";
    alert("Login failed. Invalid email or password");
    </script>';
}

}
?>