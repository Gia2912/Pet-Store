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

        <li><a href="./webdog.php">
        <li>Trang trại chó cảnh /</a></li>
        <li><a href="./golden.php">
        <li>Golden Retriever</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Golden Retriever</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/dog3.jpg" alt="Golden Retriever Puppy">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">12.000.000đ</li>
          <li class="normal">10.200.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Giống Chó: Golden retriever</p><br>
        <p>Màu sắc: Vàng</p><br>
        <p>Độ tuổi: 1 tháng 25 ngày</p><br>
        <p>Nguồn gốc: Scotland</p><br>
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
                  <img class="cart-item-image" src="./img/dog3.jpg" width="100" height="100">
                  <span class="cart-item-title">Corgi</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">10200000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">10200000VNĐ</span>
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
        <p>Giống chó Golden (hay được biết đến là Golden Flat-Coat) là dòng chó của Scotland. Đây là giống chó bầu bạn
          phổ biến nhất trong các gia đình trên toàn thế giới. Golden là loài chó rất thông minh, luôn cư xử đúng mực và
          rất yêu chủ. Chúng dễ dạy dỗ và luôn tỏ ra kiên nhẫn và dịu dàng đối với trẻ nhỏ. Trung thành, tin cậy, dễ bảo
          và luôn tìm cách làm vừa lòng chủ nhân</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="1000" height="500" src="./img/dog4.jpg" alt="Golden Retriever">
        </div>
      </div>
      <div class="word4">
        <p>Golden Retriever dựa vào một số đặc điểm để tạo ra những ưu điểm làm hài lòng chủ nhân.</p>
        <ul>
          <p></p>
          <li>Golden Retriever là giống chó loại nhỡ có thân hình cân đối, khỏe mạnh. </li>
          <li>Có cái đầu to, mõm hơi vát nhưng kèm với bộ hàm rộng và rất khỏe cùng với hàm răng sắc bén.</li>
          <li>Mũi có màu đen, mắt biểu cảm màu nâu với viền sẫm.</li>
          <li>Có bộ lông màu từ vàng kem đến vàng nâu (màu đỏ không được công nhận). Bộ lông được cấu tạo bởi lớp lông
            không thấm nước bên ngoài và một lớp lông mịn dày bên trong.</li>
          <li>Đôi tai cỡ nhỡ, cụp. Cổ dài, khỏe và khá cơ bắp.</li>
          <li>Cổ dài, khỏe và khá cơ bắp.</li>
          <li>Ngực rộng.</li>
          <li>Đuôi dài và không bao giờ cong.</li>
        </ul>
      </div>
      <?php
  include 'footer.php';
?>