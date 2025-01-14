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
<header  style="background-color: pink; text-align:center;">

        <nav >
        <h1 style="color: white; font-size :30px; margin-top:50px; padding:25px;">Login</h1>
        
        </nav>
        
    
</header>

<fieldset style="height: 300px;">
<form align="center" action="loginprocess.php" method="POST">
   
  <label for="email" style="font-size: 30px;">Username:</label>
  <input type="text" placeholder="Enter Username" name="email" style="font-size: 20px;"><br><br><br>
  <label for="psword"  style="font-size: 30px;">Password:</label>
  <input type="Password" placeholder="Enter Password" name="pass" style="font-size: 20px;">
  <p>don't have an account ? <a href="signin.php">create one</a></p><br>
  <input   type="submit" id="btn" value="Login" name="submit"/>
  </fieldset>
  </form>
</body>
</html>