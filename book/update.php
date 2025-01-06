<?php
include("database.php");




$id = "";
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    
}

if($id !== "") {
    
    if(is_numeric($id)) {
        
        $sq = "SELECT * FROM book WHERE id=$id";
        
        $select = mysqli_query($conn, $sq);
        if(mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_assoc($select);
        } else {
            echo "No rows fetched for ID: $id";
            exit; // Stop further execution
        }
    } else {
        echo "ID is not numeric: $id";
        exit; // Stop further execution
    }
}

// Rest of your code for processing form submission and displaying HTML form goes here...
?>
<?php

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $writer = $_POST['writer'];
    $rating = $_POST['rating'];
    $image = $_POST['images'];
    $des = $_POST['descr'];
    $update = "UPDATE book SET title='$title', category='$category', writer='$writer', rating='$rating', image='$image', description='$des' WHERE id=$id";
    $upload = mysqli_query($conn, $update);
    if($upload){
        echo "Book updated successfully";
        header("Location: book.php");
        exit(); // Ensure script stops execution after redirection
    } else {
        echo "Error updating book: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book review</title>

    <style>
        /* Your CSS styles */
    </style>
</head>
<body style="padding-left:25%; padding-right:25%;">
<header style="background-color: purple; text-align:center;">
    <nav>
        <h1 style="color: white; font-size: 30px; margin-top:50px; padding:25px;">Update Book</h1>
    </nav>
</header>

<fieldset style="height: 410px;">
<form align="center" action="update.php?edit=<?php echo $_GET['edit']; ?>" method="POST">

   
    <label for="title">Title :</label>
    <input type="text" id="title" name="title" placeholder="Enter title" value="<?php echo $row['title']; ?>" required><br><br>
    
    <label for="category">Category:</label>
    <input type="text" id="category" name="category" placeholder="category" value="<?php echo $row['category']; ?>" required><br><br>
    
    <label for="writer">Writer:</label>
    <input type="text" id="writer" name="writer" placeholder="Writer" value="<?php echo $row['writer']; ?>" required><br><br>
    
    <label for="rating">Rating:</label>
    <input type="text" id="rating" name="rating" placeholder="rating" value="<?php echo $row['rating']; ?>" required><br><br>
    
    <label for="images">Image:</label>
    <input type="text" id="images" name="images" placeholder="Location of image" value="<?php echo $row['image']; ?>" required><br><br>
    
    <label for="descr">Description:</label>
    <textarea name="descr" rows="5" cols="30" minlength="50" maxlength="5000"><?php echo $row['description']; ?></textarea><br><br>
     
    <input type="submit" id="btn" value="submit" name="submit"/><br><br>
    <a href="admin.php" id="btn">Go back</a>
</form>
</fieldset>

</body>
</html>
