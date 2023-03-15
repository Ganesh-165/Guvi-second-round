<?php
    $conn = mysqli_connect('localhost','root','','login_db') or die("could Not Connect to Database");
    session_start();
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['conformPassword']);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $res = "UPDATE login_form SET password='$password' WHERE email='$email'";
        mysqli_query($conn, $res);
        header('location:../profile.html');

    }
?>