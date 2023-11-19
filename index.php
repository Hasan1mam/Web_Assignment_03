<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="style.css">


    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
</head>
<body>
   <header class="header" id="header">
      <nav class="nav containter">
         <a href="#" class="nav__logo">
            <span class="nav__logo-circle">H</span>
            <span class="nav__logo-name">Hasan Imam.</span>
         </a>
       

         <div class="nav__buttons">

         <!-- Theme Button  -->
         <i class="ri-moon-line change-theme" id="theme-button"></i>
            <!-- Toggle Button -->
          

         </div>
      </nav>
      
   </header>


  <section class="contact section" id="contact">
    <div class="contact__container grid">
       <div class="contact__data">
          <h2 class="section__title-2">
             <span>Contact Me.</span>
          </h2>

          <p class="contact__description-1">
             I will read all emails. Send me any 
             message you want and I'll get back to you.
          </p>
          <p class="contact__description-2">
             I need your <b>Name</b> and <b>Email Address</b>, but 
             you won't receive anything other than your reply. 
          </p>
          <div class="geometric-box"></div>
       </div>
       <div class="contact__mail">
          <h2 class="contact__title">
             Send Me A Message
          </h2>
          <form action="" class="contact__form" id="contact-form" method="post">
             <div class="contact__group">
                <div class="contact__box">
                   <input type="text" name="user_name" class="contact__input" id="name" required placeholder="First Name">
                   <label for="name" class="contact__label">First Name</label>
                </div>

                <div class="contact__box">
                   <input type="email" name="user_email" class="contact__input" id="email" required placeholder="Email Address">
                   <label for="email" class="contact__label">Email Address</label>
                </div>

               

             </div>

             <div class="contact__box">
                <input type="text" name="user_subject" class="contact__input" id="subject" required placeholder="Subject">
                <label for="subject" class="contact__label">Subject</label>
             </div>

             <div class="contact__box contact__area">
                <textarea name="user_message" id="message"  class="contact__input" required placeholder="Message"></textarea>
                <label for="message" class="contact__label">Message</label>
             </div>
             <p class="contact__message" id="contact-message"></p>

            
             <input type="submit" class="contact__button button" name="submit"  >
              
               

          </form>
          <?php
          if (isset($_POST['submit'])) {
           $userName = $_POST['user_name'];
           $userEmail = $_POST['user_email'];
           $userSubject = $_POST['user_subject'];
           $userMsg = $_POST['user_message'];
           // echo $userName;
           $formQuery="INSERT INTO registration (Name, Email, 
            Subject, Message) VALUES 
           ('$userName', '$userEmail', '$userSubject', '$userMsg')";
           $formTable = mysqli_query($conn, $formQuery);}
           ?>


       </div>
          <div class="contact__social">
             <img src="assets/img/curved-arrow.svg" alt="" class="contact__social-arrow">
             
             <div class="contact__social-data">
                <div>
                   <p class="contact__social-description-1">
                      Does Not Send Emails
                   </p>

                   <p class="contact__social-description-2">
                      Write me on my Social networks 
                   </p>
                </div>

                <div class="contact__social-links">
                   <a href="#" target="_blank" class="contact__social-link">
                      <i class="ri-facebook-circle-line"></i>
                   </a>

                   <a href="#" target="_blank" class="contact__social-link">
                      <i class="ri-instagram-line"></i>
                   </a>

                   <a href="#" target="_blank" class="contact__social-link">
                     <i class="ri-linkedin-box-line"></i> 
                   </a>

                </div>
             </div>
          </div>
       
       <div class="contact__social">

       </div>
    </div>
 </section>
</main>

<script src="main.js"></script>
</body>
</html>