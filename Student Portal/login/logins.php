<?php
include 'db.php';

if(isset($_POST['Login'])) { // Use isset() to check if the form is submitted


    $cnic = $_POST['cnic'];
    $password = $_POST['password'];


    $query = "SELECT * FROM  users WHERE cnic = '$cnic' AND password = '$password'";


    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    if ($count==1) {
        header("Location:../index.php?cnic=$cnic");
        echo "user registered successfully ";
    } else {
        echo "Unsuccessfull Login";
    }

}
?>