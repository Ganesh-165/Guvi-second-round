<?php
    $conn = mysqli_connect('localhost','root','','login_db') or die("could Not Connect to Database");
    session_start();
    if(isset($_POST["submit"])){
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $result = mysqli_query($conn,"SELECT * FROM login_form WHERE email = '$email'");
        if(mysqli_num_rows($result)>0){
           $res= mysqli_fetch_array($result);
           if($password === $res['password']){
                header('location:../profile.html');
           }
           else{
                echo '<script>alert("Password Does Not Match")</script>';
           }
        }
        else{
            echo '<script>("User Does Not Exist")</script>';
        }
    }
?>