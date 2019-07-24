<!DOCTYPE HTML>
<?php 
session_start();

if (!isset($_SESSION['kullaniciAdi'])) {

	?>

	<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Sisteme Giriş</title>

	<!--- CSS --->
	<link rel="stylesheet" href="style2.css" type="text/css" />
	

	</head>

	<body>
		<div id="container">
			<?php if (@$_GET['durum']=='no') { ?>
	
      
			<h2 style="text-align: center; color : red;">Giriş Başarısız Tekrar Dene!!</h2>


			<?php } ?>

			<form action="../dataman.php" method="POST" >
				<div class="login">Emre R. AYDIN</div>
				<div class="username-text">Kullanıcı Adın  </div>
				<div class="password-text">Parolan </div>
				<div class="username-field">
					<input type="text" name="username" placeholder="kullanici Adi" autocomplete="off"  />
				</div>
				<div class="password-field">
					<input type="password" name="parola" placeholder="Parola" autocomplete="off"  />
				</div>

				<input style="display: none;" type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">Unutma Beni</label>
				
				<div  class="forgot-usr-pwd"> <a href="#"></a> </div>



				<input  type="submit" name="giris" value="Başla" />


<!-- 
				<div class="col-md-12"  ><a style="color: white; margin-left: 20px; " href="../html/ltr/newregester.php">Çalışmalarını Paylamak için Sende bize katıl</a></div> -->

			</form>




		</div>
		<!-- <div id="footer">
			 <a href="http://azmind.com"></a> - <a href="http://azmind.com/2012/01/15/create-a-clean-web-2-0-login-form-part-2-html-css/"></a>
		</div> -->
	</body>
</html>

	
<?php } else {
	header("location:../../html/ltr/anasayfa.php");
} 
 ?>

