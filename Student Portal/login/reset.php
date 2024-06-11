<?php
// Include your database connection file
include('db.php');

// Function to generate a random password
function generateRandomPassword($length = 8) {
    return bin2hex(random_bytes($length));
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if either CNIC or password is provided
    if (isset($_POST['cnic']) && !empty($_POST['cnic'])) {
        $cnic = $_POST['cnic'];
        $password = $_POST['password'];

        // Check if the CNIC exists in the database
        $query = "SELECT * FROM users WHERE cnic = '$cnic'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // CNIC exists, generate a new password
            // $newPassword = generateRandomPassword();

            // Update the user's password in the database
            // $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateQuery = "UPDATE users SET password = '$password' WHERE cnic = '$cnic'";
            $updateResult = mysqli_query($connection, $updateQuery);

            if ($updateResult) {
                // Password updated successfully
                echo "Password reset successfully. Your new password is:";
            } else {
                // Error updating password
                echo "Error resetting password. Please try again.";
            }
        } else {
            // CNIC not found in the database
            echo "CNIC not found. Please check your CNIC and try again.";
        }
    } elseif (isset($_POST['password']) && !empty($_POST['password'])) {
        // Handle password reset using the password (you might implement a different logic here)
        $password = $_POST['password'];
        // Add your password reset logic using the password
    } else {
        // Both CNIC and password are empty
        echo "Please provide either your CNIC or password to reset.";
    }
}
?>

<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> reset </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

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
    <div class="px-5 ms-xl-4">
      <img style="width: 50px;" src="logo.png" alt="">
      <span class="h1 fw-bold mb-0"></span>
    </div>

    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div style="margin-left: 90px; font-size: xx-large; font-family: sans-serif; " class="">Reset Password</div>
            <form action="" method="post">
            <div class="input-boxes">
              <p>CNIC</p>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                
                <input type="text" placeholder="Enter your registered CNIC " name="cnic" required>
              </div>
             
              <div class="input-boxes">
                <p>New Password</p>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                  
                  <input type="text" placeholder="Enter new password" name="password"  required>
                </div>
             
              </div>
              <div class="button input-box">
                <input style="width: 70px; height: 50px; margin-left: 150px;" type="submit" value="Reset" name="reset">
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