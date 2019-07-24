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
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>


             <div class="col-md-12">
            <h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbspYayındakiler </h4> 
            

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

           

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Yayındaki İçerikler </h5> 
                            </div>
                            <table class="table">
                                 
                                      
                                    <tr>
                                      <th style="text-align: center;" scope="col-3">#</th>
                                     
                                    <th style="text-align: center; font-size: 19px; " scope="col-3">İçerik Başlık</th>
                                      <th style="text-align: center; font-size: 19px; " scope="col-3">İçerik Açıklama</th>
                                      <th style="text-align: center; font-size: 19px; " scope="col-3">Düzenleme Tarihi</th>

                                
                                        <form action="sayfaicerikEkle.php" method="POST">

                                  <th hidden=""><input   type="text" name="sayfaAdi"  value="<?php echo  $sayfaAdiGoruntu; ?>"> </th> 
                                 
                                     
                                  <th> 
                                    <button   type="submit" class="btn btn-dark btn-lg" >
                                   <a style="color: white" class="button" href="muhsekmesiEkleme.php">Ekle</button></a></th> 

                                   
                                      </form>
     
                                           
                        
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                        <?php   

                          $sayfaicerikGetir=$db->query("SELECT * FROM muhsekme  ",PDO::FETCH_ASSOC);
                          $eklemeOnayı='0';
                          $icerikSayisi=$sayfaicerikGetir->rowCount();
                               
                          $icerikKayit=array();


                               while ($sayfaicerik=$sayfaicerikGetir->fetch(PDO::FETCH_ASSOC)) { 

                            
                            ?>


                                         <tr>  
                                             <th style="text-align: center;" scope="row"></th>
                  
                                <td style="text-align: center; font-size: 19px;  color:red;"><?php echo $sayfaicerik['icerikbaslik']; ?></td>

                                              <td style="text-align: center;"><?php echo $sayfaicerik['aciklama']; ?></td>

                                              <td style="text-align: center;"><?php echo $sayfaicerik['tarih']; ?></td>


                                          <form action="duzenleme.php" method="POST">
                                          <input hidden="" type="text" name="icerikId" value="<?php echo $sayfaicerik['icerikId'];?>"> 
                                             <td>

                                             <a href="muhduzenle.php?id=<?php echo $sayfaicerik['icerikId'];?>"><button style=" margin-top: 8px; width: 75px; " type="button" class="btn btn-outline-dark" >Düzenle</button>


                                              </form>
                                              <a href="../../dataman.php?id=<?php echo  $sayfaicerik['icerikId'];?>&blogsil=ok"><button style=" margin-top: 8px; width: 75px; " type="button" class="btn btn-outline-danger">Sil</button></a>
                                              </td>
                                                                                          

                                          </tr> 


                                           <?php }


                                           ?>

                                            


                                           
               

                            
                                  </tbody>
                            </table>
                        </div>
                        
                </div>
               

            </div>
                                  </div>
                                </div>
                            </div>


                           <?php // }



                         //}else  { ?>
                          <!-- <h4 style="color:blue; font-size: 18px;">YAYINDA SAYFA BULUNMAMAKTADIR.</h4> -->
                         
                    <?php //} ?>


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