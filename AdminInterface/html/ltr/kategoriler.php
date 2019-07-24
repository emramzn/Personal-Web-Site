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
                        <h4 class="page-title">Kategoriler</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="anasayfa.php">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">kategoriler</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="col-md-12">



       <?php   $girdi="emre"; // echo $sayfaAdiGoruntu;
       $sayfaicerikGetir=$db->query("SELECT * FROM icerik where icerikSayfaAdi ='ilk deneme bismillah' ",PDO::FETCH_ASSOC);

             $icerikSayisi=$sayfaicerikGetir->rowCount();
               
             $sayfaicerik=$sayfaicerikGetir->fetch(PDO::FETCH_ASSOC);
           
      
          
           echo $sayfaicerik['icerikIcBaslik']." ".$icerikSayisi;   



                ?>




                    
                    <div class="col-md-6"  style="margin-left: 690px;">
                        

                                                   <script>
                                          
                                         var Pencerem;


    function kapat()
    {

        window.close();

    }


    function PencereOrtala(url,w,h) {


        var left = parseInt((screen.availWidth/2) - (w/2));


        var top = parseInt((screen.availHeight/2) - (h/2));


        var windowFeatures = "width=" + w + ",height=" + h + ",status,resizable,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top;


        Pencerem = window.open(url, "subWind", windowFeatures);
     

        

        }
    </script>
    <a href="javascript:PencereOrtala('popUp.html',400,250);">TIKLA VE AÇILIR PENCEREYİ AÇ</a>



                                      </script>
                    </div>


            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Sergilenen Kategoriler </h5> 
                            </div>
                            <table class="table">
                                 
                                    
                                    <tr>
                                      <th scope="col-3">#</th>
                                      <th scope="col-3">First</th>
                                      <th scope="col-3">Last</th>
                                      <th scope="col-3">Handle</th>
                                  <!--   <th scope="col-3" >İŞLEMLER</th>  -->
                                    
                                       <th><button   type="button" class="btn btn-success"><i class="fa fa-plus"> Ekle</i></button>&nbsp <button type="button" class="btn btn-outline-dark">Önizle</button></th> 
                                        
                               <!--         <th><button   type="button" class="btn btn-success"><i class="fa fa-eye"> Önizle</i></button></th> -->


                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                 <!-- KATEGORİLER BÖLÜMÜ YÖNETİMİ BAŞLANGIÇ  -->  


                                     <?php for ($i=0; $i <17 ; $i++) { ?>
                                        <tr>    
                                     <th scope="row"><?php echo $i+1; ?></th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                        <td> <button style="width: 75px ; height: 35px; text-align: center   " type="button" class="btn btn-outline-info">Düzenle</button><button style="margin-left:20px " type="button" class="btn btn-outline-danger">Sil</button></td>
                                        
                                     </tr>
                                     <?php } ?>

                                      <!-- KATEGORİLER BÖLÜMÜ YÖNETİMİ BAŞLANGIÇ  -->  

           
                                
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
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