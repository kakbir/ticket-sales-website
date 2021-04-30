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


	


<?php } ?>
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
                      <li><a href="./index.php">Çıkış Yap</a></li>
                   
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Profil</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Club Section Begin -->
    <section class="club-section spad">
        <div class="container">
            <div class="club-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cc-pic">
                            <img src="img/kul.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cc-text">
                            <div class="ct-title">
							

                   <h3>	<td> <?php echo $fname; ?></td>	<td> <?php echo $lname; ?></td></h3>
                            
                            </div>
                            <div class="ct-widget">
                                <ul>
                                    <li>
                                        <h5>Email</h5>
                                        <p><?php echo $email; ?></td></p>
                                    </li>
                                    <li>
                                        <h5>İletişim Numarası</h5>
                                        <p><?php echo $contactno; ?></td></p>
                                    </li>
                                    <li>
                                        <h5>Kayıt Tarihi</h5>
                                        <p><?php echo $posting_date; ?></td></p>
                                    </li>
                                   
                                    <li>
                                        <h5>Social</h5>
                                        <div class="cw-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php
error_reporting(0);
?>
            <div class="club-tab-list">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                     <a class="nav-link" href="bilet.php" role="tab" href="bilet.php">Biletlerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kombi.php" role="tab" href="kombi.php">Kombinelerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="duzenle.php" role="tab" href="duzenle.php">Profil Düzenle</a>
                            </li>
                   
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="club-tab-content">
                                    <div class="ct-item">
                                        <div class="ci-text">
                                            <img src="img/club/ad.png" alt="">
                                            <h5>Ad
</h5>
                                        </div>
                                        <div class="ci-name">
										<?php 

$sorgu = $con->query("SELECT * FROM users WHERE id ='$id'"); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>




<form action="" method="post">
	
	<table>
		
		<tr>

			<td><input type="text" name="fname" class="form-control" value="<?php echo $sonuc['fname']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
				
			

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$fname = $_POST['fname']; // Post edilen değerleri değişkenlere aktarıyoruz


	if ($fname<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($con->query("UPDATE users SET fname = '$fname' WHERE id ='$id'")) // Veri güncelleme sorgumuzu yazıyoruz.
		{

		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>





										
										
										
										
										</div>
                                    </div>
                                    <div class="ct-item">
                                        <div class="ci-text">
                                            <img src="img/club/ad.png" alt="">
                                            <h5>Soyad</h5>
                                        </div>
                                        <div class="ci-name">										<?php 

$sorgu = $con->query("SELECT * FROM users WHERE id ='$id'"); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>




<form action="" method="post">
	
	<table>
		
		<tr>

			<td><input type="text" name="lname" class="form-control" value="<?php echo $sonuc['lname']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
				
			

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$lname = $_POST['lname']; // Post edilen değerleri değişkenlere aktarıyoruz


	if ($lname<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($con->query("UPDATE users SET lname = '$lname' WHERE id ='$id'")) // Veri güncelleme sorgumuzu yazıyoruz.
		{

		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>
</div>
                                    </div>
                                    <div class="ct-item">
                                        <div class="ci-text">
                                            <img src="img/club/mail.png" alt="">
                                            <h5>Email</h5>
                                        </div>
                                        <div class="ci-name">										<?php 

$sorgu = $con->query("SELECT * FROM users WHERE id ='$id'"); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>




<form action="" method="post">
	
	<table>
		
		<tr>

			<td><input type="text" name="email" class="form-control" value="<?php echo $sonuc['email']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
				
			

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$email = $_POST['email']; // Post edilen değerleri değişkenlere aktarıyoruz


	if ($email<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($con->query("UPDATE users SET email = '$email' WHERE id ='$id'")) // Veri güncelleme sorgumuzu yazıyoruz.
		{

		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>
</div>
                                    </div>
									
									
									 <div class="ct-item">
                                        <div class="ci-text">
                                            <img src="img/club/tel.png" alt="">
                                            <h5>Telefon Numarası</h5>
                                        </div>
                                        <div class="ci-name">										<?php 

$sorgu = $con->query("SELECT * FROM users WHERE id ='$id'"); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>




<form action="" method="post">
	
	<table>
		
		<tr>

			<td><input type="text" name="contactno" class="form-control" value="<?php echo $sonuc['contactno']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
				
			

		<tr>
			<td><input name="club.php" type="submit" class="btn btn-primary" value="Kaydet" href="club.php"></td>
		</tr>

		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$contactno = $_POST['contactno']; // Post edilen değerleri değişkenlere aktarıyoruz


	if ($contactno<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($con->query("UPDATE users SET contactno = '$contactno' WHERE id ='$id'")) // Veri güncelleme sorgumuzu yazıyoruz.
		{

		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>
</div>
                                    </div>
									
									 <div class="ct-item">
                                        <div class="ci-text">
                                            <img src="img/club/pass.png" alt="">
                                            <h5>Şifre</h5>
                                        </div>
                                        <div class="ci-name">										<?php 

$sorgu = $con->query("SELECT * FROM users WHERE id ='$id'"); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>




<form action="" method="post">
	
	<table>
		
		<tr>

			<td><input type="text" name="password" class="form-control" value="<?php echo $sonuc['password']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
				
			

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$password = $_POST['password']; // Post edilen değerleri değişkenlere aktarıyoruz


	if ($password<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($con->query("UPDATE users SET password = '$password' WHERE id ='$id'")) // Veri güncelleme sorgumuzu yazıyoruz.
		{

		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>
</div>
                                    </div>
                          
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Club Section End -->

  
<?php

include("footer.php");
?>