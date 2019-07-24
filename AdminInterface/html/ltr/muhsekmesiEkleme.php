      <?php include "header.php"; ?>
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
                        
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="sayfalar.php">Sayfalar</a></li>
                                    <li class="breadcrumb-item"><?php //echo $_GET['sayfaAdi'];?></li>
                                      <li class="breadcrumb-item active" aria-current="page">Yayın İçin Yeni İçerik Ekle</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
             <div class="col-md-12">
           	<h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbspYeni İçerik Ekle </h4> 
            


             </div> 
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

	

         <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Yeni İçerik Ekleme </h5> 
                            </div>
                            <table class="table">
                                 
                                    
                                    <tr>
                                      <th scope="col-3" style="text-align: center;">#</th>
                                      <th scope="col-3" style="text-align: center;">Fotoğraf</th>
                                      <th scope="col-3" style="text-align: center;">Başlık </th>
                                      <th scope="col-3" style="text-align: center;">İçerik</th>
                                  
                                    
                                       <th><button hidden=""  type="button" class="btn btn-success"  ><i class="fa fa-plus"> Ekle</i></button>&nbsp <button hidden=""  type="button" class="btn btn-outline-dark">Önizle</button></th> 
                                        
                              

                                    </tr>
                                  </thead>
                                  <tbody>


                                  	<form  action="../../dataman.php" method="POST" enctype="multipart/form-data">

                                   
                                 <!-- KATEGORİLER BÖLÜMÜ YÖNETİMİ BAŞLANGIÇ  -->  

                                        <tr>    
                                     <th scope="row"></th>



                                  
                                     <td style="text-align: center;">

                                    
                                     

                                      <div class="col-lg-14">
                                        <input type="file" class="form-control"  name="muhfotoIcerik">
                                       
                                      </div>
                                    </td>


                                      <td style="text-align: center;"><div class="col-lg-14">
                                        <input type="text" class="form-control" placeholder="Başlık" name="baslik">
                                       


                                    </div></td>
                                      <td style="text-align: center;"> <div class="col-sm-15">
                                            <textarea class="form-control" placeholder="Kısaca içerik" name="aciklama"></textarea>
                                          </div></td>
                                        <?php //echo $_GET['sayfaAdi']; ?>
                                          <!-- <input hidden="" type="text" name="sayfaAdi" value="<?php echo trim($_GET['sayfaAdi']); ?>" >
                                          <input type="text" hidden="" name="yazar" value="<?php echo $_SESSION['kullaniciAdi'];?>">
                                           <input type="text" hidden="" name="kulid" value="<?php echo $_SESSION['KULID'];?>"> -->
                                           <input type="text" hidden="" name="defaultFoto" value="defaultFoto">

                                         
                                          	<td><button class="btn btn-outline-success"  name="muhIcerikEkle" >EKLE</button></a></td>
                                          </td>
                                        

                                     </tr>
                                   
										
  									
           
                                
                                  </tbody>
                            </table>

                            			 <tr>    
                                     <th scope="row"></th>
                                 

                         <div class="accordion" id="accordionExample">
                            <div class="card m-b-0">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <a  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="mdi mdi-book-multiple-variant" aria-hidden="true"></i>
                                        <span>Konu İçeriği Ekleme Paneli</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                   	
                                  	<div class="col-md-12">
                                  		
										

									    <textarea name="muhFullIcerik" id="metin" class="ckeditor"></textarea>


									    <script>
									    	
									    	CKEDITOR.replace('editor1',{
									    		extraPlugins='syntaxhighlight';
									    	});




									    </script>	

									   

									
                                  	</div>




                                  </div>
                                </div>
                            </div>
                          </div>        
                                     </tr>  




                        </div>
                        
                </div>
                </form>



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