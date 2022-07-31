<?php 
include 'config.php';
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trang trại mèo cảnh</title>
  <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/gototop.css">
</head>
<?php
include 'header.php';
?>
  <main class="thongtingioithieu">
    <h1>THÔNG TIN GIỚI THIỆU</h1>
    <ul>
      <li><iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"
        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li>
      <li>Store: Khu phố 6, Linh Trung, TP Thủ Đức, TP. Hồ Chí Minh</li>
      <li>Hotline: 0123 456 789</li>
      <li>Mail: petstore@gmail.com</li>
    </ul>
  </main>
<style>
/*------------------thông tin giới thiệu------------------------*/
.thongtingioithieu{
    margin-top: 70px;
}
.thongtingioithieu > ul{
    margin-top: 30px;
    margin-left: 560px;
    font-size: 20px;
}
h1 {
    color: #e26e02; 
    text-align: center;
}
.thongtingioithieu li{
    line-height: 1.6;
    font-family: 'Tinos', serif;
    color: #8f8f8f;
}

</style>
  <?php
include 'footer.php';
?>