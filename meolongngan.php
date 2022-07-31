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
  <link href="./css/css.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>

  <main>
    <div class="trangchu">
      <ul>
        <li><a href="./index.php">
        <li>Trang chủ /</a></li>

        <li><a href="">
        <li>Thú cưng /</a></li>

        <li><a href="./webcat.php">
        <li>Trang trại mèo cảnh /</a></li>
        <li><a href="./meolongngan.php">
        <li>Mèo anh lông ngắn</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Mèo anh lông ngắn</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/cat1.png" alt="British Shorthair Kitty">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">14.000.000đ</li>
          <li class="normal">12.600.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Giống Mèo: Anh Lông Ngắn </p><br>
        <p>Màu sắc: Xám</p><br>
        <p>Độ tuổi: 2 tháng 15 ngày</p><br>
        <p>Nguồn gốc: Thái Lan</p><br>
        <p>Tình trạng: ổn định</p><br>
        <p>Sổ sức khỏe: có</p><br>
        <p>Tiêm vacxin: Đã tiêm 2 mũi</p>
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
              <div style="width: 30%;" class="text-left">Thú Cưng</div>
              <div style="width: 20%;" class="text-center">Giá</div>
              <div style="width: 20%;" class="text-center">Số Lượng</div>
            </div>
            <div class="cart-items">
              <div class="cart-row" style="display: flex; flex-wrap: nowrap;">
                <div class="cart-item cart-column" style="width: 30%;">
                  <img class="cart-item-image" src="./img/cat1.png" width="100" height="100">
                  <span class="cart-item-title">Anh lông ngắn</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">12600000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <!--<button class="btn btn-danger" type="button" style="margin-left:50px; margin-top:20px;">Xóa</button>-->
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">12600000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.php">Thanh Toán</a></button>
          </div>
        </div>
      </div>
      <!-- Java -->
      <script src="./js/main.js"></script>

      <div class="Mota">
        <p>Mô tả</p>
      </div>
      <div class="word3">
        <p>Mèo Anh Lông Ngắn hay còn gọi là British Shorthair có nguồn gốc từ Anh và được ưa chuộng rất nhiều trên thế
          giới. Bởi lẽ chúng có tính cách rất thân thiện, gần gũi và thông minh.</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="1100" height="500" src="./img/cat2.png" alt="British Shorthair">
        </div>
      </div>
      <div class="word4">
        <p>Rất dễ dàng để nhận biết một chú mèo Anh có thuần chủng hay không, bạn có thể dựa vào một số đặc điểm:</p>
        <ul>
          <p></p>
          <li>Cơ thể: Thân mình không quá dài, khung xương to, chắc chắn, bộ ngực rộng. </li>
          <li>Đầu: Tương đối so với thân, to tròn, ngoại hình bên ngoài khá giống với mèo Chartreux hoặc Russian Blue.
          </li>
          <li>Mép: Dày, má tròn và cằm chắc chắn. Mèo đực thường thấy mép dày rõ hơn mèo cái và khung xương lớn hơn.
          </li>
          <li>Mắt: To tròn, màu mắt thường tương ứng với màu lông. Tuy nhiên, đa số mắt mèo Anh Lông Ngắn thường là màu
            vàng đồng.</li>
          <li>Lông: Dày, êm, mọc đều, khi vuốt sẽ cảm thấy sự đàn hồi bởi lớp lông dày. Đặc biệt là khu vực trước ngực.
          </li>
          <li>Cặp tai của mèo Anh Lông ngắn khá nhỏ với đầu của chúng.</li>
          <li>Đuôi xù và dày.</li>
        </ul>
      </div>
  <?php
  include 'footer.php';
  ?>