<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php
 include 'logins.php'
  ?>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
         <img src="riet.jpg" alt="">
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
      <img style="width: 80px;" src="logo.png">
      <span class="h1 fw-bold mb-0"></span>
    </div>

    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div style="margin-left: 120px; font-size: xx-large; font-family: sans-serif; " class="">Login</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <p>CNIC</p>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                
                <input type="text" placeholder="CNIC" name="cnic" required>
              </div>
             <p>Password</p>
              <div class="input-box">
                
                <i class="fas fa-lock"></i>
                
                <input type="password" placeholder=" Password" name="password" required>
              </div>
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span> 
              <div style="margin-left: 230px;" class="text"><a href="forget.php">Forget password?</a></div>
              <div class="button input-box">
                <input   style="width: 70px; height: 50px; margin-left: 150px;" type="submit"  value= "Login" name="Login">
                
              
              </div>
             
            </div>
        </form>
      
      </form>
    </div>
    </div>
</body>
</html>