        <?php include "header.php";
              include "../../database.php";

              $kullanici=$_SESSION['KULID'];
              $profilDuzenle=$db->query("SELECT * FROM kullanicilar WHERE kulId='$kullanici'",PDO::FETCH_ASSOC);
              $profilBilgi=$profilDuzenle->fetch(PDO::FETCH_ASSOC);
         ?>        
       
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
                                    <li class="breadcrumb-item"><a href="anasayfa.php">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil Ayarları</li>
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
              <form action="../../dataman.php" method="POST" enctype="multipart/form-data"  >
            <div class="container-fluid">
             



                <div class="row"  >
                    <div class="col-md-12 text-center "  >
                    

                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Profil Düzenle</h4>

                                        
                                        <div class="form-group row text-center mx-auto  " >
                                            

                                            
                                             <img id="preview" style="width:150px; height: 150px; margin-top:15px; " class="rounded-circle img-fluid d-block mx-auto" src="../../assets/images/users/<?php echo $profilBilgi['fotograf'];?>.jpg" alt=""> 


                                             <a href="#"><i class="fa fa-android"></i></a>
                                        </div>

                                 <div class="form-group row " >

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label">Profil Fotoğrafı </label>
                                 <div class="col-sm-4 " >

                                   <input type="button" class="btn btn-primary" value="Dosya Seç" onclick="$('#file-picker').click();" >
                                  <input style="display: none;" id="file-picker" type="file" name="image"> 

                                </div>
                                 </div>

                                 <div class="form-group row " >

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label">Adı </label>
                                 <div class="col-sm-4 " >
                                    <input type="text" name="ad" class="form-control" value="<?php echo $profilBilgi['ad']; ?>" > 
                                </div>
                                 </div>
                                  <div class="form-group row " >
                            

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label">Soyadı</label>
                                 <div class="col-sm-4 " >
                                    <input type="text" name="soyad" class="form-control" value="<?php echo $profilBilgi['soyad']; ?>" > 
                                </div>
                                 </div>


                                 <div class="form-group row " >
                            

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label"  >E-Posta</label>
                                 <div class="col-sm-4 " >
                                    <input type="text" name="eposta" value="<?php echo $profilBilgi['eposta']; ?>" class="form-control" > 
                                </div>
                                 </div>

                                 <div class="form-group row " >
                            

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label">Şifre</label>
                                 <div class="col-sm-4 " >
                                  <input type="password" name="parola" class="form-control"  value="<?php echo $profilBilgi['parola']; ?>">
                                 </div>

                                </div>

                                    <div class="form-group row " >
                                     <label for="fname" class="col-sm-4 text-right control-label col-form-label">Kullanıcı Adı</label>
                                 <div class="col-sm-4" >
                                    <label class="form-control"  > <?php echo $_SESSION['kullaniciAdi']; ?> </label>
                               
                                 </div>
                                    
                                    </div>



                                 <div class="form-group row " >
                            

                               <label for="fname" class="col-sm-4 text-right control-label col-form-label">Hakkımda</label>
                                 <div class="col-sm-6 " >


                         <!-- <textarea  name="hakkimda" class="form-control"  value="<?php echo $profilBilgi['hakkimda'];?>"><?php echo $profilBilgi['hakkimda'];?>  </textarea> -->
                                  
                          <textarea name="hakkimda" id="metin" class="ckeditor"><?php echo $profilBilgi['hakkimda'];?> </textarea>


                      <script src="ckeditor/ckeditor.js">
                        
                          
                        CKEDITOR.plugins.add('imageuplader', {
                      init:function(editor){

                        editor.config.filebrowserBrowseUrl='/ckeditor/plugins/imageuplader/imgbrowser.php';
                      });



                      </script> 



                                 </div>

                                </div>


                                     <div class="form-group row " >
                                    
                                 <div class="col-sm-4" >
                                   <input type="text" hidden="" name="kulID" value="<?php echo $_SESSION['KULID'];?>">
                               
                                 </div>



                                    
                                    </div>

                                   
                               
                                    <div class="col-md-8 text-right " >
                                    
                                      <input type="Submit" class="btn btn-primary" name="Profilguncelle" value="Güncelle" >
                                    



                                    </div>





                               
                            </form>
                           </div>
                    </div>

        </div>
                </form>
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
    <!-- This Page JS -->
    <script src="../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../../dist/js/pages/mask/mask.init.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
    <script type="text/javascript">
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#file-picker").change(function() {
          readURL(this);
        });
    </script>


</body>

</html>