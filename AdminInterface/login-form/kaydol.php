
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body background="images/full01.png"> </body>
<div class="container">
	<div class="row">

		<h2 style="color: white" >  Çalışmalarını Dünya ile Paylaş</h2> </div>
        
       <!--  <form action="../dataman.php" method="POST"> -->

        	<form  class="form-horizontal" action="../dataman.php" method="POST" >
<fieldset>

<!-- Form Name -->
<legend>Bilgi için Sende Katıl </legend>

    
<!-- Text input-->
<!-- <div class="form-group"><div class="col-md-4" style="margin-left: 530px;" ><img style=" width:100px; height:100px; " src="images/register.png"></div></div> -->
<div class="form-group">

  <label class="col-md-4 control-label" for="textinput" style="color: white" >Ad </label>  
  <div class="col-md-4">
  <input id="textinput" name="ad" placeholder="Adınızı girin" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" style="color: white" >Soyad</label>  
  <div class="col-md-4">
  <input id="textinput" name="soyad" placeholder="Soyadınızı girin" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" style="color: white" >Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" placeholder="E-postanızı girin" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" style="color: white" >Parola</label>  
  <div class="col-md-4">
  <input id="textinput" name="parola" placeholder="Parola girin" class="form-control input-md" required="" type="password">
  <span class="help-block"> </span>  
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="singlebutton" name="yenikayit" class="btn btn-primary">Kaydol</button>
   
   <!--   <?php if (@$_GET['alanBos']='ok') {?>
       
      <h4>alanlar Boş geçilemez</h4>

     <?php  } ?> -->
<!--    <input type="submit" name="yenikayit">kaydol -->
  </div>
</div>

</fieldset>
</form>
<!-- </form> -->
  
	</div>
</div>