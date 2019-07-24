<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php session_start();

    if (!isset($_SESSION['kullaniciAdi'])) {
        
        header("location:../../login-form/loginPage.php");
    }
    include "../../database.php";

    $kullanici=$_SESSION['KULID'];
    $profilDuzenle=$db->query("SELECT * FROM kullanicilar WHERE kulid='$kullanici'",PDO::FETCH_ASSOC);
    $profilBilgi=$profilDuzenle->fetch(PDO::FETCH_ASSOC);

 ?>



 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=UTF-8>
    

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/Adsı2z.png">
    <title>Yönetim Paneli</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!--Çalışma Takvimi-->
    <link href="../../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />

    <link href="../../ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

     <meta charset="utf-8">
    <title>ckeditor</title>
    <script src="ckeditor/ckeditor.js"></script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="anasayfa.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                            <img src="../../assets/images/Adsı2z.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">

                             <!-- dark Logo text 

                             <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />

                            -->

                            <h4>E.R.A</h4>
                             



                        </span>
                       
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->


                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                  
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->

                    <ul class="navbar-nav float-right">

                    <div  class="dropdown-menu dropdown-menu-right user-dd animated">  

                         <li class="nav- items dropdown" >

                                <a href=""  style=" color:yellow;  vertical-align: center "><?php echo $_SESSION['kullaniciAdi']; ?></a>


                        </li>
                    </div>
    
               
                           <!--  <a class="mdi mdi-account-check" href="logout.php"> Logout</a> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                     <img style="width:45px; height: 45px; margin-top:15px; " class="rounded-circle img-fluid d-block mx-auto" src="../../assets/images/users/<?php echo $profilBilgi['fotograf'];?>.jpg" alt=""> 
                                     <a href="" style="color:white; font-size: 15px;" ><?php  echo $_SESSION['kullaniciAdi']; ?></a>
                                     
                                       
                              

                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                              
                                <a href="iletisimSekmesi.php" class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>GELEN KUTUSU</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ProfilDuzenle.php"><i class="ti-settings m-r-5 m-l-5"></i>HESAP AYARLARI</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> ÇIKIŞ</a>
                                <div class="dropdown-divider"></div>
                            
                        
                                       
                                    
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>

            

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="anasayfa.php" aria-expanded="false"><i class="mdi mdi-home-variant"></i><span class="hide-menu">Anasayfa</span></a></li>

                
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="iletisimSekmesi.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Iletişim</span></a></li>

                            <?php if ($profilBilgi['yetki']=='1') { ?>

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kullanicilar.php" aria-expanded="false"><i class="mdi mdi-view-list"></i><span class="hide-menu">Kullanicilar</span></a></li>
                           <?php } ?>
                        
                             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="sayfalar.php" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Mühendislik</span></a></li>

                         
                        
                             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="muhendislik.php" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Blog</span></a></li>

                      
                            
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->