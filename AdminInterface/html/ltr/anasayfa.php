<?php include "header.php"; 
include "../../database.php";
?>
  <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                       
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="anasayfa.php">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Haftalık Yayın</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

<div class="page-wrapper">

            <div class="container-fluid" >
              <?php if (@$_GET['durum']=='ok'){ ?>
                   <div class="card" >
                   
                   <div class="card-body" >
                       <h5 style="font-size:19px; color: green; text-align: center;" >Paylaşım yayınlandı.</h5>
                   </div>
               </div>
              <?php } ?>
                         <div class="card">
                              <div class="card-body">
                                <h5 class="card-title m-b-0" style="text-align: center; font-size:20px; ">Yayındaki Yazılarım</h5>
                            
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                
                                                <th scope="col">Kısa Başlık</th>
                                                <th scope="col">TARİH</th>
                                                <th scope="col">PAYLAŞIM TÜRÜ</th>
                                                <th scope="col"><button type="button" class="btn btn-outline-success"><a  style="font-color:white;"  href="HaftalikYayinEkle.php?yazarID=<?php echo $_SESSION['KULID']; ?>">EKLE</a></button></th>
                                              
                                            </tr>
                                          </thead>
                                        <tbody class="customtable">

                                             <?php


                                              $yazar=$_SESSION['KULID']; 
                                              //echo $yazar; 
                                              $haftalik=$db->query("SELECT * FROM haftalikyayin where yazarId='$yazar'", PDO::FETCH_ASSOC);

                                    $i = 0;

                                  while($yayingoster=$haftalik->fetch(PDO::FETCH_ASSOC)){
                                    $i++;
                                   ?>
                                            <tr>
                                                <td><?php echo $yayingoster['kisabaslik']; ?></td>
                                                <td><?php echo $yayingoster['yayinTarih']; ?></td>
                                                <td><?php echo $yayingoster['paytur']; ?></td>
                                                <td><button style="color : white;"  type="button" class="btn btn-primary btn-sm"><a style="color: white;" href="haftayayinDuzenle.php?yayinId=<?php echo $yayingoster['konuid'];?>">Düzenle</a></button>&nbsp
                                                   <a href="../../dataman.php?yayinId=<?php echo $yayingoster['konuid']; ?>&konusil=ok"> <button style="color: white;" type="button" class="btn btn-danger btn-sm">sil</button></a></td>
                                            </tr>
                                          
                                          <?php } ?>

                                        </tbody>
                                    </table>

                                          <?php 

                                          if($i==0){ ?>
                                          <h4 style="text-align: center;">YAYINDA PAYLAŞIMINIZ BULUNMAMAKTADIR.</h4>
                                    <?php  }

                                          ?>

                                </div>
                        </div>



                </div>



             <footer class="footer text-center">
            <!--   <a href="https://wrappixel.com"></a>. -->
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