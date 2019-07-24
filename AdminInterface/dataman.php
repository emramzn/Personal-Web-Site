


<?php 
session_start();
include "database.php";	

// TÜRKÇE TARİH FONKSİYONU

function turkcetarih($f, $zt = 'now'){  
    $z = date("$f", strtotime($zt));  
    $donustur = array(  
        'Monday'    => 'Pazartesi',  
        'Tuesday'   => 'Salı',  
        'Wednesday' => 'Çarşamba',  
        'Thursday'  => 'Perşembe',  
        'Friday'    => 'Cuma',  
        'Saturday'  => 'Cumartesi',  
        'Sunday'    => 'Pazar',  
        'January'   => 'Ocak',  
        'February'  => 'Şubat',  
        'March'     => 'Mart',  
        'April'     => 'Nisan',  
        'May'       => 'Mayıs',  
        'June'      => 'Haziran',  
        'July'      => 'Temmuz',  
        'August'    => 'Ağustos',  
        'September' => 'Eylül',  
        'October'   => 'Ekim',  
        'November'  => 'Kasım',  
        'December'  => 'Aralık',  
     
    );  
    foreach($donustur as $en => $tr){  
        $z = str_replace($en, $tr, $z);  
    }  
    if(strpos($z, 'Mayıs') !== false && strpos($f, 'F') === false) $z = str_replace('Mayıs', 'May', $z);  
    return $z;  
}

$date=turkcetarih('j F Y',date('d F Y'));  


    require 'classUpload/src/class.upload.php';

    if ( isset( $_POST[ 'Profilguncelle' ] ) && $image = new Upload( $_FILES[ 'image' ] ) ) {

        if ( $image->uploaded ) {

            // // resmi yeniden adlandıralım
            $nameFoto=$_POST['kulID']."-"."profil".rand(00000,99999)."-".rand(00000,99999);
            $image->file_new_name_body = $nameFoto;
            // resmi jpg formatına convert edelim
             $image->image_convert = 'jpg';
          // upload klasörüne değişiklik yapmadan kayıt et

            $image->Process( 'assets/images/users' );
            $image->file_new_name_body = 'erbilen';
            $image->image_convert = 'jpg';
            $image->image_resize = true;
            $image->image_ratio_crop = true;
            $image->image_x = 700;
            $image->image_y = 700;
            // sadece resim formatları yüklensin
            $image->allowed = array ( 'image/*' );
            
            $image->Process( 'upload/700x700' );

            $tl=$image->file_new_name_body;

            $profilGuncelle=$db->prepare("UPDATE kullanicilar SET ad='".$_POST['ad']."',soyad='".$_POST['soyad']."',eposta='".$_POST['eposta']."',parola='".$_POST['parola']."' ,hakkimda='".$_POST["hakkimda"]."',fotograf='".$nameFoto."' WHERE kulid='".$_POST['kulID']."'");

            $guncellemeDurumu=$profilGuncelle->execute();
            $etkilenenKayit=$profilGuncelle->rowcount();

            if ($image->processed && $etkilenenKayit==1) {

                header("location:html/ltr/ProfilDuzenle.php?durum=ok");

            }else {

                header("location:html/ltr/ProfilDuzenle.php?durum=no");
            }


    }
    else
    {
        
            $profilGuncelle=$db->prepare("UPDATE kullanicilar SET ad='".$_POST['ad']."',soyad='".$_POST['soyad']."',eposta='".$_POST['eposta']."',parola='".$_POST['parola']."',hakkimda='".$_POST["hakkimda"]."'  WHERE kulid='".$_POST['kulID']."'");

            $guncellemeDurumu=$profilGuncelle->execute();
            $etkilenenKayit=$profilGuncelle->rowcount();

            if ( $etkilenenKayit==1) {

                header("location:html/ltr/ProfilDuzenle.php?durum=ok");

            }else {

                header("location:html/ltr/ProfilDuzenle.php?durum=no");
            }
    }

}



//Düzelenme Tarihi : 15.01.2019
//İşlevi : Kullanıcı profilini düzenleme.


 
    if ( isset( $_POST[ 'userProfilDuzenle' ] ) && $imageuser = new Upload( $_FILES[ 'userImage' ] ) ) {

        if ( $imageuser->uploaded ) {

            // // resmi yeniden adlandıralım
            $nameFoto=$_POST['kulID']."-"."profil".rand(00000,99999)."-".rand(00000,99999);
            $imageuser->file_new_name_body = $nameFoto;
            // resmi jpg formatına convert edelim
             $imageuser->image_convert = 'jpg';
          // upload klasörüne değişiklik yapmadan kayıt et

            $imageuser->Process( 'assets/images/users' );
            $imageuser->file_new_name_body = 'erbilen';
            $imageuser->image_convert = 'jpg';
            $imageuser->image_resize = true;
            $imageuser->image_ratio_crop = true;
            $imageuser->image_x = 200;
            $imageuser->image_y = 200;
            // sadece resim formatları yüklensin
            $imageuser->allowed = array ( 'image/*' );
            
            $imageuser->Process( 'upload/200x200' );

            $tl=$image->file_new_name_body;

            $profilGuncelle=$db->prepare("UPDATE kullanicilar SET ad='".$_POST['ad']."',soyad='".$_POST['soyad']."',eposta='".$_POST['eposta']."',parola='".$_POST['parola']."' ,fotograf='".$nameFoto."',yetki=".$_POST['yetki']." WHERE kulid='".$_POST['kulID']."'");

            $guncellemeDurumu=$profilGuncelle->execute();
            $etkilenenKayit=$profilGuncelle->rowcount();

            if ($imageuser->processed && $etkilenenKayit==1) {

                header("location:html/ltr/kullanicilar.php?durum=ok");

            }else {

                header("location:html/ltr/kullanicilar.php?durum=no");
            }


    }
    else
    {


        
        
            $profilGuncelle=$db->prepare("UPDATE kullanicilar SET ad='".$_POST['ad']."',soyad='".$_POST['soyad']."',eposta='".$_POST['eposta']."',parola='".$_POST['parola']."',yetki=".$_POST['yetki']."  WHERE kulid='".$_POST['kulID']."'");

            $guncellemeDurumu=$profilGuncelle->execute();
            $etkilenenKayit=$profilGuncelle->rowcount();

            if ( $etkilenenKayit==1) {

                header("location:html/ltr/kullanicilar.php?durum=ok");

            }else {

                header("location:html/ltr/kullanicilar.php?durum=no");
            }
    }

}

//Düzenleme:12.12.2018
//İşlevi: yayın silme

if (@$_GET['kulSil']=='ok') {
    
    $PageDel=$db->query("DELETE FROM kullanicilar where kulid='".$_GET['kulId']."'");



    if ($PageDel)
    {
        
        header("location:html/ltr/kullanicilar.php?durum=ok");
    }else

    {
        header("location:html/ltr/kullanicilar.php?durum=no");
    }


}




//Düzelenme Tarihi : 25.07.2018
//İşlevi : Sayfaya Yeni İçerik ekleme Kodu.

  

if (isset($_POST['muhIcerikEkle']) && $icerikFotomuh = new Upload( $_FILES[ 'muhfotoIcerik' ])) 
{


            if ( $icerikFotomuh->uploaded ) {

            // // resmi yeniden adlandıralım
            $iceriknameFoto="fotomuh"."-"."icerik".rand(00000,99999)."-".rand(00000,99999);
            $icerikFotomuh->file_new_name_body = $iceriknameFoto;
            // resmi jpg formatına convert edelim
             print($iceriknameFoto);
             $icerikFotomuh->image_convert = 'jpg';
            // upload klasörüne değişiklik yapmadan kayıt et

            $icerikFotomuh->Process('assets/icerikler');
            $icerikFotomuh->file_new_name_body = 'erbilen';
            $icerikFotomuh->image_convert = 'jpg';
            $icerikFotomuh->image_resize = true;
            $icerikFotomuh->image_ratio_crop = true;
            $icerikFotomuh->image_x = 200;
            $icerikFotomuh->image_y = 200;
            // sadece resim formatları yüklensin
            $icerikFotomuh->allowed = array ( 'image/*' );
            
            $icerikFotomuh->Process( 'upload/200x200' );




       
 $icerikEkle=$db->prepare("INSERT INTO muhsekme(icerikbaslik,tarih,aciklama,icerik,icerikfoto) values ('".$_POST['baslik']."','".$date."','".trim($_POST['aciklama'])."','".$_POST['muhFullIcerik']."','".$iceriknameFoto."')");
              $exeContent=$icerikEkle->execute(array());
              $countContent=$icerikEkle->rowcount();

//,'".trim($_POST['aciklama'])."','".$_POST['muhFullIcerik']."','".$iceriknameFoto."',aciklama,,icerikfoto,icerikbaslik,'",'".trim($_POST['baslik'])."'
    
            if ($icerikFotomuh->processed && $countContent!=0) {

                header("location:html/ltr/muhendislik.php?durum=ok");

            }else {

                header("location:html/ltr/muhendislik.php?durum=no123");
            }


    } else {

             $icerikEkle=$db->prepare("INSERT INTO muhsekme(tarih,icerikbaslik,aciklama,icerik) 
                values 
            ('".$date."','".trim($_POST['baslik'] )."','".trim($_POST['aciklama'])."','".$_POST['muhFullIcerik']."')");
              $exeContent=$icerikEkle->execute(array());
              $countContent=$icerikEkle->rowcount();

            if ($countContent==1) {

                header("location:html/ltr/muhendislik.php?durum=ok");

            }else {

                header("location:html/ltr/muhendislik.php?durum=no3");

    }   
    
    //----------------------------------------------------------------------------
    
    }
}






//Düzelenme Tarihi : 25.07.2018
//İşlevi : Sayfaya Yeni İçerik ekleme Kodu.

  

if (isset($_POST['yeniIcerikEkle']) && $icerikFotoYeni = new Upload( $_FILES[ 'fotoIcerik' ])) 
{


            if ( $icerikFotoYeni->uploaded ) {

            // // resmi yeniden adlandıralım
            $iceriknameFoto=$_POST['kulid']."-"."icerik".rand(00000,99999)."-".rand(00000,99999);
            $icerikFotoYeni->file_new_name_body = $iceriknameFoto;
            // resmi jpg formatına convert edelim
             print($iceriknameFoto);
             $icerikFotoYeni->image_convert = 'jpg';
            // upload klasörüne değişiklik yapmadan kayıt et

            $icerikFotoYeni->Process('assets/icerikler');
            $icerikFotoYeni->file_new_name_body = 'erbilen';
            $icerikFotoYeni->image_convert = 'jpg';
            $icerikFotoYeni->image_resize = true;
            $icerikFotoYeni->image_ratio_crop = true;
            $icerikFotoYeni->image_x = 200;
            $icerikFotoYeni->image_y = 200;
            // sadece resim formatları yüklensin
            $icerikFotoYeni->allowed = array ( 'image/*' );
            
            $icerikFotoYeni->Process( 'upload/200x200' );

           

            
            $icerikEkle=$db->prepare("INSERT INTO icerik(icerikSayfaAd,icerikTarih,icerikIcBaslik,
                icerikAciklama,icerik,yazar,yazarId,icerikFoto) 
                values 
                ('".trim($_POST['sayfaAdi'])."','".$date."','".trim($_POST['sayfaBaslik'] )."',
                
                '".trim($_POST['sayfaAciklama'])."','".$_POST['sayfaFullIcerik']."','".$_POST['yazar']."','".$_POST['kulid']."','".$iceriknameFoto."')");

              $exeContent=$icerikEkle->execute(array());
              $countContent=$icerikEkle->rowcount();



            if ($icerikFotoYeni->processed && $countContent==1) {

                header("location:html/ltr/sayfalar.php?durum=ok");

            }else {

                header("location:html/ltr/sayfalar.php?durum=no");
            }

   
               


    } else {

               $icerikEkle=$db->prepare("INSERT INTO icerik(icerikSayfaAd,icerikTarih,icerikIcBaslik,
                icerikAciklama,icerik,yazar,yazarId) 
                values 
                ('".trim($_POST['sayfaAdi'])."','".$date."','".trim($_POST['sayfaBaslik'] )."',
                
                '".trim($_POST['sayfaAciklama'])."','".$_POST['sayfaFullIcerik']."','".$_POST['yazar']."','".$_POST['kulid']."')");
              $exeContent=$icerikEkle->execute(array());
              $countContent=$icerikEkle->rowcount();



            if ($countContent==1) {

                header("location:html/ltr/sayfalar.php?durum=ok");

            }else {

                header("location:html/ltr/sayfalar.php?durum=no");





    }   
    


    //----------------------------------------------------------------------------
    
    

    }
}
    //Düzenleme Tarihi:07.08.2018
    //işlevi : sayfalar sekmesinde ki kayıtları güncelleme kodu.


    if (isset($_POST['guncelle']) && $icerikimage = new Upload( $_FILES[ 'imageIcerik' ] )   ) {
        


        if ( $icerikimage->uploaded ) {

            // // resmi yeniden adlandıralım
            $nameFoto=$_POST['icerikid']."-"."icerik".rand(00000,99999)."-".rand(00000,99999);
            $icerikimage->file_new_name_body = $nameFoto;
            // resmi jpg formatına convert edelim
             $icerikimage->image_convert = 'jpg';
          // upload klasörüne değişiklik yapmadan kayıt et


            $icerikimage->Process( 'assets/icerikler' );
            $icerikimage->file_new_name_body = 'erbilen';
            $icerikimage->image_convert = 'jpg';
            $icerikimage->image_resize = true;
            $icerikimage->image_ratio_crop = true;
            $icerikimage->image_x = 200;
            $icerikimage->image_y = 200;
            // sadece resim formatları yüklensin
            $icerikimage->allowed = array ( 'image/*' );
            
            $icerikimage->Process( 'upload/200x200' );

            
            $kayitGuncelle=$db->prepare("UPDATE icerik SET icerikIcBaslik='".$_POST['icBaslik']."',icerikAciklama='".$_POST['aciklama']."',icerik='".$_POST['icerik']."',icerikFoto='".$nameFoto."' WHERE icerikID='".$_POST['icerikid']."'");
            $guncellemeDurumu=$kayitGuncelle->execute();
            $etkilenenKayit=$kayitGuncelle->rowcount();


            if ($icerikimage->processed && $etkilenenKayit==1) {

                  header("location:html/ltr/sayfalar.php?state=ok");
            }else {

                  header("location:html/ltr/sayfalar.php?state=no");
            }

          }
          else {

                 $kayitGuncelle=$db->prepare("UPDATE icerik SET icerikIcBaslik='".$_POST['icBaslik']."',icerikAciklama='".$_POST['aciklama']."',icerik='".$_POST['icerik']."' WHERE icerikID='".$_POST['icerikid']."'");

                $guncellemeDurumu=$kayitGuncelle->execute();
                $etkilenenKayit=$kayitGuncelle->rowcount();

                if ($etkilenenKayit==1) {

                    header("location:html/ltr/sayfalar.php?state=ok");

                }else {

                    header("location:html/ltr/duzenleme.php?state=no");
                }


          }



}

 //Düzenleme Tarihi:09.02.2019
    //işlevi : muhendislik sayfasındaki verilerin güncellenmesi.

    if (isset($_POST['muhguncelle']) && $icerikimageMuh = new Upload( $_FILES[ 'imageIcerikmuh' ] )   ) {
        


        if ( $icerikimageMuh->uploaded ) {

            // // resmi yeniden adlandıralım
            $nameFoto=$_POST['icerikid']."-"."icerik".rand(00000,99999)."-".rand(00000,99999);
            $icerikimageMuh->file_new_name_body = $nameFoto;
            // resmi jpg formatına convert edelim
             $icerikimageMuh->image_convert = 'jpg';
          // upload klasörüne değişiklik yapmadan kayıt et


            $icerikimageMuh->Process( 'assets/icerikler' );
            $icerikimageMuh->file_new_name_body = 'erbilen';
            $icerikimageMuh->image_convert = 'jpg';
            $icerikimageMuh->image_resize = true;
            $icerikimageMuh->image_ratio_crop = true;
            $icerikimageMuh->image_x = 650;
            $icerikimageMuh->image_y = 300;
            // sadece resim formatları yüklensin
            $icerikimageMuh->allowed = array ( 'image/*' );
            
            $icerikimageMuh->Process( 'upload/200x200' );

            
            $kayitGuncelle=$db->prepare("UPDATE muhsekme SET icerikbaslik='".$_POST['baslik']."',aciklama='".$_POST['aciklama']."',icerik='".$_POST['icerik']."',icerikfoto='".$nameFoto."' WHERE icerikId='".$_POST['icerikid']."'");
            $guncellemeDurumu=$kayitGuncelle->execute();
            $etkilenenKayit=$kayitGuncelle->rowcount();


            if ($icerikimageMuh->processed && $etkilenenKayit==1) {

                  header("location:html/ltr/muhendislik.php?durum=ok");
            }else {

                  header("location:html/ltr/muhendislik.php?durum=no");
            }

          }
          else {

                 $kayitGuncelle=$db->prepare("UPDATE muhsekme SET icerikbaslik='".$_POST['baslik']."',aciklama='".$_POST['aciklama']."',icerik='".$_POST['icerik']."' WHERE icerikId='".$_POST['icerikid']."'");

                $guncellemeDurumu=$kayitGuncelle->execute();
                $etkilenenKayit=$kayitGuncelle->rowcount();

                if ($etkilenenKayit==1) {

                    header("location:html/ltr/muhendislik.php?durum=ok");

                }else {

                    header("location:html/ltr/muhendislik.php?durum=no");
                }


          }



}





//Düzenleme:13.01.2019
//İşlevi: iletişim Sekmesi

if (isset($_POST['mailDistan'])) {
    
     

     $yenikonuEkle=$db->query("INSERT INTO iletisimkullanici(isim,eposta,mesTarih,mesaj,yazarId) VALUES ('".$_POST['isim']."','".$_POST['eposta']."','".$date."','".$_POST['mesaj']."', NULL)");
    
    $kayitOnay=$yenikonuEkle->rowcount();

    if ($kayitOnay) {
        
        header("location:../distanMail.php?durum=ok");
    }
    else
    {
        header("location:../distanMail.php?durum=no");
    }


}




//Düzenleme:13.01.2019
//İşlevi: iletişim Sekmesi

if (isset($_POST['iletisimKur'])) {
    
     $idY=$_POST['yazarId'];

    $yenikonuEkle=$db->query("INSERT INTO iletisimkullanici(isim,eposta,mesTarih,mesaj,yazarId) VALUES ('".$_POST['isim']."','".$_POST['eposta']."','".$date."','".$_POST['mesaj']."','".$_POST['yazarId']."')");
    
    $kayitOnay=$yenikonuEkle->rowcount();

    if ($kayitOnay) {
        
        header("location:../contactWriter.php?durum=ok&yazarID=$idY");
    }
    else
    {
        header("location:../contactWriter.php?durum=no&yazarID=$idY");
    }


}

//Düzenleme:14.01.2019
//İşlevi:Mail Silme

if (@$_GET['mailSil']=='ok') {
    

    $PageDel=$db->query("DELETE FROM iletisimkullanici where mesID='".$_GET['mesId']."'");



    if ($PageDel)
    {
        
        header("location:html/ltr/iletisimSekmesi.php?durum=ok");
    }else

    {
        header("location:html/ltr/iletisimSekmesi.php?durum=no");
    }


}

//Düzenleme:12.12.2018
//İşlevi: yayın güncelleme

if (isset($_POST['yayinGuncelle'])) {
    
        $yayinGuncelle=$db->prepare("UPDATE haftalikyayin SET konu='".$_POST['icerik']."',kisabaslik='".$_POST['baslik']."',yayinTarih='".$date."' ,paytur='".$_POST['tur']."',yazar='".$_POST['yazar']."' WHERE konuid='".$_POST['konuid']."'");

        $guncellemeDurumu=$yayinGuncelle->execute();
        $etkilenenKayit=$yayinGuncelle->rowcount();

        if ($etkilenenKayit==1) {

            header("location:html/ltr/anasayfa.php?durum=ok");

        }else {

            header("location:html/ltr/haftayayinDuzenle.php?durum=no");
        }


}
//Düzenleme:10.02.2018
//İşlevi: blog silme

if (@$_GET['blogsil']=='ok') {
    
    $PageDel=$db->query("DELETE FROM muhsekme where icerikId='".$_GET['id']."'");



    if ($PageDel)
    {
        
        header("location:html/ltr/muhendislik.php?durum=ok");
    }else

    {
        header("location:html/ltr/muhendislik.php?durum=no");
    }


}

//Düzenleme:12.12.2018
//İşlevi: yayın silme

if (@$_GET['konusil']=='ok') {
    
    $PageDel=$db->query("DELETE FROM haftalikYayin where konuid='".$_GET['yayinId']."'");



    if ($PageDel)
    {
        
        header("location:html/ltr/anasayfa.php?durum=ok");
    }else

    {
        header("location:html/ltr/anasayfa.php?durum=no");
    }


}


//Düzenleme Tarihi:12.12.2018
//İşlevi : haftalık Yeni konu ekleme

if (isset($_POST['konuEkle'])) {
    
       //echo $_POST['icerik'] ." ----  ". $_POST['baslik'] ."----". $date ."----". $_POST['yazar'];



    $yenikonuEkle=$db->query("INSERT INTO haftalikYayin(konu,kisabaslik,yayinTarih,paytur,yazar,yazarId) VALUES ('".$_POST['icerik']."','".$_POST['baslik']."','".$date."','".$_POST['tur']."','".$_POST['yazar']."','".$_POST['yazarID']."')");
    
    $kayitOnay=$yenikonuEkle->rowcount();

    if ($kayitOnay) {
        
        header("location:html/ltr/anasayfa.php?durum=ok");
    }
    else
    {
        header("location:html/ltr/HaftalikYayinEkle.php?durum=no");
    }


}





//Düzenleme Tarihi : 11.12.2018
//İşlevi : Yeni Kayıt

if (isset($_POST['yenikayit'])) {

 
  
        
             $kullaniciAdi=$_POST['ad'].$_POST['soyad'];

            $yeniKayitEkle=$db->query("INSERT INTO kullanicilar (ad,soyad,eposta,kullaniciAdi,parola,fotograf)VALUES('".$_POST['ad']."','".$_POST['soyad']."','".$_POST['email']."','".$_POST['kulAdi']."','".$_POST['parola']."','defaultfoto')");
          //  $kayitOnay=$yeniKayitEkle->execute(array());
            $onay=$yeniKayitEkle->rowcount();
           
            if ($onay)
             {
              
              header("location:login-form/loginPage.php?kayitDurum=ok");

             }
             else {
                header("location:login-form/kaydol.php?kayitDurum=no");
             }
  


}

//Düzenleme Tarihi :2.09.2018
//İşlevi : giriş işlemi.


if (isset($_POST['giris'])) {

            $e1=$_POST['username'];   
            $e2="%,or,and,select,' '";


            $e4 = [strlen($e1)];


        $durum=0;        
        for ($i=0; $i <strlen($e1); $i++) { 
            
            $e4[$i]=$e2[$i];

          }
            
            for ($j =0; $j <strlen($e1); $j++) { 
            
                    for ($k=0; $k <strlen($e4); $k++) { 
                       
                            if ($e1[$j]==$e4[$k]) {

                                    $durum=1;
                                    break;
                                
                            }


                    }

        }


        if ($durum==1) 

        {
          

            echo "Giriş Sıkıntılı" ;
            exit();        
        }

        else {



            $kulad=$_POST['username'];
            $parola=$_POST['parola'];

            

            $hesapKontrol=$db->query("SELECT * FROM kullanicilar WHERE kullaniciAdi='$kulad' and parola='$parola'");
            $hesapVarmi=$hesapKontrol->execute(array());
            $sayi=$hesapKontrol->rowcount();



            if ($sayi) {


                $_SESSION['kullaniciAdi']=$kulad;
                $idkontrol=$hesapKontrol->fetch(PDO::FETCH_ASSOC);
                $_SESSION['KULID']=$idkontrol['kulid'];   
                $_SESSION['yetki']=$idkontrol['yetki'];


                header("location:html/ltr/anasayfa.php?durum=ok");




            }
          else {
            header("location:login-form/loginPage.php?durum=no");
          }
        }

            



        
   


}






//Düzenlenme Tarihi : 24.07.2018
//İşlevi : Yeni Sayfa ekleme Kodu.

if (isset($_POST['yeniSayfaKaydet'])) 
	{


    // echo  $_POST['menuSayfaAdi'];
    // $kontrol=$db->query("SELECT * FROM menusayfalari where menuSayfaAd='".$_POST['menuSayfaAdi']."'",PDO::FETCH_ASSOC)->fetch(PDO::FETCH_ASSOC);
    // // $hesapVarmi=$kontrol->execute(array());
    // // $degerVarmi=$kontrol->rowcount();

    // if(!$kontrol)

    //     {

        $sayfaEkle=$db->prepare("INSERT INTO menusayfalari(menuSayfaAd,menuSayfaTarih,yazar) VALUES ('".$_POST['menuSayfaAdi']."','".$date."','".$_POST['yazar']."')");
        $exeConn=$sayfaEkle->execute(array());
        $say=$sayfaEkle->rowcount();

            if ($say) {
        
                  header("location:html/ltr/sayfalar.php?state=ok");


                         }
                else {
                    header("location:html/ltr/sayfalar.php?state=no");
                }


        // } 
        // else{

        //     header("location:html/ltr/sayfalar.php?state=maybe");
        // }
	
	}

//-----------------------------------------------------------------------




  //Düzenleme Tarihi : 26.08.2018
    //işlev : Sayfa silme


if (@$_GET['sayfaSil']=='ok') {
    
    $PageDel=$db->query("DELETE FROM icerik where icerikID='".$_GET['id']."'");



    if ($PageDel)
    {
        
        header("location:html/ltr/sayfalar.php?durum=ok");
    }else

    {
        header("location:html/ltr/sayfalar.php?durum=no");
    }


}


//Düzenleme : 26.08.2018
//işlev:  düzenleme sekmesinden içerik silme 



if (@$_GET['icerikSil']=='ok') {
    
    $DelContent=$db->query("DELETE FROM icerik where icerikID='".$_GET['id']."'");



    if ($DelContent)
    {
        
        header("location:html/ltr/sayfalar.php?durum=ok");
    }else

    {
        header("location:html/ltr/sayfalar.php?durum=no");
    }


}

	
	
 ?>