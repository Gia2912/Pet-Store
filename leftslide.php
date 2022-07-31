<div class="container">
    <div class="row">
        <div class="cartegory-left">
            <ul>
                <li class="cartegory-left-li"><a href="#" >Phụ kiện</a>
                    <ul>
                        <li class="cartegory-left-li"><a href="./balotuisach.php">Balo & Túi sách</a></li>
                        <li class="cartegory-left-li"><a href="">Chuồng & nệm</a></li>
                        <li class="cartegory-left-li"><a href="">Dụng cụ vệ sinh</a></li>
                        <li class="cartegory-left-li"><a href="">Đồ chơi & phụ kiện huấn luyện</a></li>
                        <li class="cartegory-left-li"><a href="">Thức ăn</a></li>
                        <li class="cartegory-left-li"><a href="">Vật dụng ăn uống</a></li>
                        <li class="cartegory-left-li"><a href="">Vòng cổ & dây dẫn</a></li>
                    </ul>
                </li>
                <li class="cartegory-left-li"><a href="#">Dịch vụ</a>
                    <ul>
                        <li class="cartegory-left-li"><a href="./trongdu.php">Trông giữ</a></li>
                        <li class="cartegory-left-li"><a href="./lamdep.php">Làm đẹp</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script>
    const cartegorySlide = document.querySelectorAll(".cartegory-left-li");
    cartegorySlide.forEach(function(menu,index){
      menu.addEventListener("click",function(){
        menu.classList.toggle("block")
      })
    })
  </script>

  <style>

/*----------------------------------------------------------------------*/
.container{
    background-color: rgba(26, 26, 26, 0.637);
    display: flex;
}
.cartegory{
    margin-top: 100px;
}
.cartegory-top{
    margin: 20px 0 20px 40px;
}
.cartegory-top p{
    font-family: 'Tinos', serif;
    margin: 0 12px;
    font-size: 18px;
    color:rgb(99, 99, 99);
}
.cartegory-top a{
    font-family: 'Tinos', serif;
    margin: 0 12px;
    font-size: 18px;
    color:rgb(163, 133, 133);
}
.cartegory-left{
    width: 20%;
}
.cartegory-right{
    width: 80%;
}
.cartegory-right-top-item p{
    font-size: 20px;
    font-weight: bold;
    color: rgb(211, 144, 56);
    margin-left: 20px;
}
.cartegory-right-content{
    margin-top: 20px;
    justify-content: space-between;
    margin-bottom: 20px;
    margin-left: 30px;
}
.cartegory-left{
    padding: 60px;
    background-color: rgb(29, 29, 29);
}
.cartegory-left ul li{
    padding: 15px;
}
.cartegory-left ul li>a {
    color: rgb(207, 207, 207);
    font-size: 20px;
    font-weight: bold;
    font-family: 'Tinos', serif;
}
.cartegory-left ul li ul li {
    padding-left: 10px;
}
.cartegory-left-li ul{
    display: none;
}
.cartegory-left-li.block ul {
    display: block;
}
.cartegory-left ul li ul li a {
    color: #5999d4;
    font-size: 18px;
}
      </style>
