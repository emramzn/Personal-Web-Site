<?php include "header.php";?>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/kesfetPaylasim.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
              <h1>Gündem , Güncel konular ve Daha Fazlası </h1>
              <!-- <span class="subheading">BİR DNA'NIN EŞLENMESİ ÜZERİNE</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container" >
      
      <div class="row">
          
          <div class="col-lg-10 col-sm-6 mb-6 mx-auto "> 
           
              <!-- ANASAYFADA YAZARLARIN GENEL OLARAK PAYLAŞTIĞI YAZILAR KONULAR VE HABERLER  -->

            <?php 
                  $sayac=0;
                  $genelGundem=$db->query("SELECT * FROM haftalikyayin",PDO::FETCH_ASSOC );
                  while ($kesfetBilgi=$genelGundem->fetch(PDO::FETCH_ASSOC)) { ?> 

                            <a href="kesfetIcerik.php?kesfetId=<?php echo $kesfetBilgi['konuid'];?>" style="text-decoration: none;">

                              <p style="color: black; font-weight:bold; " >

                            <img src="img/haftalikyayin.png" style="width: 24px; height: 24px;">&nbsp


                            <?php 

                              if (strlen($kesfetBilgi['kisabaslik'])>55)
                              {
                              
                                        echo  substr($kesfetBilgi['kisabaslik'] ,0,55)."..."; 
                              }
                              else 
                              {

                                echo    $kesfetBilgi['kisabaslik'];

                              }

                            ?>
                               </p>
                               <p><?php  echo  trim(strip_tags(str_replace('&nbsp;', null, substr($kesfetBilgi['konu'] ,0,200))))."...";  ?></p>


                         </a>
                          <p class="post-meta " style="text-align:right; font-size: 14px; " >
                        <a href="personalWork.php?yazarID=<?php echo $kesfetBilgi['yazarId'];?>"> <?php echo $kesfetBilgi['yazar']; ?>  </a>
                             Tarafından <?php echo $kesfetBilgi['yayinTarih']; ?> 'da Paylaşıldı.   </p> 

               
             <?php       } ?>



          </div>

        </div>

      </div>


    </div>

    <!--  --------------------------------------------------------------------------- -->


    <hr>

<?php include "footer.php"; ?>