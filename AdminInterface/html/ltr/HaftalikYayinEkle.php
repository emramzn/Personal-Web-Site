    <?php include "header.php"; 

          include  "../../database.php";

      ?>

         
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="page-breadcrumb">

                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Konu Yönetimi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="sayfalar.php">Haftalık Konu</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Ekleme Sekmesi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
             <div class="col-md-12">
           	<h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbspYayındaki  Konu </h4> 
            


             </div> 
          
          


         <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Konu İçerik Ekleme </h5> 
                            </div>
                            <table class="table">
                               
                                     <tr>
                                      <th scope="col-3" style="text-align: center;">Konu Başlık</th>
                                      <th scope="col-3" style="text-align: center;">Yayın Türü </th>
                                   
                               
                                    
                                       <th><button hidden=""  type="button" class="btn btn-success"><i class="fa fa-plus"> Ekle</i></button>&nbsp <button hidden=""  type="button" class="btn btn-outline-dark">Önizle</button></th> 
                                        
                               
                                    
                                  </thead>
                                  <tbody>
                                   
                                 
                                 <form action="../../dataman.php" method="POST"> 

                                    <td> <input type="text" name="baslik" class="form-control" id="fname" placeholder="ÖRN : Günümüz teknolojileri , Sunucu Maliyetleri ... "></td>
                                    <td>  <input type="text" name="tur" class="form-control" id="fname" placeholder=" ÖRN: Haftalık Yayın , Genel Yayın ..."></td>
                                    <input type="text" hidden="" name="yazarID" value="<?php echo $_GET['yazarID']; ?>" >
                                   	
						
           							<!-- <td><button type="button" name="konuEkle" class="btn btn-outline-success">Tamamla</button></td> -->
           							<td><input style="color:white;" type="submit" class="btn btn-primary" name="konuEkle"></td>
                                	<input type="text"  hidden="" name="yazar" value="<?php echo $_SESSION['kullaniciAdi']; ?>">	


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
                                  	


									    <textarea name="icerik" id="metin" class="ckeditor"></textarea>


									    <script src="ckeditor/ckeditor.js">
									    	
									    	  
                        CKEDITOR.plugins.add('imageuplader', {
                      init:function(editor){

                        editor.config.filebrowserBrowseUrl='/ckeditor/plugins/imageuplader/imgbrowser.php';
                      });



									    </script>	

									    
										
									</form>
                                  	</div>




                                  </div>
                                </div>
                            </div>
                          </div>        
                                     </tr>  

                        </form>


                        </div>





                        
                </div>
         
            </div>

      
            
     



            <footer class="footer text-center">
            <!--    <a href="https://wrappixel.com">WrapPixel</a>. -->
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