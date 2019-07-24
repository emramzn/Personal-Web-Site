<?php include "header.php"; ?>

<head>
	
<link rel="stylesheet" href="styles/default.css">
<script src="highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</head>
   <?php

             $konuID=$_GET['icerikId'];

              $konuSergi=$db->query("SELECT * FROM icerik where icerikID='$konuID'",PDO::FETCH_ASSOC); 

              $konuYaz=$konuSergi->fetch(PDO::FETCH_ASSOC);
             ?>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $konuYaz['icerikIcBaslik']; ?> </h1>
              <h2 class="subheading"><?php echo $konuYaz['icerikAciklama']; ?></h2>
              <span class="meta">
                <a href="personalWork.php?yazarID=<?php echo $konuYaz['yazarId']; ?>"><?php echo $konuYaz['yazar'];  ?></a>
                Tarafından <?php echo $konuYaz['icerikTarih']; ?> ' da Paylaşıldı.</span>
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



         


             <p><?php echo $konuYaz['icerik']; ?></p>          	 			
          	 	
          	 


          
           
          </div>
        </div>
      </div>
    </article>

    <hr>





<?php include "footer.php"; ?>