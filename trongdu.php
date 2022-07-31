<?php 
include 'config.php';
//$user = [];
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
//$user = $_SESSION['user'];
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
  <title>Pets store</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="./css/gototop.css">
</head>
<?php
include 'header.php';
?>
<!-----------------------------------cartegory--------------------------------------->
<section class="cartegory">
<div class="container">
    <div class="cartegory-top row">
        <p><a href="./index.php">Trang chủ</a></p><p>/</p><a href="./danhmucsp.php">Phụ kiện</a><p>/</p><a href="./trongdu.php">Dịch vụ trông giữ</a>
    </div>
</div>
<?php
include 'leftslide.php';
?>
        <div class="cartegory-right row">
            <div class="cartegory-right-top-item">
                <p>Dịch vụ trông giữ thú cưng</p>
            </div>
            <div class="cartegory-right-img row">
                <img src="./img/dichvu/Pet-Hotel-01.jpg" title="Dichvu" alt="pethotel">
                
                <img src="./img/dichvu/Pet-Hotel-02.jpg" title="Dichvu" alt="pethotel">
                
                <img src="./img/dichvu/Pet-Hotel-03.jpg" title="Dichvu" alt="pethotel">
                
                <img src="./img/dichvu/Pet-Hotel-06.jpg" title="Dichvu" alt="pethotel">
                
                <img src="./img/dichvu/Pet-Hotel-07.jpg" title="Dichvu" alt="pethotel">
             </div>
        </div>
    
    </div>
</div>
</section>

<?php
include 'footer.php';
?>