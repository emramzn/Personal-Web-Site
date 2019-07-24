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
                                      
                                        <h5 style="color: green; font-size: 19px; text-align: center;" >Mail İletildi.</h5>
                                  <?php } ?>

                                       
                                        
                                   

                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="text-align: center;" >
                                        <thead>
                                            <tr>

                                                <th style="text-align: center;" >#</th>
                                                <th>İSİM</th>
                                                <th>E-POSTA</th>
                                                <th>MESAJ</th>
                                                <th>TARİH</th>
                                                <th>İŞLEM</th>
                                                
                                               
                                            </tr>
                                        </thead>

                          <?php 

                          
                           
                          $kullanici=$_SESSION['KULID'];
                          $yetki=$_SESSION['yetki'];

                          if($yetki==1) {
                            $sqlKulFilter = "(yazarId='$kullanici' or yazarId IS NULL)";
                          } else {
                            $sqlKulFilter = "yazarId='$kullanici'";
                          }

                          if(isset($_GET['q'])) {
                             $sql = "SELECT * FROM iletisimkullanici WHERE $sqlKulFilter and (isim LIKE '%{$_GET['q']}%' OR  eposta LIKE '%{$_GET['q']}%' or mesaj LIKE '%{$_GET['q']}%' ) ORDER BY mesID DESC";
                          } else {
                            $sql = "SELECT * FROM iletisimkullanici WHERE $sqlKulFilter ORDER BY mesID DESC";
                          }

                          $mesajVeri=$db->query($sql ,PDO::FETCH_ASSOC);

                              while ($mesaj=$mesajVeri->fetch(PDO::FETCH_ASSOC)) 
                                
                           
                              { ?>

                                        <!--  satırda okunmayanların yazı tipi farklı  -->    
                                                  
                                        <tbody>   
                                        <tr  <?php if ($mesaj['durum']=='0') {?>  

                                                style="font-weight: bold; font-size:15px; "
                                                
                                            <?php } else { ?>   


                                                 style=" font-size:13px; "

                                            <?php } ?>    >

                                             <!--  satırda okunmayanların durum iconu farklı farklı  --> 

                                                <td style="text-align: center;" >

                                                    <?php if ($mesaj['durum']=='1') { ?>
                                                       
                                                       <img  src="../../assets/images/openedEmail.png"> 
                                                      

                                               <?php  } else {  ?>

                                              
                                                    <img src="../../assets/images/notread.png">
                                              

                                                 <?php   } ?>


                                                </td>
                                                <td><?php echo $mesaj['isim']; ?></td>
                                                <td><?php echo $mesaj['eposta']; ?></td>
                                                <td ><?php echo substr($mesaj['mesaj'] ,0,20);?></td>
                                                <td><?php echo $mesaj['mesTarih']; ?></td>

                                                
                                                <td><a href="mesajCevap.php?mesajID=<?php echo $mesaj['mesID'];?>" ><img style="width: 32px; height: 32px;" title="Mesajı Gör"  src="../../assets/images/sentMessage.png">
                                                    </a>&nbsp <a href="../../dataman.php?mesId=<?php echo $mesaj['mesID'];?>&mailSil=ok"> <img style="width: 32px; height: 32px;" title="Mesajı Sil" src="../../assets/images/deleteMail.png"></a></td>
                                               
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
               <!--  All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>. -->
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