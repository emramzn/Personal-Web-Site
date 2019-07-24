<?php include "header.php";
  

    $yazarGEt=$_GET['writerID'];

    $yazarKimlik=$db->query("SELECT * FROM kullanicilar where kulid=$yazarGEt ",PDO::FETCH_ASSOC);
    $yazarBilgi=$yazarKimlik->fetch(PDO::FETCH_ASSOC);

  ?>
  

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/backplan1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
          <img style="width: 200px; height: 200px;" class="rounded-circle img-fluid d-block mx-auto"
           src="AdminInterface/assets/images/users/<?php echo $yazarBilgi['fotograf'];?>.jpg" alt="">
              <h2><?php echo $yazarBilgi['ad']." ".$yazarBilgi['soyad'];?> </h2>


              <?php echo $yazarBilgi['eposta']; ?>

            
            </div>
          </div>
        </div>
      </div>
    </header>

    <br>
    <br>
    <div class="container">

       <div class="col-lg-10 col-sm-6 mb-6 text-center mx-auto "> 

        <h3>Makale ve Çalışmalar</h3>

       </div>
    <hr>

      <div class="row">

          <?php $konuSergi=$db->query("SELECT * FROM icerik where yazarId='$yazarGEt'",PDO::FETCH_ASSOC);

          while($konuYaz=$konuSergi->fetch(PDO::FETCH_ASSOC))

              {
           ?>


         <!--  <div class="container"> -->
           <div class="col-lg-6 col-sm-6 mb-6 text-center mx-auto"  >
            <div class="post-preview">
            <a href="article.php?icerikId=<?php echo $konuYaz['icerikID'];?>">
              <h2 class="post-title" style="font-size: 25px;"  >
                  <!--   <img style="width: 150px; height: 100px;" src="img/contact-bg.jpg"> -->
                    <img style="width: 200px; height: 200px;" class="rounded-circle img-fluid d-block mx-auto" src="AdminInterface/assets/icerikler/<?php echo $konuYaz['icerikFoto'];?>.jpg" alt="">
                 <!--   <img style="width: 60px; width: 60px;" src="img/anasayfakonufoto.png"> -->
               <?php echo $konuYaz['icerikIcBaslik']; ?>
              </h2>
               <h3 class="post-subtitle">
                <?php echo $konuYaz['icerikAciklama']; ?>

              </h3>
            </a>
            <p class="post-meta " >
               <a href="personelPage/personalPage.php?icerikId=<?php echo $konuYaz['icerikID'];?>"> </a>
              <?php echo $konuYaz['icerikTarih']; ?> Tarihinde Düzenlendi.</p>
          </div>
          <!-- </div> -->
          </div>
          <hr >
          <?php } ?>

          <!-- Pager -->
       <!--    <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          
        </div> -->
      </div>
    </div>

    <hr>

<?php include "footer.php"; ?>