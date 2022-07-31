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
    <title>Trang trại mèo cảnh</title>
    <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
    <link rel="stylesheet" href="./css/webcat.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">  
</head>
<?php
include 'header.php';
?>
    <main>
        <div class="photocat">
            <img src="./img/Banner-Mobile-Meo-Canh.jpg">
        </div>
        <div class="word">
            <h1 style="font-size: 130%; color:white; text-align: center ;">TRANG TRẠI MÈO CẢNH</h1>
        </div>
        <section id="cat">
            <div class="section-cat">
                <div class="picture">
                    <a href="./Meolongngan.php">
                        <img src="./img/cat/meo-anh-long-ngan.png" title="Mèo Anh lông ngắn" alt="meoanhlongngan">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO ANH</li>
                            <li class="unline-decoration-text">14.000.000đ</li>
                            <li class="normal">12.600.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-anh.png" title="Mèo Scottish Fold" alt="meo-Scottishfold">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>SCOTTISH FOLD</li>
                            <li class="unline-decoration-text">20.000.000đ</li>
                            <li class="normal">12.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./Meoxiem.php">
                        <img src="./img/cat/meo-xiem.png" title="Mèo Xiêm" alt="meoxiem">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO XIÊM</li>
                            <li class="unline-decoration-text">2.000.000đ</li>
                            <li class="normal">1.800.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-ba-tu.png" title="Mèo Ba Tư" alt="meobatu">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MÈO BA TƯ</li>
                            <li class="unline-decoration-text">15.000.000đ</li>
                            <li class="normal">10.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/maincoon.png" title="Mèo Maine Coon" alt="mainecoon">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>MAINE COON</li>
                            <li class="unline-decoration-text">10.000.000đ</li>
                            <li class="normal">5.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-Scottish.jpg" title="Mèo Scottish" alt="meoscottish">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>SCOTTISH</li>
                            <li class="unline-decoration-text">30.000.000đ</li>
                            <li class="normal">20.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-Ragdoll-mat-xanh.png" title="Mèo Ragdoll" alt="meoRagdollmatxanh">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>RAGDOLL</li>
                            <li class="unline-decoration-text">15.000.000đ</li>
                            <li class="normal">12.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-cat">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/cat/meo-bengal.jpg" alt="meobengal">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>BENGAL</li>
                            <li class="unline-decoration-text">22.000.000đ</li>
                            <li class="normal">15.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </main>
<?php
  include 'footer.php';
?>