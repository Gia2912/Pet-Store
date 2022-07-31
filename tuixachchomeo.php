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
  <title>Thông tin mô tả</title>
  <link href="./css/phukien.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
  <main>
    <div class="trangchu">
      <ul>
        <li><a href="./index.php">
        <li>Trang chủ /</a></li>

        <li><a href="./danhmucsp.php">
        <li>Phụ kiện /</a></li>

        <li><a href="./balotuisach.php">
        <li>Balo & Túi sách /</a></li>

        <li><a href="./tuixachchomeo.php">
        <li>Túi xách chó mèo hình dấu chân</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Túi xách chó mèo hình dấu chân</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img style="margin-left:70px" width="450" height="350" src="./img/phukien/tui.jpg" alt="Túi xách chó mèo hình dấu chân">
      </div>
      <div class="sale">
        <ul>
          <li class="normal">300.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Nhựa cao cấp luôn tươi mới</p><br>
        <p>Thiết kế trẻ trung, đẹp và hiện đại</p><br>
        <p>Có những lỗ tròn nhỏ thông thoáng</p><br>
        <p>Phông dáng cứng cáp</p><br>
        <p>Có dây móc bên trong chắc chắn</p><br>
      </div>
      
      <!-- The Modal -->
      <div class="giohang">
        <button id="cart">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          Thêm Vào Giỏ Hàng
        </button>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="modal-title">Bạn đã thêm vào giỏ hàng thành công!</span>
            <span class="close">&times;</span>
          </div>

          <div class="modal-body">
            <div class="cart-row" style="display: flex;">
              <div style="width: 30%;" class="text-left">Phụ kiện</div>
              <div style="width: 20%;" class="text-center">Giá</div>
              <div style="width: 20%;" class="text-center">Số Lượng</div>
            </div>
            <div class="cart-items">
              <div class="cart-row" style="display: flex; flex-wrap: nowrap;">
                <div class="cart-item cart-column" style="width: 30%;">
                  <img class="cart-item-image" src="./img/phukien/tui.jpg" width="100" height="100">
                  <span class="cart-item-title">Túi xách chó mèo hình dấu chân</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">300000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">300000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.html" style="color: black;">Thanh Toán</a></button>
          </div>
        </div>
      </div>
   <p style="padding-left: 100px;">&nbsp;</p>
      <!-- Java -->
      <script src="./js/main.js"></script>
 </div>
      <?php
      include 'footer.php';
      ?>