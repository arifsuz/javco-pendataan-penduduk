<!DOCTYPE html>
<?php
include('profil.php');
$new = new Profil();
$prof = $new->about();
$dokumen = $new->dokumen();

if (isset($_GET['profil'])) {
    $new->edit_profil();
}

$_SESSION['aktif'] = 'dashboard';
$level = $_SESSION['level'];
if ($level == 'admin') {
    $menu = "../menu.php";
}else{
    $menu = "../menu_user.php";
}
$profil = "../profil.php";
$title = "JAVCO";
 ?>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $title; ?></title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="icon" type="image/png" href="../assets/img/logo.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="../assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="../assets/css/main.css">

        <!-- Include a specific file here from ../assets/css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="../assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="../assets/js/vendor/modernizr-3.3.1.min.js"></script>

        <!--file upload-->
  		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-fileupload.min.css" />
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in ../assets/js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

                'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
                'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

                'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
            -->
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">

                <!-- Main Sidebar -->
                <?php include $menu; ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in ../assets/js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in ../assets/js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href="../pilihan.php"><strong>SELAMAT DATANG DI JAVCO PENDATAAN WARGA</strong></a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Right Header Navigation -->
                            <?php include $profil; ?>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

<!-- Page content -->
                    <div id="page-content">
                    <!-- User Profile Row -->
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                            <?php 
                                if (isset($_COOKIE['alert'])) {
                                    echo $_COOKIE['alert'];
                                }else{
                                    echo "";
                                }
                            ?>
                                <div class="widget">
                                    <div class="widget-image widget-image-sm">
                                        <img src="../assets/img/photo1.jpg" alt="image">
                                        <div class="widget-image-content text-center" >
                                            <img src="../foto/<?php echo $prof['foto']?>" alt="avatar" class="img-circle img-thumbnail img-thumbnail-transparent img-thumbnail-avatar-2x push">
                                            <h2 class="widget-heading text-light"><strong></strong></h2>
                                    		<a href="#modal-fade2" class="btn btn-effect-ripple btn-default" data-toggle="modal" title="Edit Tentang"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                    <div class="widget-content border-bottom">
                                        <h4>
                                        	<div class="col-md-10">Tentang</div>
                                        </h4>
                                        <br>
                                        <br>
                                        <br>
                                        <p>
                                            <?php echo nl2br($prof['about']); ?>
                                        </p>
                                        <p>
                                            Lahir di <?php echo $prof['tempat_lahir'] ?>, <?php echo $prof['tanggal_lahir']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li><a href="#profile-gallery"><strong>INFO LENGKAP <?php echo $prof['nama']; ?></strong></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
                                    <table id="general-table" class="table table-striped table-bordered table-vcenter table-hover">
                                    <tbody>
                                        <tr>
                                            <td><strong>NIK</strong></td>
                                            <td><?php echo $prof['nik'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>NAMA</strong></td>
                                            <td><?php echo $prof['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>TTL</strong></td>
                                            <td><?php echo $prof['tempat_lahir'].", ".$prof['tanggal_lahir'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>JENIS KELAMIN</strong></td>
                                            <td><?php echo $prof['jk'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>GOL. DARAH</strong></td>
                                            <td><?php echo $prof['golongan_darah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PEKERJAAN</strong></td>
                                            <td><?php echo $prof['pekerjaan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PENDIDIKAN</strong></td>
                                            <td><?php echo $prof['pendidikan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>STATUS PERKAWINAN</strong></td>
                                            <td><?php echo $prof['status_perkawinan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>AGAMA</strong></td>
                                            <td><?php echo $prof['nama_agama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>KLASIFIKASI</strong></td>
                                            <td><?php echo $prof['nama_klasifikasi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>NO. KK</strong></td>
                                            <td><?php echo $prof['no_kk'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <!-- END Tabs Content -->
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile Row -->
                        </div>
<!-- END Page Content -->
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

<!-- Regular Fade -->
        <div id="modal-fade2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title"><strong><i class="fa fa-plus"></i> Upload Foto Profil Baru</strong></h3>
                    </div>
                    <div class="modal-body">
                    	<form action="index.php?profil=<?php echo $prof['nik']; ?>" method="POST" class="form-bordered" enctype="multipart/form-data">
                        <div class="col-sm-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../foto/<?php echo $prof['foto']?>" alt=""/>
                                </div>
                                <input type="hidden" name="foto_lawas" value="">
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                       <span class="btn btn-default btn-file">
                                         <span class="fileupload-new"><i class="fa fa-camera"></i> Ubah Foto</span>
                                       <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                       <input type="file" class="default" name="foto"/>
                                       <input type="hidden" name="foto_lawas" value="<?php echo $prof['foto'] ?>" />
                                       </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username_baru" class="form-control" value="<?php echo $prof['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password_baru" class="form-control" value="<?php echo base64_decode($prof['password']); ?>">
                        </div>
                        <div class="form-group">
                            <label>Tentang Anda</label>
                            <textarea name="tentang" cols="75" rows="10" class="form-control ui-wizard-content"><?php echo $prof['about']; ?></textarea>
                        </div>
                        <div class="form-group form-actions">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Edit Profil</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- END Regular Fade -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/app.js"></script>
        
        <!-- Load and execute javascript code used only in this page -->
        <script src="../assets/js/pages/uiWidgets.js"></script>
        <script>$(function () { UiWidgets.init(); });</script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="../assets/js/pages/readyDashboard.js"></script>
        <script>$(function(){ ReadyDashboard.init(); });</script>

        <!--file upload-->
		<script type="text/javascript" src="../assets/js/bootstrap-fileupload.min.js"></script>


    </body>
</html>