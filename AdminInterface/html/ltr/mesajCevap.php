      <?php include "header.php";

      include "../../database.php";
      $mesajID=$_GET['mesajID'];

      $mesajlar=$db->query("SELECT * FROM iletisimkullanici where mesID='$mesajID'",PDO::FETCH_ASSOC);
      $mesaj=$mesajlar->fetch(PDO::FETCH_ASSOC);



     $okunduYap=$db->query("UPDATE iletisimkullanici SET durum ='1' WHERE mesID='$mesajID'");
     $guncellemeDurumu=$okunduYap->execute();

                                       


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
                        
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                  
				                                 
				                        <li class="breadcrumb-item">Mesaj Gör</li>
                                     
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
             <div class="col-md-12">
           	<h4 style="text-align: center" class="card-title m-b-0">  <i class="mdi mdi-book-open-page-variant"></i> &nbsp Gelen Mesaj</h4> 
            
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
                          
                            <table class="table " >
                                 
                                    <tr>

                                      <th scope="col-3" style="text-align: center; font-weight: bold; font-size: 18px;">İsim </th>
                                      <th scope="col-3" style="text-align: center; font-weight: bold; font-size: 18px;">E-Posta</th>
                                  	  <th scope="col-3" style="text-align: center;font-weight: bold; font-size: 18px;">Tarih </th>
                                    
                                    </tr>
                                  </thead>
                                  <tbody>


                                  	<form  action="../../Sendmail.php" method="POST">

                                   <tr>    
                                      <td style="text-align: center; font-size: 15px;">
                                      	<?php echo $mesaj['isim']; ?>
                                       </td>
                                      <td style="text-align: center;  font-size: 15px;"> 

                                      	<?php echo $mesaj['eposta']; ?>
                                      </td>
                                       
                                         
                                        <td style="text-align: center; font-size: 15px;">
                                      	<?php echo $mesaj['mesTarih']; ?>
                                      </td>

                                         	

                                     </tr>
                                  </tbody>
                            </table>

                            			 <tr>    
                                     <th scope="row"></th>

                           <hr>
                           
      						<div class="container-fluid">
      							

      							<div class="row">
      								<div class="col-12">
      									
		                              <div class="card-body" >
		                                     	
					                         <div class="card-header" style="font-weight: bold; font-size: 18px;" >Mesaj</div>
					                         <div class="card-title" style=" font-size: 15px; margin-left:15px; "  >
					                         <?php echo $mesaj['mesaj'];?>
					                         <input type="text" hidden="" name="gelen" value="<?php echo $mesaj['mesaj'];?>" >
					                         <input type="text" hidden=""  name="eposta" value="<?php echo $mesaj['eposta']; ?>	" >
					                         <input type="text" hidden="" name="kulAdi" value="<?php echo $_SESSION['kullaniciAdi']; ?>">
		                       		  </div>
		                                     	

		                              </div>    
      								</div>


      							</div>
      						</div>
                                  

                                     
                         <div class="accordion" id="accordionExample">
                            <div class="card m-b-0">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <a  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      
                                      <div class="col-md-12 text-center " >
                                      	  <i class="mdi mdi-book-multiple-variant" aria-hidden="true"></i>
                                      	  <span style="font-size: 18px;" >Cevap Paneli</span>
                                      </div>
                               

                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">


                                	 
                                  <div class="card-body">
                                
                                  	<div class="col-md-12">  
                                  		
									    <textarea name="cevapmesaji" id="metin" class="ckeditor"></textarea>


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


                       	   <div class="col-md-12 text-right " >

                                  <input style=" margin-bottom: 10px;  text-align : right; margin-right: 20px; margin-top:15px;  " type="submit" class="btn btn-success" name="cevapla" value="Cevapla" >
                                  		
                                 </div>

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