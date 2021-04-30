<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Turnike</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="search-btn search-switch">
            <i class="fa fa-search"></i>
        </div>
        <div class="header__top--canvas">
            <div class="ht-info">
                <ul>
                    <li></li>
					
					
					
                      <li><a href="loginsytem/logout.php">Çıkış Yap</a></li>
                   
                </ul>
            </div>
            <div class="ht-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <ul class="main-menu mobile-menu">
            <li class="active"><a href="kulindex.php">Ana Sayfa</a></li>
            <li><a href="">Müsabakalar</a></li>
            <li><a href="">Hakkımızda</a></li>
            <li><a href="club.php">Profil</a></li>
            
                </ul>
            </li>
        
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ht-info">
                            <ul>
                               Hoşgeldin

     		<?php 
include("deneme.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
 
<?php
$id = $_SESSION['id'];

$num = $con->query("SELECT * FROM users where id='$id'"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $num->fetch_assoc()) { 

$id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$fname = $sonuc['fname'];
$password = $sonuc['password'];
$lname = $sonuc['lname'];
$email = $sonuc['email'];
$contactno = $sonuc['contactno'];
$posting_date = $sonuc['posting_date'];
?>
	<td> <?php echo $fname; ?></td>

	


<?php } ?>
                         &ensp;&ensp;&ensp;&ensp;
   <li><a href="index.php">Çıkış Yap</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ht-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="kulindex.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <ul class="main-menu">
                                <li class="active"><a href="kulindex.php">Ana Sayfa</a></li>
                                <li><a href="">Müsabakalar</a></li>
                                <li><a href="">Hakkımızda</a></li>
                                <li><a href="club.php">Profil</a></li>
                       
                         
                                    </ul>
                                </li>
                 
                            </ul>
                            <div class="nm-right search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h4>23 Nisan 18:00</h4>
                                        <h2>Sporting - Basel</h2>
                                        <a href="handkerchief-master/index.php" class="primary-btn">Hemen Bilet Al</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Trending News Section End -->

    <!-- Match Section Begin -->
    <section class="match-section set-bg" data-setbg="img/match/match-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Lig Maçları</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/a.jpg" alt="">
                                            <h6>Trabzonspor</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Süper Lig</div>
                                            <h4>VS</h4>
                                            <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/2.jpg" alt="">
                                            <h6>Galatasaray</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/3.jpg" alt="">
                                            <h6>Göztepe</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Süper Lig</div>
                                            <h4>VS</h4>
                                       <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/4.jpg" alt="">
                                            <h6>Beşiktaş</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/5.jpg" alt="">
                                            <h6>Bursaspor</h6>
                                        </td>
                                         <td class="mt-content">
                                            <div class="mc-op">Süper Lig</div>
                                            <h4>VS</h4>
                                         <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/6.jpg" alt="">
                                            <h6>Rizespor</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Milli Maçlar</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-1.jpg" alt="">
                                            <h6>ABD</h6>
                                        </td>
                                         <td class="mt-content">
                                            <div class="mc-op">Dostluk Maçı</div>
                                            <h4>VS</h4>
                                           <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-2.jpg" alt="">
                                            <h6>İngiltere</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-3.jpg" alt="">
                                            <h6>Fransa</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Dostluk Maçı</div>
                                            <h4>VS</h4>
                                         <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-4.jpg" alt="">
                                            <h6>Çin</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-5.jpg" alt="">
                                            <h6>Kyrgyz</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Dostluk Maçı </div>
                                            <h4>VS</h4>
                                         <div class="mc-op"><a href="">Hemen Bilet Al</a></div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-6.jpg" alt="">
                                            <h6 class="mi-right">Almanya</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Match Section End -->

<?php

include("footer.php");
?>