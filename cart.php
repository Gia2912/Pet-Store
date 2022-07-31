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
  <title>Giỏ hàng</title>
  <link href="./css/giohang.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
  <!---------------------------------------GIO HANG-------------------------------->

<div class="payform">
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
          <div class="row">
            <div class="col-50">
              <h3>Thông tin chi tiết</h3>
              <label for="name">
                <i class="fa fa-user"></i> Họ Tên</label>
              <input type="text" id="name" placeholder="Nguyễn Văn A">
              <label for="email">
                <i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" placeholder="ltng@gmail.com">
              <label for="adr">
                <i class="fas fa-map-marker-check"></i> Địa Chỉ</label>
              <input type="text" id="adr" placeholder="KP6, Linh Trung, Thủ Đức, TP HCM">
              <label for="Phone">
                <i class="fas fa-phone-alt"></i> Số Điện Thoại</label>
              <input type="text" id="Phone" placeholder="0123456789">
            </div>

            <div class="col-50">
              <h3>Thanh toán</h3>
              <label for="name">Hình thức thanh toán</label>
              <label class="checkpay">
                <input type="radio" checked="checked" name="radio"> Thanh toán tiền mặt
                <span class="checkmark"></span>
              </label>
              <label class="checkpay">
                <input type="radio" name="radio"> Thanh toán bằng thẻ
                <span class="checkmark"></span>
              </label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
            </div>
          </div>
          <div class="col-25">
            <div class="container">
              <h3>Giỏ hàng <span class="price" style="color:rgb(250, 250, 250)"><i
                    class="fa fa-shopping-cart"></i></span></h4>
                <hr>
                <div class="modal-body">
                  <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                    <span class="cart-price cart-header cart-column">Giá</span>
                    <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                  </div>
                  <?php
                             $sql = "SELECT * FROM tbl_product ";
                              if($qr = mysqli_query($conn,$sql)){
                               while($row = mysqli_fetch_array($qr)){ ?>
                  <div class="cart-items"> <!--edit -->
                    <div class="cart-row">
                      <div class="cart-item cart-column">
                        <img class="cart-item-image" src="./img/dog/alaska.png" width="100" height="100">
                        <span class="cart-item-title"><?php echo $row['product_name']; ?></span>
                      </div>
                      <span class="cart-price cart-column"><?php echo $row['product_sale']; ?></span>
                      <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">Xóa</button>
                      </div>
                    </div>
              
                    <div class="cart-total">
                      <strong class="cart-total-title">Tổng Cộng:</strong>
                      <span class="cart-total-price"><?php echo $row['product_sale']; ?></span>
                    </div>
                  </div>
                <?php }
              }?>
                </div>
            </div>
            <input type="submit" value="Xác nhận đặt hàng" class="btn">
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>