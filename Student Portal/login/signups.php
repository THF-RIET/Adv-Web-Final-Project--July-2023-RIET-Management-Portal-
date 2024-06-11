<?php
include 'db.php';

if(isset($_POST['signup'])) { // Use isset() to check if the form is submitted

    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $cnic = $_POST['cnic'];
    $password = $_POST['password'];


    $query = "INSERT INTO users (fullname, cnic, contact, password) VALUES ('$fullname', '$cnic', '$contact', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED: ' . mysqli_error($connection));
    } else {
        echo "User registered successfully";
    }

    mysqli_close($connection); // Close the database connection
}
?>
