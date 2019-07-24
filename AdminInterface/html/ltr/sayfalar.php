      <?php include "header.php"; 

      include "../../database.php";


  

      ?>

         
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                      <!--   <h4 class="page-title">Paylaşım Yönetimi</h4> -->
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dersler</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>


             <div class="col-md-12">
           	<h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbspYayındaki  Dersler </h4> 
            

             </div> 
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

               <script type="text/javascript">
                    function reloadPage()
                     {
                      window.location.reload()
                     }
                    </script>





            

            <?php if (@$_GET['durum']=='ok') { ?>
              
                
               
                         
                  <script type='text/javascript'>  
            alert(<?php  echo 'Haberler Yazısı Eklenirken Bir Hata Oluştu. Lütfen Tekrar Deneyiniz.' ?>); 
            </script> 
                                


            <?php } else if(@$_GET['durum']=='no'){ ?>

                      
                                  <script type='text/javascript'>  
            alert(<?php  echo 'Haberler Yazısı Eklenirken Bir Hata Oluştu. Lütfen Tekrar Deneyiniz.' ?>); 
            </script> 
                              

                     




            <?php } ?>

            <form action="../../dataman.php" method="POST">

                  <div class="row">
                    

                    <div class="col-md-12">
                         
                      <div id="accordian-4">
                            <div class="card m-t-30">
                                  



                                <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
                                    <i class="mdi mdi-calendar-plus" aria-hidden="true"></i>
                                    <span>Konu  Ekle</span>
                                </a>
                                &nbsp&nbsp<div id="Toggle-2" class="multi-collapse collapse" >
                                    <div class="card-body widget-content" align="center"   >
                                       
                                        <div class="row" >
                                          <label>Sayfa Adı : </label>&nbsp<input style="width:250px; font-size:15px; " class="form-control" type="text" name="menuSayfaAdi">&nbsp&nbsp
                                        
                                          <input type="text" hidden="" name="yazar" value="<?php echo $_SESSION['kullaniciAdi']; ?>">

                                        <button type="submit" class="btn btn-outline-success" name="yeniSayfaKaydet" id="ts-success" >Kaydet</button>
                                        </div>


                   </form> 

                                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Tasks</h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" >Konu</th>
                                        <th scope="col" >Oluşturulma Tarihi</th>
                                        <th scope="col" >İçerik Sayısı</th>
                                        <th scope="col">Durumu</th>
                                        <th scope="col" >İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <!-- SAYFALAR BÖLÜMÜNDE YAYINDA OLAN SAYFALARIN GENEL BİLGİLERİNİ SIRALAR -->
                                  <?php $sayfaDuzenleme=$db->query("SELECT * FROM menusayfalari", PDO::FETCH_ASSOC);

                                  while($sayfaAdGoster=$sayfaDuzenleme->fetch(PDO::FETCH_ASSOC)){

                                         $sorguAd=$sayfaAdGoster['menuSayfaAd'];
                                         $sayfaguncelleme=$db->query("SELECT * FROM icerik where icerikSayfaAd='$sorguAd'", PDO::FETCH_ASSOC);
                                          
                                          $sayfaguncellemeTarih=$sayfaguncelleme->fetch(PDO::FETCH_ASSOC);
                                          $ContentCount=$sayfaguncelleme->rowCount();
                                          
                                   ?>

                                     <tr>
                                        <td style="font-size:15px; color:black; " >&nbsp<?php echo $sayfaAdGoster['menuSayfaAd']; ?>&nbsp&nbsp</td>
                                       
                                        <td class="text-dark"  ><?php echo $sayfaAdGoster['menuSayfaTarih']; ?></td>
                                         <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $ContentCount; ?>

                                        </td>
                                         <td>

                                        </td>



                                        <td>
                                           <button type="button" class="btn btn-outline-dark">Tamamla</button>

                                        </td>
                                    </tr>
                                    

                                  <?php } ?>


                                 



                                </tbody>
                            </table>
                        </div>
         




                                </div>

                                    </div>
                                </div>
                               
                            </div>

                        </div>
                      

                 </div> 
                      
                

               <?php
                $count=-1;
                $sayfaGetir=$db->query("SELECT * FROM menusayfalari",PDO::FETCH_ASSOC);

               $kayitSayisi=$sayfaGetir->rowCount();
             
             

              // echo "kayıt sayısı ".$kayitSayisi; ?>
               

              <?php if ($kayitSayisi){
             
                   $sayi=1; 
               while ($sayfaAdlari=$sayfaGetir->fetch(PDO::FETCH_ASSOC)) { 
                       

                   
                      ?>
            

               <div class="accordion" id="accordionExample">
                            <div class="card m-b-0">
                                <div align="center" class="card-header" id= <?php echo $sayi; ?> >
                                  <h5  class="mb-0">
                                    <a   data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    <!--     <i class="mdi mdi-newspaper"  aria-hidden="true"></i> -->
                                        <span  style="font-size:25px; ">  <?php echo $sayfaAdlari["menuSayfaAd"]; ?>   </span>  </a>
                                  </div>
                                  </h5>
                                </div>
                                <div  id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">

                                     <div class="container-fluid">

                                      <?php $sayi++; ?>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Yayındaki İçerikler </h5> 
                            </div>
                            <table class="table">
                                 
                                      
                                    <tr>
                                      <th style="text-align: center;" scope="col-3">#</th>
                                      <th style="text-align: center; font-size: 19px;" scope="col-3">İçerik Foto</th>
                                    <th style="text-align: center; font-size: 19px; " scope="col-3">İçerik Başlık</th>
                                      <th style="text-align: center; font-size: 19px; " scope="col-3">İçerik Açıklama</th>
                                      <th style="text-align: center; font-size: 19px; " scope="col-3">Düzenleme Tarihi</th>

                                    <?php $sayfaAdiGoruntu=$sayfaAdlari["menuSayfaAd"]; ?>
                                    
                                        
                                        <form action="sayfaicerikEkle.php" method="POST">

                                  <th hidden=""><input   type="text" name="sayfaAdi"  value="<?php echo  $sayfaAdiGoruntu; ?>"> </th> 
                                 
                                      <?php //echo $sayfaAdiGoruntu; ?>
                                  <th> 
                                    <button   type="submit" class="btn btn-dark btn-lg" >
  <a style="color: white" class="button" href="sayfaicerikEkle.php?sayfaAdi=<?php echo $sayfaAdiGoruntu;?>">Ekle</button></a></th> 

                                   
                                      </form>
     
                                           
                        
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                        <?php   

                        $girdi="emre"; // echo $sayfaAdiGoruntu;

                          $kullanici=$_SESSION['KULID'];

                          //echo  $kullanici;

                           $sayfaicerikGetir=$db->query("SELECT * FROM icerik where icerikSayfaAd ='$sayfaAdiGoruntu' and yazarId='$kullanici' ",PDO::FETCH_ASSOC);
                          $eklemeOnayı='0';
                          $icerikSayisi=$sayfaicerikGetir->rowCount();
                                 
                          $icerikKayit=array();


                              if ($icerikSayisi) {

                               $count=1;

                               while ($sayfaicerik=$sayfaicerikGetir->fetch(PDO::FETCH_ASSOC)) { 

                               $icerikKayit[$count]=$sayfaAdiGoruntu;

                            ?>


                                         <tr>  
                                             <th style="text-align: center;" scope="row"></th>
                    <td style="text-align: center;">  <img  style="width:120px; height: 120px; margin-top:15px; "  src="../../assets/icerikler/<?php echo $sayfaicerik['icerikFoto'];?>.jpg" alt=""> </a>

                    </td>

                                              <td style="text-align: center; font-size: 19px;  color:red;"><?php echo $sayfaicerik['icerikIcBaslik']; ?></td>

                                              <td style="text-align: center;"><?php echo $sayfaicerik['icerikAciklama']; ?></td>

                                              <td style="text-align: center;"><?php echo $sayfaicerik['icerikTarih']; ?></td>


                                          <form action="duzenleme.php" method="POST">
                                          <input hidden="" type="text" name="icerikId" value="<?php echo $sayfaicerik['icerikID'];?>"> 
                                             <td>

                                             <a href="duzenleme.php?id=<?php echo $sayfaicerik['icerikID'];?>"><button style=" margin-top: 8px; width: 75px; " type="button" class="btn btn-outline-dark" >Düzenle</button>



                                              <!--
                                              <input style="width: 75px; " type="submit" name="icerikyolla" class="btn btn-outline-dark" value="Düzenle">&nbsp&nbsp</a><br>
                                               -->

                                              </form>
                                              <a href="../../dataman.php?id=<?php echo  $sayfaicerik['icerikID'];?>&sayfaSil=ok"><button style=" margin-top: 8px; width: 75px; " type="button" class="btn btn-outline-danger">Sil</button></a>
                                              </td>
                                                                                          


                                          </tr> 


                                           <?php $count++;}


                                           } 



                                          else { ?>

                                              <h7 style="color: red; font-size:13px;">HENÜZ YAYINLANAN İÇERİĞİNİZ BULUNMAMAKTADIR.</h7>


                                            <?php }  ?>
               

                            
                                  </tbody>
                            </table>
                        </div>
                        
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
                                  </div>
                                </div>
                            </div>


                           <?php  }



                         }else  { ?>
                          <h4 style="color:blue; font-size: 18px;">YAYINDA SAYFA BULUNMAMAKTADIR.</h4>
                         
                    <?php } ?>


           </div>



            <footer class="footer text-center">
<!--                 All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
 -->            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>