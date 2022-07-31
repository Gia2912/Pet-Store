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
  <title>Đăng ký</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
  <main>
    <h1>ĐĂNG KÝ</h1>
    <h2>THÔNG TIN CÁ NHÂN</h2>
    <form action="dangki_submit.php" method="POST">
      <label><i class="fas fa-user"></i>Tên đăng nhập/Email <span style="color:crimson">*</span></label>
      <input required type="text" name="username" placeholder="Email/tên đăng nhập">
      
      <label><i class="far fa-phone-plus"></i>Số điện thoại <span style="color:crimson">*</span></label>
      <input required type="text" name="phone" placeholder="Nhập số điện thoại">
      
      <label><i class="fas fa-lock"></i>Mật khẩu <span style="color:crimson">*</span></label>
      <input required type="password" name="password" placeholder="Mật khẩu">
      
      <label><i class="fas fa-lock"></i>Nhập lại mật khẩu <span style="color:crimson">*</span></label>
      <input required type="password" name="repassword" placeholder="Nhập lại mật khẩu">

    <div class="dntk"><em>Bạn đã có tài khoản? <a href="login.php" style="color: aqua; text-decoration: underline;">Đăng nhập</em></a></div>
    <button class="dangky" type="submit" name="submit">Đăng ký</button>
    </form>
  </main>

  <style>
    main{
    margin: 0 auto; 
    width: 40%;
    
}
label{
  color: #8f8f8f;
}
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
.dangky{
    margin-left: 20px;
    margin-top: 20px;
    background-color: sienna;
    border: transparent;
    font-size: 30px;
    width: 200px;
    height: 40px;
}
h1{
    margin-left: 40px;
    margin-top: 80px;
    color: rgb(212, 163, 55);
    font-weight: 400;
    width: 500px;
    text-align: center;
}

h2{
    margin-left: 30px;
    margin-bottom: 15px;
    color: rgb(212, 163, 55);
    text-align: center;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: rgba(104, 104, 104, 0.315);
    outline: none;
  }
.dky i{
    font-size: 1.2rem;
    line-height: 70px;
    margin-left: 10px;
}
.dntk{
    font-size: 15px;
    margin-left: 40px;
    color: white;
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
    </style>
  <?php
  include 'footer.php';
?>