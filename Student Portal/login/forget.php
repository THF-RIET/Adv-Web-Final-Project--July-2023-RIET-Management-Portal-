<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Forget Form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
.alert,
.success
{
width: 400px;
text-align:center;
position:absolute;
top: 30px;
left: 461px;
transform:translateX(-50%);
color: whitesmoke;
padding: 8px 0;
 
}
.alert{background-color: rgb(252, 59, 59);}
.success{background-color:rgb(44, 158, 24) ;}


   </style>
<body>
  <?php

  ?>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img  src="riet.jpg" alt="">
        <div class="text">
          <div class="background-text">
            Welcome To RAAS Institute of Emerging Technologies
        </div>

        <div>
          <h4 class="text-upper">For Password related queries contact concerned <h4 style="color: white; margin-left: 130px;">Admission Department</h4> </h4>
        </div>
         
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
         
        </div>
      </div> 
    </div>
    <div class="pt-5 ms-xl-4">
      <img style="width: 50px;" src="logo.png" alt="">
      <span class="h1 fw-bold mb-0"></span>
    </div>

    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div style="margin-left: 90px; font-size: xx-large; font-family: sans-serif; " class="">Forget Password</div>
            <form action="" method="post">
            <div class="input-boxes">
              <p>Name</p>
              <div class="input-box"> 
                <i class="fas fa-envelope"></i>
                <input type="text" id="name"  name="name" placeholder="Please Enter Your Verified Name" required>
             </div>
              <p>Email</p>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="email" name="email" placeholder="Please Enter your Verified Email" required>
             </div>
              <p>CNIC</p>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                 <input type="text" id="nic"  name="nic" placeholder="Please Enter your Verified NIC" required>
              </div>
              </div>
              <div class="button input-box">
                <input id="btn"  style="width: 70px; height: 50px; margin-left: 300px;" type="submit" value="Send" name="send">
              </div>
             </div>
        </form>
      </div>
     </div>
    </div>
    </div>
  </div>
</body>
</html>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{

  $name =$_POST['name'];
  $email =$_POST['email'];
  $nic =$_POST['nic'];

  require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

  //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aminarshad178@gmail.com';                     //SMTP username
    $mail->Password   = 'ojdwmkwyhavekdic';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aminarshad178@gmail.com', 'Forget Password');
    $mail->addAddress($email, 'verification Email');     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Forget Form';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender Nic - $nic";


    $mail->send();
    echo "<div class='success'>Message has been Sent!</div>";
} catch (Exception $e) {
  echo "<div class='alert'>Message Could't Sent!</div>";
}

}


?>