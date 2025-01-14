<?php

include "database.php";
$sql = "SELECT * FROM book ";
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


    </style>

    

</head>
<body >
<div style="padding-left:25%; padding-right:25%;">
<header  style="background-color: purple; text-align:center;">

        <nav >
        <h1 style="color: white; font-size :20px;  ">Add book</h1>
        
        </nav>
        
    
</header>

<fieldset style="height: 300px;">
<form align="center" action="product1.php" method="POST">
   
<label  for="title">Title :</label>
            <input type="text" id="title" name="title" placeholder="Enter title"required><br><br>
            <label  for="catrgory">Category:</label>
            <input  type="text" id="category" name="category" placeholder="category"required><br><br>
            <label  for="writer">Writer:</label>
            <input  type="text" id="writer" name="writer" placeholder="Writer"required><br><br>
            <label for="rating">Rating:</label>
            <input  type="text" id="rating" name="rating" placeholder="rating" required><br><br>
            <label  for="images">Image:</label>
            <input  type="text" id="images" name="images" placeholder="Location of image" required><br><br>
            <label  for="descr">Description:</label>
            <textarea name="descr" rows="5" cols="30" minlength="50" maxlength="5000">
            review............
</textarea><br>
     
           
           <input type="submit" id="btn" value="submit" name="submit"/>
  </fieldset>
  </form>
  
</div>
<div style="padding-top:10px;">
    <table >
        <tr style="background-color: lightgray;">
            <th style="width:5%;">id</th>
            <th style="width:13%">title</th>
            <th style="width:8%;">Category</th>
            <th style="width:8%;">rating</th>
            <th  style="width:13%;">Writer</th>
            <th  style="width:8%;">image</th>
            <th  style="width:22%;"> description</th>
           
        </tr>
        <?php
   while($rows = mysqli_fetch_assoc($result)){

    ?>
    
    <tr style="height:60px;">
    <td class="ellipsis"  style="width:5%;"><?php echo $rows['id'];?></td>
            <td class="ellipsis" style="width:15%"><?php echo $rows['title'];?></td>
            <td  class="ellipsis" style="width:8%;"><?php echo $rows['category'];?></td>
            <td class="ellipsis" style="width:8%;"><?php echo $rows['rating'];?></td>
            <td class="ellipsis" style="width:16%;"><?php echo $rows['writer'];?></td>
            <td class="ellipsis" style="width:8%;"><img width="30px" height="40px"  src="<?php echo $rows['image'];?>"></td>
            <td class="ellipsis" style="width:22%; height:50px;"> <span ><?php echo $rows['description'];?><span></td>
            
    </tr>
    

    <?php
    
   }
   ?>
    </table>
</div>
    </body>
</html>