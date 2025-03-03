<?php

include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css?v=<?=$version?>">



</head>
<body> 

   <?php include 'NRheader.php'; ?>

   <section class='home'>
      
   <div class="content">
      <h3>Book to your door.</h3>
      <a href="about.php" class="white-btn">perceive more => </a>
   </div>

   </section>


   <section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">
   <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?> 
   </div>

   <div class="load-more" style="margin-top: 1rem; text-align:center">
      <a href="shop.php" class="option-btn">load more -> </a>
   </div>


</section>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Online Book Shop in Bangladesh. to know more about us click below -> </p>
         
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p> click below -> </p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





   <?php include 'footer.php'; ?>

   <script src="css/script.js?v=<?=$version?>"></script>
   
</body>
</html>