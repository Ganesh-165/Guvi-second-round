
<?php
$conn = mysqli_connect('localhost','root','','login_db') or die("could Not Connect to Database");
session_start();
    if(isset($_POST['submit'])){
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['conformPassword']);
        $query = "SELECT * FROM login_form WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
            header('location:../index.html');
        }else{
            if($password != $cpassword){
                $error[] = 'password not matched!';
            }else{
                $insert = "INSERT INTO login_form (email,password) VALUES('$email','$password')";
                mysqli_query($conn, $insert);
                header('location:../login.html');
            }
        }
    }
?>
