
<?php include "database.php";
session_start(); 

 ?>


<!DOCTYPE html>
<html lang="tr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title >Emre R. AYDIN </title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
     <link rel="icon" type="image/png" sizes="16x16" href="img/Adsız.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="homePage.php"><img style="width:64px; height: 64px;" src="img/Adsız.png">      Emre R. AYDIN </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"> </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="homePage.php" style="font-size: 20px" >BLOG</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="muhendislik.php" style="font-size: 20px" >MÜHENDİSLİK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="writers.php" style="font-size: 20px" >HAKKIMDA</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="distanMail.php"style="font-size: 20px" >İLETİŞİM</a>
            </li>
           

              <?php if (!isset($_SESSION['kullaniciAdi'])) {   ?>
       <!--                  
               <li class="nav-item">
          <a class="nav-link" href="AdminInterface/login-form/loginPage.php"><img style="width:32px; height: 32px; " src="img/iconfinder_logout_54331.png "> </a>
                    </li>
                             --> 
            <?php } 

            else {     ?> 

            <!--KULLANICI ADINA GÖRE ÇALIŞMLARININ GÖSTERİLDİĞİ SAYFAYA GİTMEK İÇİN KULLANICI BİLGİLERİ ÇEKİLDİ-->


        <?php 

          $kulAdi= $_SESSION['kullaniciAdi'];
          
          $calismaSayfasi=$db->query("SELECT kulid FROM kullanicilar where kullaniciAdi='$kulAdi'",PDO::FETCH_ASSOC);
          
          $calismalar=$calismaSayfasi->fetch(PDO::FETCH_ASSOC);
           ?>


            <!------------------------------------------------------------------------------------------------>

<!-- 
                  <li class="nav-item">
                <a class="nav-link" href="MyWork.php?writerID=<?php echo $calismalar['kulid'];?>"><img style="width:32px; height: 32px; " src="img/iconfinder_Instagram_UI-17_2315585.png"><?php echo $_SESSION['kullaniciAdi']; ?></a>

                  </li>
 -->

            <?php } ?>
      

          </ul>
        </div>
      </div>
    </nav>