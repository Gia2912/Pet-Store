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
  <title>Phụ kiện</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="./css/webcat.css">
</head>
<?php
include 'header.php';
?>
  
<!-----------------------------------cartegory--------------------------------------->
<section class="cartegory">
<div class="container">
    <div class="cartegory-top row">
        <p><a href="./index.php">Trang chủ</a></p><p>/</p><a href="./danhmucsp.php">Phụ kiện</a>
    </div>
</div>
<?php
include 'leftslide.php';
?>
        <div class="cartegory-right row">
            <div class="cartegory-right-top-item">
                <p>Phụ kiện</p>
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
              
                <div class="cartegory-right-content-item">
                  <a href="">
                      <img src="./img/phukien/nem.jpg" title="Phu kien" alt="nem">
                      <h2>Nệm Giường 3D CHO CHÓ MÈO</h2>
                      <p>350.000<sup>đ</sup></p>
                 </div>
                  
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/thucan.jpg" title="Phu kien" alt="thucan">
                        <h2>Thức ăn khô Royal Canin Puppy Mini (10kg)</h2>
                        <p>180.000<sup>đ</sup></p>
                 </div>
          
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/thucan.jpg" title="Phu kien" alt="thuc an">
                        <h2>Thức ăn khô Royal Canin Puppy Mini (2kg)</h2>
                        <p>370.000<sup>đ</sup></p>
                  </div>
        
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/dai-dan-3.jpg" title="Phu kien" alt="day dan">
                        <h2>Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)</h2>
                        <p>120.000<sup>đ</sup></p>
                   </div>
      
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/dai-dan-4.jpg" title="Phu kien" alt="day dan">
                        <h2>Dây dắt chó cưng kèm đai ngực Demin</h2>
                        <p>90.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/bat-an.jpg" title="Phu kien" alt="thuc an">
                        <h2>Bát Ăn Đôi Tròn Round Dog</h2>
                        <p>45.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/bat-an-nhua-5.jpg" title="Phu kien" alt="thuc an ">
                        <h2>Bát ăn inox gắn chuồng cho chó mèo (size nhỏ)</h2>
                        <p>120.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/nem-thuong-4.jpg" title="Phu kien" alt="nem">
                        <h2>Nệm Chấm Bi Cho Chó Mèo (size nhỏ)</h2>
                        <p>315.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/vong-tho-cam-6.jpg" title="Phu kien" alt="day dan">
                        <h2>Vòng Cổ Thổ Cẩm Cho Chó & Mèo</h2>
                        <p>80.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/chuong-gap-1.jpg" title="Phu kien" alt="nem">
                        <h2>Chuồng Sắt Cho Chó Mèo (size vừa)</h2>
                        <p>815.000<sup>đ</sup></p>
                  </div>
                  
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/chuong-nhua-8.jpg" title="Phu kien" alt="nem">
                        <h2>Chuồng Nhựa Láp Ráp Cho Chó Mèo</h2>
                        <p>1.800.000<sup>đ</sup></p>
                  </div>
                  <div class="cartegory-right-content-item">
                    <a href="">
                        <img src="./img/phukien/sua-tam-sos-1.jpg" title="Phu kien" alt="vesinh">
                        <h2>Sữa Tắm SOS cho thú cưng</h2>
                        <p>200.000<sup>đ</sup></p>
                </div>
                
                <div class="cartegory-right-content-item">
                  <a href="">
                      <img src="./img/phukien//thucan1.jpg" title="Phu kien" alt="thuc an">
                      <h2>Royal Canin Poodle Junior 1,5KG</h2>
                      <p>180.000<sup>đ</sup></p>
              </div>
              <div class="cartegory-right-content-item">
                <a href="">
                    <img src="./img/phukien/banh-tron-2-dau-2.jpg" title="Phu kien" alt="đồ chơi">
                    <h2>Bóng Thừng 2 Đầu KITTEN</h2>
                    <p>80.000<sup>đ</sup></p>
            </div>
            <div class="cartegory-right-content-item">
              <a href="">
                  <img src="./img/phukien/ban-cao-cho-meo.jpg" title="Phu kien" alt="đồ chơi">
                  <h2>Bàn cào mèo</h2>
                  <p>70.000<sup>đ</sup></p>
            </div>
          
            <div class="cartegory-right-content-item">
              <a href="">
                  <img src="./img/phukien/cay-von-meo.jpg" title="Phu kien" alt="đồ chơi">
                  <h2>Cây vờn mèo gỗ</h2>
                  <p>25.000<sup>đ</sup></p>
            </div>
             </div>
        </div>
    
    </div>
</div>
</section>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

<style>
.cartegory-right-content-item {
    width: calc(25% - 12px);
    text-align: center;
    padding: 12px 0;
}
.cartegory-right-content-item p{
    color: rgba(189, 189, 189, 100);
}
.cartegory-right-content-item:hover{
    
    border: 1px solid rgba(31, 31, 31, 0.411);
    background-color: rgba(58, 58, 58, 0.425);
}
.cartegory-right-content-item h2 {
    font-size: 18px;
    font-family: var(--main-text-font);
    margin-top: 6px;
    color: #a8a8a8;
}
.cartegory-right-content-item img{
    width: 100%;
}
.cartegory-right-content-item p {
    font-size: 15px;
}
.cartegory-right-img{
    margin-top: 20px;
}
.cartegory-right-img img{
    margin-bottom: 10px;
}

</style>
<?php
include 'footer.php';
?>



