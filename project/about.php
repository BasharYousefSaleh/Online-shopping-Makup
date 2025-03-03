<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
<!-- adding header file -->
</head>
<body>
   <?php include 'header.php'; ?>

   <div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<!-- about informations -->
   <section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us? </h3>
         <p>We are distinguished by providing a wide variety of high-quality makeup products, with distinguished customer service that cares about achieving your complete satisfaction and meeting all your aesthetic needs.. </p>
         
         <a href="contact.php" class="btn">contact us </a>
      </div>

   </div>

</section>

<!-- clients reviews section -->
<section class="reviews">
   
   <h1 class="title">client's reviews</h1>
   <div class="box-container">

   <div class="box">
         <img src="images/pic1.png" alt="">
         <p> ############## </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>BASHAR</h3>
      </div>
      
      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p> ############## </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mr. Y</h3>
      </div>

      <div class="box">
         <img src="images/pic2.jpg" alt="">
         <p> ############## </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Miss. A</h3>
      </div>


      <div class="box">
         <img src="images/pic_2.png" alt="">
         <p> ############## </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mr. Z</h3>
      </div>


      <div class="box">
         <img src="images/pic3.png" alt="">
         <p> ############## </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Miss. A</h3>
      </div>

   </div>

</section>

<!-- popular authors section -->
<section class="authors">

   <h1 class="title">popular authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Rob Dricks</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Micheal Van Rooy</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Ashapurna Devi</h3>
      </div>  

   </div>

</section>



   <?php include 'footer.php'; ?>

   <script src="css/script.js?v=<?=$version?>"></script>
   
</body>
</html>