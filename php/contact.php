

<?php
session_start();

/* $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
} */

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
 
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email'  AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email,  message) VALUES('$user_id', '$name', '$email',  '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contactus.css">
</head>
<body>
    <?php include('navbar.php'); ?>

    <!-- Contact Us Section -->
    <section class="contact-us">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <p>Phone: 0552635980</p>
                <p>Email: info@educationcenter.com</p>
                <p>Address: dubai main road. dubai kurukku sandhu, dubai</p>
            </div>
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="php/contact.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="cta-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
