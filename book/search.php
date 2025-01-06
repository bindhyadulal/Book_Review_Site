<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book review</title>
    

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> bookly </a>

        <form action="search.php" method="POST" class="search-form">
        <input type="text" name="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        
        
        <div id="login-btn" > <a href="log.php" class="fas fa-user"></a></div>
    </div>

    </div>
    <div class="header-2">
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="fiction.php">Fiction</a>
            <a href="Nonfiction.php">Non Fiction</a>
            <a href="Romantic.php">Romantic</a>
            <a href="Horror.php">Horror</a>
            <a href="More.php">More</a>
        </nav>
    </div>

    

</header>

<!-- header section ends -->
<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#fiction" class="fas fa-list"></a>
    <a href="#Non fiction" class="fas fa-list"></a>
    <a href="#Romantic" class="fas fa-list"></a>
    <a href="#Horror" class="fas fa-list"></a>
    <a href="#More" class="fas fa-list"></a>
</nav>






<?php
  include "connect1.php";
  if($_POST["search"]==""){
    echo "<h2>NO result Found</h2>";
    echo "<h2><a href='home.php'>Back</a></h2>";
  }else{
    $search=trim($_POST["search"]);

    $query=$conn->prepare("SELECT * FROM book WHERE title like '%$search%' OR description like '%$search%' OR writer  like '%$search%' OR category  like '%$search%' ");
    $query->execute(array());
    $control=$query->fetchAll(PDO::FETCH_OBJ);
    $count=$query->rowCount();
    if($count  > 0){?>
        <table>
        
           
            <?php
              foreach($control as $list){?>
              <style>
p img {
  float: right;
  border: 10px  black;
  
  margin-right: 80px;
  margin-bottom: 20px;
  padding-right: 10px;
  padding-left: 20px;
}
</style>
    
              <tr>
              <div class="book" style="padding-left: 40px; padding-top:40px; width:85%;">
              <h2 style="font-size:30px"><?php echo $list->title;?></h2> <br>
              <p style="font-size:20px"> <?php echo $list->writer;?></p> <br>
              <p style="font-size: 15px;">
                  Rating:<?php echo  $list->rating;?></p>
               <br>
                <p style="font-size: 15px;"><img src= "<?php echo $list->image;?>" width="380" height="500" > </p>
                 <p style="font-size: 19px;"><?php echo $list->description;?></p> 
 


              
        </div>


              <?php } ?>
        </table>      

    <?php } else{
        echo "<h2> NO result</h2>";
        echo "<h2><a href='home.php'>Back</a></h2>";
    }
  }
?>


<!---friction------>
<?php
include "database.php";
$sql = "SELECT * FROM book ";
$result = $conn->query($sql);

  

?>
<br><br><br><div class="small-container">
    <h1 class="title" > Some more books </h1>

    <div class="row">
    <?php
   while($row = mysqli_fetch_assoc( $result)) {
    if($row["id"]%2===0 && $row["id"]<=8){
  
    ?>
    <div class="column"  style="display:inline; width:70%;">
    
  <img width=90% height=290px src=" <?php echo $row["image"]; ?>"  >
  <h2> <?php echo  $row ['title'];?></h2>
  <p><?php echo  $row['writer'];?></p>
  <div class="rating">
  <i class="fa fa-star"></i>
  <i><?php echo  $row['rating'];?></i>
 
  </div>
  
  
  </div>
  
  <?php
    }
   }
  ?>
 

  </div>
</div>
</div>
<!---icon--->
<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fa fa-address-book"></i>
        <div class="content">
            <h3>Address</h3>
            <p>You can find us</p>
        </div>
    </div>

    <div class="icons">
        <i class="fa fa-phone"></i>
        <div class="content">
            <h3>phone</h3>
            <p>Contact Us 1234567890</p>
        </div>
    </div>

    <div class="icons">
        <i class="fa fa-envelope"></i>
        <div class="content">
            <h3>Email</h3>
            <p>Bookly@gmail.com</p>
        </div>
    </div>

    <div class="icons">
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-instagram"></i></a>
        <div class="content">
            <h3>Our social media</h3>
            <p>Bookly</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
