<?php include"header.php";



$yazarGEt=$_GET['yazarID'];

$yazarKimlik=$db->query("SELECT * FROM icerik where yazarId='$yazarGEt' ",PDO::FETCH_ASSOC);
$yazarBilgi=$yazarKimlik->fetch(PDO::FETCH_ASSOC);


$yazarSorgu=$db->query("SELECT * FROM kullanicilar where kulId='$yazarGEt' ",PDO::FETCH_ASSOC);
$yazarProfil=$yazarSorgu->fetch(PDO::FETCH_ASSOC);



?>


<div class="col-md-12" style="background-color: green; " ></div>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/backplan1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
            <img style="width: 200px; height: 200px;" class="rounded-circle img-fluid d-block mx-auto" src="AdminInterface/assets/images/users/<?php echo $yazarProfil['fotograf'];?>.jpg" alt="">
              <h2><?php echo $yazarProfil['ad'] ." ".$yazarProfil['soyad']; ?> </h2>
              <?php echo $yazarProfil['eposta']; ?><br>
             
              <br>
               

                    <?php if ($yazarGEt!=(isset($_SESSION['KULID']) ? $_SESSION['KULID'] : null) )

                    { ?>
                      
                    <a href="contactWriter.php?yazarID=<?php echo $yazarGEt;?>" title="İletişim Kur" >
                      <img src="img/messageIcon.png" >
                      </a> 

                <?php   } ?>



              
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container" >
      <div class="row">
        <div class="col-md-12 text-center" >  
        <h2>KİŞİSEL ÇALIŞMALAR</h2>
         <hr></div>  <br>
           
    <?php 
      	$yazarAd=$yazarBilgi['yazar'];

      	$calisma=$db->query("SELECT * FROM  icerik where yazarId ='$yazarGEt'",PDO::FETCH_ASSOC);

      	while ($calismaSergile=$calisma->fetch(PDO::FETCH_ASSOC)) {
      	


      	 ?>	


      	 		  <div class="col-lg-6 col-sm-6 mb-6 text-center mx-auto"  >
            <div class="post-preview">
            <a href="article.php?icerikId=<?php echo $calismaSergile['icerikID'];?>">
              <h2 class="post-title" style="font-size: 25px;"  >
                  <!--   <img style="width: 150px; height: 100px;" src="img/contact-bg.jpg"> -->
                   <img style="width: 200px; height: 200px;" class="rounded-circle img-fluid d-block mx-auto" src="AdminInterface/assets/icerikler/<?php echo $calismaSergile['icerikFoto'];?>.jpg" alt="">
                 <!--   <img style="width: 60px; width: 60px;" src="img/anasayfakonufoto.png"> -->
               <?php echo $calismaSergile['icerikIcBaslik']; ?>
              </h2>
               <h3 class="post-subtitle">
                <?php echo $calismaSergile['icerikAciklama']; ?>

              </h3>
            </a>
           
              <?php echo $calismaSergile['icerikTarih']; ?> Tarihinde Düzenlendi.</p>
          </div>
          <!-- </div> -->
          </div>


           <?php } ?>

          </div>

        </div>

      </div>


    

    <!--  --------------------------------------------------------------------------- -->




    <!--  ANASAYFADA PAYLAŞILAN YAZARLARIN KONULARI VE ÇALIŞMALARIN SERGİLENDİĞİ BÖLÜM -->

     

<?php include "footer.php"; ?>