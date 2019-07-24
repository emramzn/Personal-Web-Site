<?php include "header.php"; ?>

<head>
	
<link rel="stylesheet" href="styles/default.css">
<script src="highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</head>
   <?php

             $konuID=$_GET['icerikId'];

              $konuSergi=$db->query("SELECT * FROM muhsekme where icerikId='$konuID'",PDO::FETCH_ASSOC); 

              $konuYaz=$konuSergi->fetch(PDO::FETCH_ASSOC);
             ?>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/engineeringBackplan.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

          <h3><?php echo $konuYaz['icerikbaslik']; ?> </h3>
              
              <hr>
             <p><?php echo $konuYaz['icerik']; ?></p>          	 			
          	 	


          </div>
        </div>
      </div>
    </article>
     
           
    <hr>





<?php include "footer.php"; ?>