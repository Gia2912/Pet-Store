<body>
<header>
    <!------------------- Header logo -------------------------------------->
    <div class="logo">
      <a href="./index.php" title="Pet Store" rel="home">
        <img src="./img/Redesign-LogoPetStore-02-1.png" alt="Pet Store" />
    </div>

    <!------------------- MENU NAV-------------------------------------->
    <div class="menu">
      <li><a href="./index.php">HOME</a></li>
      <li><a href="./webdog.php">THÚ CƯNG <i class="fa fa-caret-down"></i></a>
        <ul class="petmenu">
          <li><a href="./webdog.php">CHÓ CẢNH</a>
           
          </li>
          <li><a href="./webcat.php">MÈO CẢNH </a>
          </li>
        </ul>
      </li>
      <li><a href="./danhmucsp.php">PHỤ KIỆN <i class="fa fa-caret-down"></i></a>
        <ul class="phukien-menu">
          <li><a href="./balotuisach.php">Balo & túi sách</a></li>
          <li><a href="">Chuồng & nệm</a></li>
          <li><a href="">Dụng cụ vệ sinh</a></li>
          <li><a href="">Đồ chơi & phụ kiện huấn luyện</a></li>
          <li><a href="">Thức ăn</a></li>
          <li><a href="">Vật dụng ăn uống</a></li>
          <li><a href="">Vòng cổ & dây dẫn</a></li>
        </ul>
      </li>
      <li><a href="./trongdu.php">DỊCH VỤ <i class="fa fa-caret-down"></i></a>
        <ul class="dichvumenu">
          <li><a href="./trongdu.php">Trông giữ</a></li>
          <li><a href="./lamdep.php">Dịch vụ làm đẹp</a></li>
        </ul>
      </li>
      <li><a href="./thongtin.php">THÔNG TIN</a></li>

    <div class="orthers">
      <li class="placeholder" style="margin-left: 250px;"><input placeholder="Bạn muốn tìm gì..." type="search"></li>
      
       <!-------------PHP--------------------->
       <?php if(isset($user['username'])){?>
      <li><?php echo '<a href="" style="margin-right:10px; font-size:20px;"> '.$user['username'].' </a>';?>
      <ul class="dichvumenu">
       <li> <a href="logout.php">Đăng xuất</a></li>
     </ul>
    </li>

      <?php }else{ ?>

       <li><a href="login.php"><button id="userButton" class="dropbtn"><i class="fas fa-user" style="color: black"></i></button></a>
            
    </li>

      <?php } ?>

      <li><a class="shopping" href="./giohang.php" title="Giỏ hàng" ><i class="far fa-cart-plus" style="color:black;"></i></a></li>
    </div>
  </div>
  </header>
  <!---------------------------------------ICON-BAR-------------------------------------------------->
  <div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook" title="Follow on Facebook"><i class="fab fa-facebook"></i></a>
    <a href="https://www.youtube.com/channel/UCZsffo0QcIMCHKI6MMS-dQw/featured" class="youtube"
      title="Follow on Facebook"><i class="fab fa-youtube"></i></i></a>
    <a href="tel:0123456789" class="iconphone" title="Call us"><i class="fas fa-phone"></i></a>
    <a href="https://www.instagram.com/" class="ig" title="Follow on Instagram"><i class="fab fa-instagram"></i></a>
  </div>

    <!--về đầu trang-->
    <div class="gototop" id="gototop">
    <a href="javascript:;" onclick="goToTop()"><img class="mui_ten" src="./img/mui-ten.png"></a>
</div>
<script>
  window.onscroll = function() {
    var gototop = document.getElementById("gototop");
    if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
        gototop.style.display = "block";
    } else {
        gototop.style.display = "none";
    }
}
function goToTop() {
    var timer = setInterval(function() {
        document.documentElement.scrollTop -= 15;

        if (document.documentElement.scrollTop <= 0)
            clearInterval(timer)
    }, 1)
}
</script>
<style>
.gototop {
    z-index: 100;
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: none;
}


.gototop a {
    display: block;
    padding: 20px 15px;
}

.mui_ten{
    width: 35px;
}
</style>