<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$errorRePassword = false;
$errUsername = false;
$errRegister = false;
session_start();
if(isset($_SESSION['user'])){
    header('location:index.php');
}
  if(isset($_POST['name'])){
      require_once('database/mysql.php');
      $name = $_POST['name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $re_password = $_POST['re-password'];
      if($password == $re_password){
          $connect = connect();
          //check username
          $query = "SELECT id FROM users WHERE username = '$username'";
          $result = $connect->query($query);
          if($result->num_rows > 0 ){
              $errUsername = true;
          }else{
              $password = md5($password);
              $query = "INSERT INTO users (username, fullname, email, password) VALUES ('$username','$name','$email','$password')";
              $result = $connect->query($query);
              if($result){
                  header('location:login.php');
              }else{
                  $errRegister = true;

              }
          }
      }else{
          $errorRePassword = true;
      }
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diễn đàn</title>
    <link href="/template/css/global/style.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/header.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/css/page/register.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <div class="container-header">
        <div class="title">
            <h2>Diễn đàn</h2>
        </div>
        <div class="user">
            <div class="user-login">
                <h2><a href="/login.php">Login</a></h2>
            </div>
            <div class="user-register">
                <h2><a href="register.php">Register</a></h2>
            </div>
        </div>
    </div>
</header>
<div class="body">
    <form action="" method="post">
        <div class="register-container">
            <div class="register">
                <h2>REGISTER</h2>
                <?php if($errRegister)
                    echo '<span style="color: red; display: block">Không đăng ký thành viên được</span>';
                    ?>
                <div class="input">
                    <div class="name">
                        <input type="text" name="name" placeholder="name" value="Le thi thuy">
                    </div>
                    <div class="username">
                        <input type="text" name="username" placeholder="username" value="thuyle">
                        <?php if($errUsername){
                            echo '<span style="color: #ff0000; display: block">Username đã tồn tại</span>';
                        }?>
                    </div>
                    <div class="email">
                        <input type="email" name="email" placeholder="email" value="thuy@gmail.com">
                    </div>
                    <div class="password">
                        <input type="password" name="password" placeholder="password" value="chutchut">
                    </div>
                    <div class="re-password">
                        <input type="password" name="re-password" placeholder="comfirm password" value="chutchut">
                        <?php
                        if($errorRePassword){
                            echo '<span style="color: red; display:block">Nhập lại mật khẩu không khớp</span>';
                        }
                        ?>
                    </div>
                </div>
                <div class="sign-in">
                    <button>Register</button>
                </div>
            </div>
        </div>
    </form>
</div>

<footer>
    <p>footer</p>
</footer>
</body>
</html>
