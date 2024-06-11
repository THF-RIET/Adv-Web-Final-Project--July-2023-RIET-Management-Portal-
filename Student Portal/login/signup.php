
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> sign up </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
include 'signups.php'
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
      <img style="width: 100px;" src="logo.png">
      <span class="h1 fw-bold mb-0"></span>
    </div>

    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div style="margin-left: 120px; font-size: xx-large; font-family: sans-serif; " class="">sign up</div>
          <form action="" method="post">
            <div class="input-boxes">
              <p>Full Name</p>
              <div class="input-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
                
                <input type="text" placeholder="Enter your  Full name" name="fullname" required>  
          </div>
          <form action="" method="post">
            <div class="input-boxes">
              <p>CONTACT</p>
              
              <div class="input-box">
                <img style="width: 40px; margin-top: 1px;" src="pakistan.png" alt="">
                <input type="text" placeholder=" Enter vaild contact number" name="contact" required>
              </div>
              <form action="" method="post">
                <div class="input-boxes">
                  <p>CNIC</p>
                  <div class="input-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                      </svg>
                    
                    <input type="text" placeholder=" Enter your vaild CNIC" name="cnic" required>
                  </div>
             <p>Password</p>
              <div class="input-box">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                  <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                  <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                  <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                </svg>
                
                <input type="password" placeholder="Enter strong password" name="password" required>
              </div>
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span> 
              <div style="margin-left: 230px;" class="text"><a href=""></a></div>
              <div class="button input-box">
                <input style="width: 70px; height: 50px; margin-left: 150px;" type="submit" value="sign up" name="signup">
              </div>
             
            </div>
        </form>
     
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>