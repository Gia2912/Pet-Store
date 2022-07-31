<?php 
include 'config.php';
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">  
  <title>Balo & Túi xách</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
<!-----------------------------------cartegory--------------------------------------->
<section class="cartegory">
<div class="container">
    <div class="cartegory-top row">
        <p><a href="./index.php">Trang chủ</a></p><p>/</p><a href="./danhmucsp.php">Phụ kiện</a><p>/</p><a href="./balotuisach.php">Balo & Túi sách</a>
    </div>
</div>
<?php
include 'leftslide.php';
?>
        <div class="cartegory-right row">
            <div class="cartegory-right-top-item">
                <p>Balo & Túi xách</p>
            </div>
            <div class="cartegory-right-content row">
                <div class="cartegory-right-content-item">
                    <a href="./tuixachchomeo.php">
                        <img src="./img/phukien/tui.jpg" title="Phu kien" alt="túi">
                        <h2>Túi Xách Chó Mèo Hình Dấu Chân</h2>
                        <p>300.000<sup>đ</sup></p>
                </div>
                <div class="cartegory-right-content-item">
                  <a href="">
                      <img src="./img/phukien/tui1.jfif" title="Phu kien" alt="túi">
                      <h2>Balo phi hành gia</h2>
                      <p>350.000<sup>đ</sup></p>
                </div>
              
                <div class="cartegory-right-content-item">
                  <a href="">
                      <img src="./img/phukien/tui3.jpg" title="Phu kien" alt="túi">
                      <h2>Balo vải mềm mịn cho thú cưng</h2>
                      <p>270.000<sup>đ</sup></p>
                </div>
        </div>
    </div>
    </div>
</div>
</section>
<?php
include 'footer.php';
?>