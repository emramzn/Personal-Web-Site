<?php include"header.php"; 

$yazarGEt=$_GET['yazarID'];

$yazarKimlik=$db->query("SELECT * FROM icerik where yazarId='$yazarGEt' ",PDO::FETCH_ASSOC);
$yazarBilgi=$yazarKimlik->fetch(PDO::FETCH_ASSOC);


$yazarSorgu=$db->query("SELECT * FROM kullanicilar where kulId='$yazarGEt' ",PDO::FETCH_ASSOC);
$yazarProfil=$yazarSorgu->fetch(PDO::FETCH_ASSOC);

?>



   <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
            <img style="width: 200px; height: 200px;" class="rounded-circle img-fluid d-block mx-auto" src="AdminInterface/assets/images/users/<?php echo $yazarProfil['fotograf'];?>.jpg" alt="">
              <h2><?php echo $yazarProfil['ad'] ." ".$yazarProfil['soyad']; ?> </h2>
              <?php echo $yazarProfil['eposta']; ?><br>
              <span class="subheading">"Her soru bir arayıştır."Martin Heidegger"</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Sorularınız için Lütfen Form üzerinden iletişime Geçin.</p>

          <?php if (@$_GET['durum']=='ok') { ?>


       			 <div class="col-md-12" ><img src="img/AcceptIcon.png"> Mesajınız Başarıyla iletildi. </div>
           
        <?php  }  elseif (@$_GET['durum']=='no') { ?>

               <div class="col-md-12" ><img src="img/notAccept.png"  > Mesajınız iletimi Başarısız Lütfen sayfayı yeniden başlatıp Tekrar deneyin . </div>
          	
        <?php   } ?>



       

        <form action="AdminInterface/dataman.php" method="POST" >

          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>İSİM </label>
                <input autocomplete="off" type="text" class="form-control" placeholder="İsim" id="name" name="isim" required data-validation-required-message="Lütfen adınızı girin.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>E-POSTA</label>
                <input autocomplete="off" type="email" class="form-control" placeholder="E-Posta Adresi" id="email" name="eposta" required data-validation-required-message="Lütfen E-Posta adresinizi girin.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>MESAJ</label>
                <textarea rows="5" class="form-control" placeholder="Mesaj" id="message" name="mesaj" required data-validation-required-message="Lütfen İletmek istediğiniz mesajı/Soruyu yazın."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <input type="text" hidden="" name="yazarId" value="<?php echo $yazarGEt; ?>">
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="iletisimKur" id="sendMessageButton">Gönder</button>
            </div>
          </form>

 	</form>

        </div>
      </div>
    </div>

    





<?php include "footer.php"; ?>