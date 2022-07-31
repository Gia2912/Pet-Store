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
        <li><a href="./meoxiem.php">
        <li>Mèo xiêm</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Mèo xiêm</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/cat3.jpg" alt="Siamese kitty">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">2.000.000đ</li>
          <li class="normal">1.800.000đ</li>

        </ul>
      </div>
      <div class="word1">
        <p>Giống Mèo: Mèo xiêm </p><br>
        <p>Màu sắc: Trắng và xám đen</p><br>
        <p>Độ tuổi: 4 tháng 20 ngày</p><br>
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
                  <img class="cart-item-image" src="./img/cat3.jpg" width="100" height="100">
                  <span class="cart-item-title">Mèo Xiêm</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">1800000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">1800000VNĐ</span>
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
        <p>Mèo Xiêm (hay còn gọi là Siamese) là giống mèo lông ngắn phương Đông được công nhận. Được xem như một vị thần
          mang lại may mắn và loài mèo được nuôi phổ biến ở nhiều nước châu Âu và Đông Nam Á, là giống mèo rất thông
          minh chân tình và được đánh giá là người bạn đáng tin cậy đối với con người.</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="900" height="500" src="./img/cat4.jpg" alt="Siamese">
        </div>
      </div>
      <div class="word4">
        <p>Mèo Xiêm được phân làm hai loại: Truyền thống và hiện đại. Mỗi loại đều có một số đặc điểm khác nhau để nhận
          dạng. Cụ thể như sau:</p>
        <ul>
          <li><em>Mèo Xiêm hiện đại:</em> Có vẻ đẹp góc cạnh với thân hình dài, chân thẳng và cao, đầu với tai hình tam
            giác, đuôi thon dài.</li>
          <li><em>Mèo Xiêm cổ:</em> Thân hình khá mũm mĩm, cấu trúc xương lớn, mặt tròn.</li>
          <p></p><br>
          <p>Tuy có vài điểm khác nhau giữa mèo Xiêm truyền thống và hiện đại nhưng nhìn chung chúng đều có các đặc điểm
            nổi bật nhất của giống mèo này như:</p>
          <li>Đôi mắt xanh, to, có hình quả hạnh nhân, rất sâu, đầy biểu cảm.</li>
          <li>Lông ngắn nhưng bóng và đẹp, mọc sắt thân. Màu lông của mèo Xiêm rất đa dạng như: Màu xanh nhẹ, màu xám
            hải cẩu, màu hoa tử đinh hương, màu socola, màu lông linh miêu, màu mai rùa (tortie).</li>
          <li>Hình dáng mũm mĩm, béo tròn so với giống mèo khác nhưng chúng vẫn uyển chuyển.</li>
        </ul>
      </div>
      <?php
  include 'footer.php';
  ?>