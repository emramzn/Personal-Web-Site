<?php include"header.php";




$muhders=$db->query("SELECT * FROM menusayfalari  ",PDO::FETCH_ASSOC);


?>


<div class="col-md-12" style="background-color: green; " ></div>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/engineeringBackplan.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
            <h4 style="" ></h4>
              
           
            </div>
          </div>
        </div>
      </div>

    </header>


    <div class="container" >
      <div class="row">
        <div class="col-md-12 text-center" >  
     <h2>Mühendislik Dersleri</h2>
         <hr></div>  <br>
           
        <?php 
        
      while ($muhdersicerik=$muhders->fetch(PDO::FETCH_ASSOC)) {?>
       

      <hr> <div class="col-md-12" ><h3 style="text-align: center;" ><?php echo "Ders 1 : " .$muhdersicerik['menuSayfaAd'];  ?></h3><br></div>

        <div class="container">


              <div class="row" style="margin-left:30px; margin-right: 30px; margin-bottom: 30px; margin-top:30px;   ">    
   
       
              <?php

              $sayf=$muhdersicerik['menuSayfaAd']; 
              $calismaSorgu=$db->query("SELECT * FROM icerik where icerikSayfaAd='$sayf' ",PDO::FETCH_ASSOC);
               while ($muhcalisma=$calismaSorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      
                         <div class="card" style="width: 18.7rem; margin-bottom: 10px; margin-top: 10px; margin-right: 10px; margin-left: 10px; ">
                          <img class="card-img-top" align="center" style=" margin-left:30px; margin-right: 30px; margin-top: 20px;  width: 15rem; height: 15rem;" src="AdminInterface/assets/icerikler/<?php echo $muhcalisma['icerikFoto']; ?>.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title" style="text-align: center;" ><?php echo $muhcalisma['icerikIcBaslik']; ?></h5>
                            <p class="card-text"><?php echo $muhcalisma['icerikAciklama']; ?></p>
                            <a href="article.php?icerikId=<?php echo $muhcalisma['icerikID']; ?>" class="btn btn-primary">Daha fazla </a>


                          </div>
                          
                        </div>


                        <?php  } ?>




            </div>

    
          <?php   }?>


        </div>


              <div class="col-lg-6 col-sm-6 mb-6 " align="right"  >
            <div class="post-preview">

            <a href="personalWork.php?yazarID=<?php //echo $muhcalisma['kulid'];?>">
              <h2 class="post-title" style="font-size: 25px;"  >
                
                   <img style="width: 300px; height: 200px;"  src="AdminInterface/assets/icerikler/<?php echo $muhcalisma['icerikFoto'];?>.jpg" alt="">
             
              
              </h2>
              <a href="personalWork.php?yazarID=<?php //echo $muhcalisma['kulid'];?>">
              <h2 class="post-title" style="font-size: 25px;"  >
                
                   <img style="width: 300px; height: 200px;"  src="AdminInterface/assets/icerikler/<?php echo $muhcalisma['icerikFoto'];?>.jpg" alt="">
             
              
              </h2>
               

            </a>
              
             
          </div>
          <!-- </div> -->
          </div>


         

          </div>

        </div>

      </div>


    

    <!--  --------------------------------------------------------------------------- -->




    <!--  ANASAYFADA PAYLAŞILAN YAZARLARIN KONULARI VE ÇALIŞMALARIN SERGİLENDİĞİ BÖLÜM -->

     

<?php include "footer.php"; ?>