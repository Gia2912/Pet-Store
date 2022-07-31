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
        <li><a href="">
        <li>Trang chủ /</a></li>

        <li><a href="">
        <li>Thú cưng /</a></li>

        <li><a href="">
        <li>Trang trại chó cảnh /</a></li>
        <li><a href="">
        <li>Corgi</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Corgi</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/dog1.jpg" alt="Corgi Puppy">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">15.000.000đ</li>
          <li class="normal">13.500.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Giống Chó: Corgi </p><br>
        <p>Màu sắc: Cam-trắng</p><br>
        <p>Độ tuổi: 2 tháng</p><br>
        <p>Nguồn gốc: Anh</p><br>
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
          <div class="modal-header" style="display: flex;">
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
                  <img class="cart-item-image" src="./img/dog1.jpg" width="100" height="100">
                  <span class="cart-item-title">Corgi</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">13500000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">13500000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.php" style="color: black;">Thanh Toán</a></button>
          </div>
        </div>
      </div>
      <!-- Java -->
      <script src="./js/main.js"></script>

      <div class="Mota">
        <p>Mô tả</p>
      </div>
      <div class="word3">
        <p>Giống chó Corgi (hay còn được biết đến với tên gọi khác là Corgi Welsh), là giống chó cảnh dễ thương nhất Thế
          Giới. Chúng có nguồn gốc từ xứ Wales, Vương quốc Anh. Corgi luôn dẫn đầu danh sách những giống chó được nuôi
          phổ biến nhất trên Thế Giới cũng như tại Việt Nam.</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="950" height="500" src="./img/dog2.jpg" alt="Corgi">
        </div>
      </div>
      <div class="word4">
        <p></p>
        <ul>
          <li>Corgi thuần chủng có đặc điểm chung đó là thân dài và 4 chân ngắn. Khác với các giống chó cảnh hiện nay,
            chân Corgi càng ngắn, thân hình càng dài thì càng đẹp. Theo đó, những bé Corgi có ngực sát đất giá sẽ rất
            cao. Và dù thân hình có phần lạ, mất cân đối thì chúng vẫn luôn được săn đón nhiệt tình.</li>
          <p></p><br>
          <p>Corgi có những đặc điểm sau:</p>
          <li>Corgi chân ngắn có đôi tai hình tam giác, dựng thẳng. </li>
          <li>Tai và mặt của các bé có tỷ lệ khá cân đối.</li>
          <li>Mõm của Corgi dài và nhọn, mắt chúng to tròn, miệng và khuôn hàm nhỏ nhưng cực kì sắc nhọn. </li>
          <li>Khuôn mặt của Corgi trông giống loài cáo nên chúng còn được gọi là Foxy Dog.</li>
          <li>Bộ lông dày 2 lớp của các bé Corgi có kết cấu khá giống với loài chó tuyết Samoyed, Alaska và Husky. Lớp
            lông trong ngắn, mỏng, mềm mượt có tác dụng giữ nhiệt, giúp Corgi chống chịu với khí hậu lạnh giá xứ Wales.
            Lớp lông ngoài thì dày và dài hơn, đặc biệt không thấm nước giúp Corgi thuận tiện trong việc di chuyển dưới
            thời tiết sương giá.</li>
        </ul>
      </div>
      <?php
  include 'footer.php';
  ?>