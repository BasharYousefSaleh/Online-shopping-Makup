<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

// إذا تم إرسال الرسالة، قم بإضافتها إلى جدول الرسائل
if(isset($_POST['send'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
      // إعادة تحميل الصفحة بعد إرسال الرسالة لتحديث الجدول

      header('Location: contact.php');
      exit();
   }
}

// استعلام لاستعراض الرسائل
$get_messages = mysqli_query($conn, "SELECT * FROM `message` WHERE user_id = '$user_id' ORDER BY id DESC") or die('query failed');

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css?v=<?=$version?>">

</head>
<body>
   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>contact us</h3>
      <p><a href="home.php">home</a> / contact </p>
   </div>

   <section class="contact">
      <form action="" method="post">
         <h3>say something!</h3>
         <input type="text" name="name" required placeholder="enter your name" class="box">
         <input type="email" name="email" required placeholder="enter your email" class="box">
         <input type="number" name="number" required placeholder="enter your number" class="box">
         <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </section>

   <!-- جدول عرض الرسائل -->
   <section class="messages">
      <h3>Your Messages</h3>
      <table>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Message</th>
         </tr>
         <?php while($row = mysqli_fetch_assoc($get_messages)) { ?>
            <tr>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['number']; ?></td>
               <td><?php echo $row['message']; ?></td>
            </tr>
         <?php } ?>
      </table>
   </section>

   <?php include 'footer.php'; ?>

   <script src="css/script.js?v=<?=$version?>"></script>
   
</body>
</html>
