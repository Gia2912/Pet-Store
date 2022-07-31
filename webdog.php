<?php 
include 'config.php';
//$user = [];
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
//$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<<head>
    <meta charset="UTF-8">
    <title>Trang trại chó cảnh</title>
    <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
    <link rel="stylesheet" href="./css/webdog.css">
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
        <div class="photodog">
            <img src="./img/cho-canh.jpg">
        </div>
        <div class="word">
            <h1 style="font-size: 130%; color:white; text-align: center ;">TRANG TRẠI CHÓ CẢNH</h1>
        </div>
        <section id="dog">
            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/alaska.png" title="Chó Alaska" alt="cho-alaska">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>ALASKA</li>
                            <li class="unline-decoration-text">27.000.000đ</li>
                            <li class="normal">20.000.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./corgi.php">
                        <img src="./img/dog/cogi.png" title="Chó Corgi" alt="cho-corgi">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>CORGI</li>
                            <li class="unline-decoration-text">15.000.000đ</li>
                            <li class="normal">13.500.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./golden.php">
                        <img src="./img/dog/golden.png" title="Chó Golden" alt="cho-golden">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>GOLDEN</li>
                            <li class="unline-decoration-text">12.000.000đ</li>
                            <li class="normal">10.200.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/husky.png" title="Chó Husky" alt="cho-husky">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>HUSKY</li>
                            <li class="unline-decoration-text">26.000.000đ</li>
                            <li class="normal">15.500.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/pug.png" title="Chó Pug" alt="cho-pug">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>PUG</li>
                            <li class="unline-decoration-text">50.000.000đ</li>
                            <li class="normal">40.500.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/shiba.png" title="Chó Shiba" alt="cho-shiba">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>SHIBA</li>
                            <li class="unline-decoration-text">45.500.000đ</li>
                            <li class="normal">37.999.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/cho-poodle.jpg" title="Chó Poodle" alt="cho-poodle">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>POODLE</li>
                            <li class="unline-decoration-text">10.000.000đ</li>
                            <li class="normal">8.999.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-dog">
                <div class="picture">
                    <a href="./giohang.php">
                        <img src="./img/dog/Beagle.jpg" title="Chó Beagle" alt="cho-beagle">
                    </a>
                    <div class="desc">
                        <ul>
                            <li>BEAGLE</li>
                            <li class="unline-decoration-text">30.000.000đ</li>
                            <li class="normal">15.600.000đ</li>
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