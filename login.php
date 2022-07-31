<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#f7882f">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Đăng nhập</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
<!---------------------Main---------------------------------------------------------->
  <main>
  <h1>ĐĂNG NHẬP</h1>
    <form action="login_submit.php" method="POST">
            <label style="color: #8f8f8f"><i class="fas fa-user"></i> Tên đăng nhập/Tài khoản email<span style="color:crimson">*</span></label>
            <input required type="text" name="username" placeholder="Email/tên đăng nhập">

            <label style="color: #8f8f8f"><i class="fas fa-lock"></i> Mật khẩu <span style="color:crimson">*</span></label>
            <input required type="password" name="password" placeholder="Mật khẩu">

        <div class="dktk" style="color: #8f8f8f"><em>Bạn chưa có tài khoản?
          <a href="dangki.php" style="color: darkturquoise; text-decoration: underline;">Đăng ký</em></a>
        </div>
    <button class="dangnhap" name="submit" type="submit">Đăng nhập</button>
    <div class="container" style="background-color:#2e2e2e38">
    <span class="password" style="color: #8f8f8f">Quên<a href="#" style="color: darkturquoise;"> mật khẩu?</a></span>
  </div>
  </form>
<style>
/*phan đk*/


button {
    background-color: #04AA6D;
    color: white;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  button:hover {
    opacity: 0.8;
  }
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: transparent;
    border: 1px solid #dbdbdb;
  }



/*Phần đn*/
main{
    margin: 0 auto; 
    width: 40%;
}

h1{
    margin-left: 40px;
    margin-top: 80px;
    color: rgb(212, 163, 55);
    width: 500px;
    text-align: center;
}

.dangnhap{
  margin-left: 20px;
    margin-top: 20px;
    background-color: sienna;
    border: transparent;
    font-size: 30px;
    width: 200px;
    height: 40px;
}

.dnhap{
    font-size: 20px;
    margin-left: 40px;
    width: 300px;
    height: 40px;
    background-color: rgb(19, 19, 19);
    color: white;
    margin-top: 40px;
}
.dktk{
    font-size: 15px;
    margin-left: 40px;
    margin-top: 10px;
    color: white;
}
.container {
    margin-top: 10px;
    padding: 30px;
    display: flex;
  }
  
span.password {
    float: right;
}
</style>
  </main>
  <?php
  include 'footer.php';
  ?>