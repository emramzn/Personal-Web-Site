<?php include "header.php"; 

include '../../database.php';

?>
   
       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center mx-auto ">
                      

                            <h4 style="text-align: center " class="card-title m-b-0 ml-auto text-center">  <i class="fas fa-envelope-open"></i> &nbspMesaj Yönetimi</h4> 
                            

                           
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mesajlar</li>
                                </ol>
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
         <!-- Cards -->




                        
         <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                            	<div class="form-group row" >
                                    <form>
                                        <input style="border: 1px solid black;" type="text" name="q" class="form-control" placeholder="Arama" value="<?php echo (isset($_GET['q'])) ? $_GET['q'] : null; ?>" autocomplete="off"> 

                                    </form>

                                
                                </div>
                                 <?php if (@$_GET['durum']=='ok'){ ?>
                                        

                                        <h5 style="color: green; font-size:19px; text-align: center; ">Kullanıcı bilgisi güncellendi.</h5>


                                    <?php } ?>


                                 </div>



                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="text-align: center;" >
                                        <thead>
                                            <tr>

                                                <th style="text-align: center;" >FOTOĞRAF</th>
                                                <th>İSİM</th>
                                                <th>SOYİSİM</th>
                                                <th>E-POSTA</th>
                                                <th>KULLANICI ADI</th>
                                                <th>YETKİ</th>
                                                <th>İŞLEM</th>

                                               
                                            </tr>
                                        </thead>

                          <?php 

                           if(isset($_GET['q'])) {
                             $sql = "SELECT * FROM kullanicilar WHERE  (ad LIKE '%{$_GET['q']}%' or soyad LIKE '%{$_GET['q']}%' or eposta LIKE '%{$_GET['q']}%' or kullaniciAdi ) ORDER BY kulid DESC";
                          } else {
                            $sql = "SELECT * FROM kullanicilar  ORDER BY kulid DESC";
                          }			


                          $mesajVeri=$db->query($sql,PDO::FETCH_ASSOC);

                              while ($mesaj=$mesajVeri->fetch(PDO::FETCH_ASSOC)) 
                                
                           
                              { ?>

                                      
                                        <tbody>   
                                        <tr>    

                                        
                                                <td><img id="preview" style="width:80px; height: 80px; margin-top:15px; " class="rounded-circle img-fluid d-block mx-auto" src="../../assets/images/users/<?php echo $mesaj['fotograf'];?>.jpg" alt=""></td>
                                                <td><?php echo $mesaj['ad']; ?></td>
                                                <td><?php echo $mesaj['soyad'];  ?></td>
                                                <td><?php echo $mesaj['eposta']; ?></td>
                                                 <td><?php echo $mesaj['kullaniciAdi']; ?></td>
	                                              <td><?php if ($mesaj['yetki']==1) {
                                                      echo "ADMİN";
                                                  } else {
                                                    echo "USER";

                                                  }?></td>
                                               		<td> <a href="kullaniciDuzenle.php?kulId=<?php echo $mesaj['kulid'];?>"><input style="margin-bottom: 5px;" type="button" class="  btn btn-primary btn-sm" value="DUZENLE" ></a><br>
                                               		<a href="../../dataman.php?kulId=<?php echo $mesaj['kulid'];?>&kulSil=ok"><input style="margin-bottom: 5px;" type="button" class="  btn btn-danger btn-sm" value="SİL" ></a><br>
                                               		 </td>	
                                            </tr>
                                        
                                          
                                           
                                        </tbody>  
                                                        



                               <?php } ?>

                                    </table>
                                </div>

                            </div>
                        </div>
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