<?php
    require("ketNoiDatabase.php");
    $sql = "SELECT * FROM `sanpham`";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/style_quan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ABC Shop</title>
    </head>
    <body>
        <div class="div1">   
            <div class="topnav1">
                <b><a href="../admin/index.php">Login Admin</a></b>
                <b><a href="../html/home.html">Home</a></b>
                <b><a href="../html/help.html">Help</a></b>
                <b><a href="../html/about.html">About</a></b>
                <b><a href="../html/store.php">Store</a></b>
            </div>
        </div>

        <a class="active" href="../html/home.html">
            <img src="../images/logo1.jpg" alt="logo1" id="logo" />
        </a>

        <div class="div2">
            <div class="topnav2">
                <b><a href="../html/ao.php">Áo</a></b>
                <b><a href="../html/giay.php">Giày</a></b>
                <b><a  class = "active" href="../html/quan.php">Quần</a></b>
                <!-- chưa thể sử dụng chức năng search -->
                <!-- <input type="text" placeholder="Search.." class="search1"> -->
            </div>
        </div>
        <div class="wrapper">
            <div class="headline">
                <h3>Quần</h3>
            </div>
            <ul class="products">
                <!-- display data -->
                <?php 
                    while($row = mysqli_fetch_array($query)){
                        if($row['loaisp'] == 'quan'){
                ?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="../html/contact-order.html"class="product-thumb">
                                <img src='../images/<?= $row["imgURL"] ?>' alt="">
                                
                            </a>
                            <a href="../html/contact-order.html" class="buy-now">Mua ngay</a>
                            <!-- Mua ngay -->   
                        </div>
                        <div class="product-info">
                            <a href="" class="product-cat"><?= $row["mota"] ?></a>
                            <a href="" class="product-name"><?= $row["tensp"] ?></a>
                            <div class="product-price"><?= $row["gia"] ?>&nbsp; VNĐ</div>
                        </div>
                    </div>
                </li>
                <?php }}?>
                 
            </ul>
        </div>
        <div class="div-table">
            <table>
                <tr>
                    <th>ABOUT SHOP ABC</th>
                    <th>CONTACT</th>
                    <th>SOCIAL</th>
                </tr>
                <tr>
                    <th class="intro">
                        Đây là shop quần áo ABC, cửa hàng chuyên phân phối các hãng thời trang như adidas, nike,uniqlo,...
                    </th>
                    <th>Địa chỉ: E1/4D/4F Chế Lan Viên, Tân Bình,TP Hồ Chí Minh</th>
                    <th>
                        <a href="https://www.facebook.com/profile.php?id=100084103445746" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/abcshop.vn/" class="fa fa-instagram"></a>
                        <a href="https://www.youtube.com/channel/UCAeyK4aib48clAFKgcvfqXg" class="fa fa-youtube"></a>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>SĐT: 0987654321</th>
                </tr>
               <tr>
                    <th></th>
                    <th>Email: shopabc@gmail.com</th>
                </tr>
                <tr>
                    <th></th>
                    <th>Copyright © 2022 shopABC | Design by teamABC</th>
                </tr>
            </table>
        </div>

    
    </body>
</html>