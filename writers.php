<?php include"header.php";




$yazarSorgu=$db->query("SELECT * FROM kullanicilar  ",PDO::FETCH_ASSOC);




?>


<div class="col-md-12" style="background-color: green; " ></div>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/arkaplan5.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
            
              <h2>Hakkımda</h2>
           
            </div>
          </div>
        </div>
      </div>

    </header>


    <div class="container" >
      <div class="row">
        <div class="col-md-12 text-center" >  
        <!-- <h2>SHARE WORK 'DE ÇALIŞMALAR YAPAN YAZARLAR</h2> -->
         <hr></div>  <br>
           
    <?php 
        
     
        while ($yazarProfil=$yazarSorgu->fetch(PDO::FETCH_ASSOC)) {
        

         ?> 

   <div class="col-md-12">
    <div class="container">
      <div  class="row">

                    <div class="col-md-6" > <img  style="width: 300px; height: 500px;"  src="AdminInterface/assets/images/users/<?php echo $yazarProfil['fotograf'];?>.jpg" alt=""> 
             </div>

             
             <div class="col-md-6" >  <p><?php echo $yazarProfil["hakkimda"]; ?>
              </p><a title="Emre R. AYDIN" href="https://www.instagram.com/emre.r.aydn"><img style="width: 64px; height: 64px;" src="img/instagram.png">&nbsp&nbsp&nbsp&nbsp</a>
              <a title="Emre R. AYDIN" target="_blank" href="https://www.linkedin.com/in/emre-r-aydin-08864b14a" > <img style="width: 64px; height: 64px;" src="img/linkedin.png"></a>
       </div>


                  </div>


      </div>
    </div>


              <div class="col-lg-6 col-sm-6 mb-6 text-center  mx-auto"  >
            <div class="post-preview">
            <a href="personalWork.php?yazarID=<?php echo $yazarProfil['kulid'];?>">
              <h2 class="post-title" style="font-size: 25px;"  >
      
            </a>
              
              
              </h2>
            
             
          </div>
          <!-- </div> -->
          </div>


           <?php } ?>
         
          </div>

        </div>

      </div>


    

    <!--  --------------------------------------------------------------------------- -->

    <div class="col-md-12" >
      
      <div class="container" >
        
     <div class="row">
       
    

     </div>

      </div>

    </div>


    <!--  ANASAYFADA PAYLAŞILAN YAZARLARIN KONULARI VE ÇALIŞMALARIN SERGİLENDİĞİ BÖLÜM -->

     

<?php include "footer.php"; ?>