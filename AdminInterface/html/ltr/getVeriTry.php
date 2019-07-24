<?php 

include "header.php";

include "../../database.php";




$dataSee=$db->query("SELECT * FROM icerik where icerikSayfaAd=' llll'",PDO::FETCH_ASSOC);

$contentSee=$dataSee->fetch(PDO::FETCH_ASSOC);

echo $contentSee['icerikID'];




       echo "emrsfsfsasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd";





 ?>

 <body>
     <div id="main-wrapper">
       <div class="col-md-12">
         <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quill Editor</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text <?php 

$dataSee=$db->query("SELECT * FROM icerik where icerikSayfaAd=' llll'",PDO::FETCH_ASSOC);
 while ( $contentSee=$dataSee->fetch(PDO::FETCH_ASSOC)) {

     echo "  Başlık : ".$contentSee['icerikIcBaslik'];
     echo "  ID : ".$contentSee['icerikID'];
     echo "  sayfa Adı : ".$contentSee['icerikSayfaAd'];
    
  } ?></p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>



     </div>




 </body>
   </div><br>
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