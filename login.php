<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login and registration form</title>
</head>
<body>
    <div class="hero" style="background-image: url(img/banner.jpeg);">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="Register()">Register</button>
            </div>
            <div class="social-icons">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <form action="" method="get" id="login" class="input-group">
                <input type="text" class="input-field" name="user_Id" placeholder="User Id" required>
                <input type="text" class="input-field"name="PWD" placeholder="Enter Password" required>
              <label for="">Remember</label>  <input type="checkbox" class="chech-box">
                <button type="submit" class="submit-btn" name="login_submit">Log in</button>
            </form>  
            <form id="register" class="input-group">
                <input type="text" class="input-field"name="User_Id" placeholder="User Id" required>
                <input type="email" class="input-field"name="Mail" placeholder="Email Id" required>
                <input type="text" class="input-field"name="Password" placeholder="Enter Password" required>
              <label for="">I agree to the terms & conditions</label>  <input type="checkbox" class="chech-box">
                <button type="submit" class="submit-btn" name="register_submit">Register</button>
            </form>
        </div>
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function Register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }


    </script>
</body>
</html>
<?php
require "database.php";
$obj = new db();

if(isset($_REQUEST['login_submit']))
{
    $User_name = $_REQUEST['user_Id'];
    $Password = $_REQUEST['PWD'];

    $r = $obj->sign_in($User_name,$Password);
    
    
    
}
if(isset($_REQUEST['register_submit']))
{
    $userid = $_REQUEST['User_Id'];
    $email = $_REQUEST['Mail'];
    $pwd = $_REQUEST['Password'];

    $r = $obj->sign_up($userid,$email,$pwd); 

}

?>