<?php include "header.php";

  
                 	
 $konuID=$_GET['kesfetId'];	

 $kesfetIcerik=$db->query("SELECT * FROM haftalikyayin WHERE konuid='$konuID'",PDO::FETCH_ASSOC);
 $tamIcerik=$kesfetIcerik->fetch(PDO::FETCH_ASSOC); 




?>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/articleForWork.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto">
            <div class="site-heading">
              <h2 style="font-style: bold " ><?php echo $tamIcerik['kisabaslik']?></h2>
             <span class="subheading"><?php echo $tamIcerik['yayinTarih']; ?></span> 
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container" >
      
      <div class="row">
          
         <div class="col-lg-8 col-md-10 mx-auto">
           
          	 <h3><?php echo $tamIcerik['kisabaslik']; ?></h3>

          

                 <p><?php echo $tamIcerik['konu']; ?></p>	


               



          </div>

        </div>

      </div>


    </div>

    
   

<?php include "footer.php"; ?>