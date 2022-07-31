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
  <title>Pets store</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
<!-----------------------------------cartegory--------------------------------------->
<section class="cartegory">
<div class="container">
    <div class="cartegory-top row">
        <p><a href="./doan.html">Trang chủ</a></p><p>/</p><a href="./danhmucsp.html">Phụ kiện</a><p>/</p><a href="./petspa.html">Dịch vụ làm đẹp</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="cartegory-left">
            <ul>
                <li class="cartegory-left-li"><a href="#">Phụ kiện</a>
                    <ul>
                        <li class="cartegory-left-li"><a href="./balo&tuisach.html">Balo & Túi sách</a></li>
                        <li class="cartegory-left-li"><a href="./Chuong&nem.html">Chuồng & nệm</a></li>
                        <li class="cartegory-left-li"><a href="./dungcuvesinh.html">Dụng cụ vệ sinh</a></li>
                        <li class="cartegory-left-li"><a href="./dochoi.html">Đồ chơi & phụ kiện huấn luyện</a></li>
                        <li class="cartegory-left-li"><a href="./thucan.html">Thức ăn</a></li>
                        <li class="cartegory-left-li"><a href="./vatdunganuong.html">Vật dụng ăn uống</a></li>
                        <li class="cartegory-left-li"><a href="./vongco&daydan.html">Vòng cổ & dây dẫn</a></li>
                    </ul>
                </li>
                <li class="cartegory-left-li"><a href="#">Dịch vụ</a>
                    <ul>
                        <li class="cartegory-left-li"><a href="./trong_du.html">Trông giữ</a></li>
                        <li class="cartegory-left-li"><a href="./petspa.html">Làm đẹp</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cartegory-right row">
            <div class="cartegory-right-top-item">
                <p>Dịch vụ làm đẹp cho boss</p>
            </div>
            <div class="cartegory-right-img row">
                <img src="./img/dichvu/Page-Grooming-01-1.jpg" title="Dichvu" alt="petspa">
                <img src="./img/dichvu/Page-Grooming-02-1-2048x1920.jpg" title="Dichvu" alt="petspa">
                <img src="./img/dichvu/Page-Grooming-03-scaled.jpg" title="Dichvu" alt="petspa">
                <img src="./img/dichvu/Page-Grooming-04-2048x772.jpg" title="Dichvu" alt="petspa">
                <img src="./img/dichvu/Page-Grooming-05-2048x922.jpg" title="Dichvu" alt="petspa">
                <img src="./img/dichvu/Page-Grooming-06-2048x1151.jpg" title="Dichvu" alt="petspa">
             </div>
        </div>
    
    </div>
</div>
</section>

<?php
include 'footer.php';
?>