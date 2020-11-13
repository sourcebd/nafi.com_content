<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style>
a:link, a:visited {
  background-color: green;
  color: white;
  font-weight: 600;
  padding: 14px 25px;
  text-decoration: none;
  text-transform: uppercase;
	border-radius: 50px;
  display: inline-block;
  border: 3px solid white;
  transition: background-color 0.3s, border 0.3s, color 0.3s;
  margin-left:40px;
  margin-bottom:30px;
  transition-property: background;
}

a:hover, a:active {
  color: yellow;
  background-color: black;
  border: 3px solid yellow;
  transition: background-color 0.3s, border 0.3s, color 0.3s;
}

::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}
</style>
  </head>
  
  <body>
  
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
      <h6 style="font-size:10px; font-family: verdana; color: white ; margin-left:-20px; margin-bottom:-20px;"><?php include 'Header/header.php';?></h6>
        <div><i class="fas fa-map-marker-alt"> Dhaka, Bangladesh</i></div>
        <div><i class="fas fa-envelope"> nativetube71@gmail.com</i></div>
        <div><i class="fas fa-clock"> Available Anytime!</i></div>
        <div><a class="fas fa-phone" href="tel: 01869510882" style="font-size:20px; text-align:center"> Contact</a></div>
      </div>

      <div class="contact-form">
      <ul class="main-nav animated slideInDown" id="check-class">
        <li><h1 style="font-size:40px; color:#00E9FF; font-family: calibri; text-align:center">SEND EMAIL</h1></li>
        </ul>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>