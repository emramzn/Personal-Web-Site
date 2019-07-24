<?php 
include "database.php";

		$ad="İşlemtim sistemi";
		$PageDel=$db->query("DELETE FROM menusayfalari where menuSayfaAd='$ad'");
		
        // $yayinGuncelle=$db->prepare("UPDATE menusayfalari SET sayfaid='4' where menuSayfaAd='$ad'");
        // $guncellemeDurumu=$yayinGuncelle->execute();



 ?>