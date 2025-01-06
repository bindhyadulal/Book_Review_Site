
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
    

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

    

</head>
<body>
    
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
            <a href="#home">Home</a>
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Know about Books</h3>
            <p>Dont know which book to read. Bookly is here.You can know about the bestest book. Visit our page to learn about books.</p>
            <a href="#he" class="btn">Read Now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" ><img style="padding-right:20px;padding-left:40px;" src="image/fiction1.jpg" alt=""></a>
                <a href="#" ><img style="padding-right:20px;" src="image/horror1.jpg" alt=""></a>
                <a href="#" ><img src="image/ronam1.jpg" alt=""></a>
                
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>
<!-- home section ense  -->


<!---friction------>
<div id="he">

<div class="small-container">
    <h1 class="title" > Top books  </h1>

    <div class="row">
    <?php
   while($rows = mysqli_fetch_assoc($result)) {
    $id=rand(1,30);
    if($rows["id"]<=4){
  
    ?>
    <div class="column"  style="display:inline; width:70%;">
    
    <a href='detail.php?id=<?php echo $rows['id'];?>'><img width=90% height=290px src=" <?php echo $rows["image"]; ?>"  ></a>
  <h2> <?php echo  $rows ['title'];?></h2>
  <p><?php echo  $rows ['writer'];?></p>
  <div class="rating">
  <i class="fa fa-star"></i>
  <i><?php echo  $rows ['rating'];?></i>
 
  </div>
     
  
  </div>
  
  <?php
    }
   }
  ?>
 

  </div>
</div>
  
<!--non fictional-->
<?php
include "database.php";
$sql = "SELECT * FROM book ";
$result = $conn->query($sql);

  

?>
<br><br><br><div class="small-container">
    

    <div class="row">
    <?php
   while($row = mysqli_fetch_assoc($result)) {
    if($row["id"]>4 && $row["id"]<=8){
  
    ?>
    <div class="column"  style="display:inline; width:70%;">
    
    <a href='detail.php?id=<?php echo $row['id'];?>'><img width=90% height=290px src=" <?php echo $row["image"]; ?>"  ></a>
  <h2> <?php echo  $row['title'];?></h2>
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
<!---Horror-->
<?php
include "database.php";
$sql = "SELECT * FROM book ";
$result = $conn->query($sql);

  

?>
<br><br><br><div class="small-container">
    

    <div class="row">
    <?php
   while($roww= mysqli_fetch_assoc($result)) {
    if($roww["id"]>8 && $roww["id"]<=12){
  
    ?>
    <div class="column"  style="display:inline; width:70%;">
    
  <a href='detail.php?id=<?php echo $roww['id'];?>'><img width=90% height=290px src=" <?php echo $roww["image"]; ?>"  ></a>
  <h2> <?php echo  $roww['title'];?></h2>
  <p><?php echo  $roww['writer'];?></p>
  <div class="rating">
  <i class="fa fa-star"></i>
  <i><?php echo  $roww['rating'];?></i>
 
  </div>
  
  
  </div>
  
  <?php
    }
   }
  ?>
 

  </div>
</div>

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
</div>



</body>
</html>