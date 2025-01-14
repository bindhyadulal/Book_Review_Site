<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book review</title>

    <style>
        form{
            margin-top: 30px;
        }
        input {
  width: 50%;
  
}
#btn{
    width: 300px;
    height: 40px;
    border-radius: 4px;
    font-weight: bold;
    border: none;
    background-color:purple ;
    color: white;
    font-size: 25px;
}
form p{
    padding-top: .8rem;
    color:lightsalmon;
    font-size: 1.5rem;
}
@media (max-width:991px){

html{
    font-size: 55%;
}



}


@media (max-width:768px){

html{
    scroll-padding-top: 0;
    font-size: 50%;
}

body{
    padding-bottom: 6rem;
}



}

@media (max-width:450px){

html{
    font-size: 50%;
}

}



    </style>

    

</head>
<body style="padding-left:25%; padding-right:25%;">
<header  style="background-color: purple; text-align:center;">

        <nav >
        <h1 style="color: white; font-size :30px; margin-top:50px; padding:25px;">Sign Up</h1>
        
        </nav>
        
    
</header>

<fieldset style="height: 400px;">
<form align="center" name="myform" action="process.php" method="POST" onsubmit="return validateform()" >
   
<label style="font-size: 30px;" for="fname">First Name:</label>
            <input  style="font-size: 20px;"type="text" id="fname" name="fname" placeholder="first name"required><br><br>
            <label style="font-size: 30px;" for="lname">Last Name:</label>
            <input style="font-size: 20px;" type="text" id="lname" name="lname" placeholder="last name"required><br><br>
            <label style="font-size: 30px;" for="email">Email:</label>
            <input style="font-size: 20px;" type="email" id="email" name="email" placeholder="Enter email"required><br><br>
            <label style="font-size: 30px;" for="password">Password:</label>
            <input style="font-size: 20px;" type="password" id="password" name="password" placeholder="Enter passsword" required><br><br>
            <label style="font-size: 30px;" for="repassword">Re-Password:</label>
            <input style="font-size: 20px;" type="password" id="repassword" name="repassword" placeholder="Re-Enter passsword" required><br><br>

            <label style="font-size: 30px;" for="usertype">User type:</label>

<select style="font-size: 20px;" name="usertype" id="usertype" required>
  <option value="user">user</option>
  <option value="admin">admin</option>
  <option value="publisher">publisher</option>
  
</select>
           <p> Already have an account??? go to <a href="log.php">login page</p><br>
           <input type="submit" id="btn" value="signup" name="submit"/>
  </fieldset>
  </form>

  <script>  
function validateform(){  
var fname=document.myform.fname.value; 
var lname=document.myform.lname.value;  
var password=document.myform.password.value;  
  
if (fname==null || fname==""){  
  alert("Name can't be blank");  
  return false;  
}
 if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  var repassword=document.myform.repassword.value;  
  
if(password==repassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  

}  
</script>  
</body>
</html>