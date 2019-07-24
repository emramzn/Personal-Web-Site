    <?php include "header.php"; 

          include  "../../database.php";

      
      ?>


          <?php 

              try {

                    //  echo  " deneme ID : ".$_POST['icerikId']." GEt  : ".$_GET['id'];    
                      $varID=$_GET['id'];

                      $sayfaGetir=$db->query("SELECT * FROM icerik WHERE icerikID='$varID' ",PDO::FETCH_ASSOC);

                       $kayitSayisi=$sayfaGetir->rowCount();

                      $kayitDuzenle=$sayfaGetir->fetch(PDO::FETCH_ASSOC);

              // echo "kayıt sayısı ".$kayitSayisi; 
                
              } catch (Exception $e) {
                        echo $e;
          


              }


              ?>

         
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="page-breadcrumb">

                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Sayfa Yönetimi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="sayfalar.php">Sayfalar</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Düzenleme Sekmesi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
             <div class="col-md-12">
           	<h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbspYayındaki  Sayfalar </h4> 
            


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
                                <h5 class="card-title m-b-0">Sayfa İçerik Düzenleme </h5> 
                            </div>
                            <table class="table">
                               
                                    
                                    <tr>
                                      <th scope="col-3" style="text-align: center;">#</th>
                                      <th scope="col-3" style="text-align: center;">Fotoğraf</th>
                                      <th scope="col-3" style="text-align: center;">Başlık</th>
                                      <th scope="col-3" style="text-align: center;">İçerik</th>
                               
                                    
                                       <th><button hidden=""  type="button" class="btn btn-success"><i class="fa fa-plus"> Ekle</i></button>&nbsp <button hidden=""  type="button" class="btn btn-outline-dark">Önizle</button></th> 
                                        
                               

                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                 <!-- KATEGORİLER BÖLÜMÜ YÖNETİMİ BAŞLANGIÇ  -->  
                                 <form action="../../dataman.php" method="POST" enctype="multipart/form-data" > 

                                <?php  // echo $_POST['icerikId'];    
                                      ?>
                                        <tr>    
                                     <th scope="row"></th>

                                      <td style="text-align: center;"><div class="col-lg-14">
                            <img  style="width:90px; height: 90px; margin-top:15px; " class="rounded-circle img-fluid d-block mx-auto" src="../../assets/icerikler/<?php echo $kayitDuzenle['icerikFoto'];?>.jpg" alt=""> 
                                         
                                          <input style="margin-top:25px; " type="file" name="imageIcerik">

                                    
                                
                                 
                                    </div></td>

                                      <td style="text-align: center;"><div class="col-lg-14">
                               <input type="text" class="form-control" name="icBaslik"  value="<?php echo $kayitDuzenle['icerikIcBaslik'];  ?>" >
                          
                                 
                                    </div></td>
                                      <td style="text-align: center;"> <div class="col-sm-15">
                                            <textarea class="form-control " name="aciklama" ><?php echo $kayitDuzenle['icerikAciklama']; ?></textarea>

                                            <input hidden="" type="text" name="icerikid" value="<?php echo  $varID;?>">
                                        </div></td>

                                        <td> 
                                          
 
                                        <input type="submit" name="guncelle" class="btn btn-primary">



                                   <a href="../../dataman.php?id=<?php  echo  $_GET['id']; ?>&icerikSil=ok"> <button style="margin-left:20px " type="button" class="btn btn-outline-danger">Sil</button></a></td>
                                        
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
                                        <span>Sayfa İçeriği Düzenleme Paneli</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                   	
                                  	<div class="col-md-12">
                                  	
                                      
										<form>

									    <textarea name="icerik" id="metin" class="ckeditor"><?php echo $kayitDuzenle['icerik']; ?></textarea>


									    <script>
									    	
									    	CKEDITOR.replace('editor1',{
									    		extraPlugins='syntaxhighlight';
									    	});




									    </script>	

									   
										
                   </form>
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