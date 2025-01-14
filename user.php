<?php

include "database.php";
$sql = "SELECT * FROM user ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book review</title>

    <style>
    
        input {
  width: 50%;
  
}
#btn{
    width: 150px;
    height: 30px;
    border-radius: 4px;
    font-weight: bold;
    border: none;
    background-color:purple ;
    color: white;
    font-size: 15px;
}
form p{
    padding-top: .8rem;
    color:lightsalmon;
    font-size: 1.5rem;
}
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
.ellipsis {
    position: relative;
}
.ellipsis:before {
    content: '&nbsp;';
    visibility: hidden;
}
.ellipsis span {
    position: absolute;
    left: 0;
    right: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.but{
    
    width: 150px;
    height:20px;
    background-color:purple ;
   text-decoration: none;
    color: white;
    margin-left: 20px;
    font-size: 20px;
}
.but:hover{
    background:rgb(75, 13, 97);
}
    </style>

    

</head>
<body >
<div >
<header  style="background-color: purple; text-align:center;">

        
        <h1 style="color: white; font-size :40px;  ">User</h1>
        
</header>
</div>

<div style="padding-top:10px;">
    <table >
        <tr style="background-color: lightgray;">
            <th style="width:5%;">id</th>
            <th style="width:13%">First Name</th>
            <th style="width:13%;">Last Name</th>
            <th style="width:8%;">Email</th>
            <th  style="width:13%;">Type</th>
            <th  style="width:13%;">Action</th>
        </tr>
        <?php
   while($rows = mysqli_fetch_assoc($result)){

    ?>
    
    <tr style="height:60px;">
    <td class="ellipsis"  style="width:5%;"><?php echo $rows['id'];?></td>
            <td class="ellipsis" style="width:15%"><?php echo $rows['fname'];?></td>
            <td  class="ellipsis" style="width:8%;"><?php echo $rows['lname'];?></td>
            <td class="ellipsis" style="width:8%;"><?php echo $rows['email'];?></td>
            <td class="ellipsis" style="width:16%;"><?php echo $rows['usertype'];?></td>
            
            <td style="width:15%;">

            
            <a href="deleteus.php?delete=<?php echo $rows['id'];?>" class="but">delete</a>
        </td>
    </tr>
    

    <?php
    
   }
   ?>
    </table>
</div>
</body>
</html>