<?php


if (isset($_POST['cevapla'])) {

		


			require 'PHPMailer/PHPMailerAutoload.php';

			$mail=new PHPMAILER();
			$mail->isSMTP();
			//$mail->SMTPKeepalive=true;
			$mail->SMTPAuth=true;
			$mail->SMTPDebug=0;
			$mail->SMTPSecure='tls';
			$mail->Host='smtp.gmail.com';
			$mail->Port=587;
			$mail->isHTML(true);
			$mail->SetLanguage('tr','PHPMailer/language');
			$mail->CharSet='UTF-8';
			$mail->Username='emramzn@gmail.com';
			$mail->Password='emre66aydin123456';
			$mail->SetFrom($mail->Username, $_POST['kuAdi']);
			$mail->AddAddress($_POST['eposta'],'www.emreaydin.com');
			$mail->Subject=("Geleceği Yazanlar 'dan Bir Mesaj Var.");
			$mail->MsgHTML($_POST['cevapmesaji']);
			$durum=$mail->send();

			if ($durum) {
				header("location:html/ltr/iletisimSekmesi.php?durum=ok");
			}

			else {
				header("location:html/ltr/iletisimSekmesi.php?durum=no");

			}



}




 



?>