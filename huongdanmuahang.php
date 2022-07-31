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
  <title>Hướng dẫn mua hàng</title>
  <link href="./css/index.css" type="text/css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>
<section class="instruct">
    <div class="instruct-container-top">
        <div class="content-top">
            <h2>HƯỚNG DẪN MUA HÀNG</h2>
        </div>
    </div>
    <div class="instruct-container">
        <div class="section-content-item row">
            <ul>
                <li><h2>1</h2></li>
                <li><h4>Chọn sản phẩm</h4></li>
                <ul>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i> Truy cập vào Petstore và lựa chọn cho mình một sản phẩm ưng ý nhất. Bạn có thể dễ dàng tham khảo thông qua những danh mục trên website được Yolo phân loại với đầy đủ thông tin và giá cả rõ ràng.</li>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i> Gọi điện hoặc chat Zalo theo số: 0123.456.789 để được tư vấn chọn sản phẩm.</li>
                    <li class="item"><a href="./index.html">Vào cửa hàng</a></li>
                </ul>
            </ul>
        </div>
        <div class="section-content-item row">
            <ul>
                <li><h2>2</h2></li>
                <li><h4>Thanh toán</h4></li>
                <li class="item">Khi mua hàng ở Petstore. Có 3 hình thức thanh toán được áp dụng.</li>
                <ul>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i><strong> Thanh toán trực tiếp:</strong> Khách hàng tới tận cửa hàng lựa chọn sản phẩm và trả tiền mặt cho nhân viên bán hàng.</li>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i><strong> COD (Thanh toán khi nhận hàng):</strong> Áp dụng với khách hàng mua phụ kiện ở xa, muốn ship tận nơi.</li>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i><strong> Chuyển khoản:</strong> Khách hàng ở xa vui lòng chuyển khoản trước vào tài khoản của của hàng. Khi nhận được tiền nhân viên sẽ gửi hàng ra cho khách.</li>
                    <li class="item-bold"> <i class="fas fa-star" style="color: rgb(163, 255, 77);"></i> <strong>Lưu ý: </strong>Việc chuyển khoản trước chỉ áp dụng với mặt hàng thú cưng, vì đặc thù không có đơn vị vận chuyển COD.</li>

                  </ul>
            </ul>
        </div>
        <div class="section-content-item row">
            <ul>
                <li><h2>3</h2></li>
                <li><h4>Nhận hàng</h4></li>
                <ul>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i><strong> Đối với khách hàng mua trực tiếp:</strong>  Sẽ nhận hàng ngay lập tức tại cửa hàng.</li>
                    <li class="item"><i class="fal fa-check" style="color: rgb(163, 255, 77);"></i><strong> Đối với khách mua hàng có vận chuyển:</strong> Sau khi tiến hành thanh toán, khách hàng sẽ nhận được sản phẩm trong thời gian tối thiểu là 1 ngày và tối đa là 4 ngày tuỳ vào vị trí nhận hàng của khách.</li>
                    <li class="item-bold"><strong>Lưu ý:</strong>
                      <ul>
                          <li class="item-bold" style="border-bottom: 1px solid rgb(175, 175, 175);"><i class="fas fa-star" style="color: rgb(163, 255, 77);"></i>  Đối với đơn hàng COD, Petstore sẽ cung cấp mã vận đơn để khách tự kiểm tra trạng thái chuyển hàng trên website của đơn vị vận chuyển.</li>
                          <li class="item-bold"><i class="fas fa-star" style="color: rgb(163, 255, 77);"></i>    Đối với đơn hàng vận chuyển theo xe khách, Petstore sẽ cung cấp số điện thoại và thông tin của nhà xe để khách hàng tự gọi điện kiểm tra tình trạng hàng.</li>
                      </ul>
                </li>
                </ul>
            </ul>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>