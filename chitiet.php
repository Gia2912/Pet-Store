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
   <?php
    $sql = "SELECT * FROM tbl_product ";
    if($qr = mysqli_query($conn,$sql)){
      while($row = mysqli_fetch_array($qr)){ ?>
        <li><a href="">
        <li><?php echo $row['product_name']; ?></a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p><?php echo $row['product_name']; ?></p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="300" src="./img/dog/alaska1.png" style="margin-bottom:50px;">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text"><?php echo $row['product_price']; ?></li>
          <li class="normal"><?php echo $row['product_sale']; ?></li>
        </ul>
      </div>
      <div class="word1">
      <?php echo $row['product_details']; ?>
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
                  <img class="cart-item-image" src="./img/dog/alaska.png" width="100" height="100">
                  <span class="cart-item-title"><?php echo $row['product_name'];?></span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;"><?php echo $row['product_sale']; ?></span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price"><?php echo $row['product_sale']; ?></span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./cart.php">Thanh Toán</a></button>
          </div>
        </div>
      </div>
      <!-- Java -->
      <script src="./js/main.js"></script>
    
      <div class="Mota">
        <p>Mô tả</p>
      </div>
      <div class="word3">
          <?php echo $row['product_desc']; ?>
      </div>

    <?php }
  
}?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        <?php
  include 'footer.php';
?>