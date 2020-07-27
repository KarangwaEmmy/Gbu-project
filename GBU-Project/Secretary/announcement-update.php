 <?php
session_start();
    include_once('../config/PDOClass.php');
    if (strlen($_SESSION['SecLogin'])==0) {
        header("Location: dashboard.php");
    }
    else{

    if (isset($_POST['submit'])) {
        $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        $person = filter_var($_POST['person'], FILTER_SANITIZE_STRING);
        $Announcement = filter_var($_POST['Announcement'], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO `announcement` (`title`, `person`, `details`) VALUES ('$title', '$person', '$Announcement')";
    $stmt= $db->prepare($sql);

    $stmt->execute(array(':title'=>$title, ':person'=>$person,':Announcement'=>$Announcement));

    if ($stmt) {
        echo "<script>alert( 'Announcement was created  Successfully!')</script>";
    }

    }

?>

<!DOCTYPE html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>GBU Nyarugenge Campus</title>

        <meta name="description" content="GBU Nyarugenge campus ">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="GBU Nyarugenge campus">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="GBU Nyarugenge campus ">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
          <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../assets/js/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="../assets/js/plugins/simplemde/simplemde.min.css">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="../assets/css/themes/flat.min.css">  
        <!-- END Stylesheets -->
    </head>
    <body>
 
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow bg-black-op-10">
                        <div class="content-header-section text-center align-parent">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="#">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">GBU</span><span class="font-size-xl text-primary"> Nyarugenge Campus</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                    </div>
                    <!-- END Side Header -->
 
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700 mr-5" href="#">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">GBU</span><span class="font-size-xl text-primary">Nyarugenge Campus</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                
                        <ul class="nav-main-header">
                            <li>
                                <a class="active" href="#"><i class="si"></i>Gbu Add Announcement form</a>
                            </li>
                  
                            <li>
                                <a href="dashboard.php"><i class="si si-home"></i>Back to Dashboard</a>
                            </li>
                            
                        </ul>
                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="bd_search.php" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
            <div class="content">
            
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Write Announcement</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                            <input type="text" class="form-control" id="message-email" name="title" placeholder="Write a title?" required="">
                                            <label for="message-email">Title</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-envelope-open"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                            <input type="text" class="form-control" id="message-subject" name="person" placeholder="What is this Person?" required="">
                                            <label for="message-subject">In Charge paerson</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-book-open"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-12">
                                        <!-- SimpleMDE Container -->
                                        <textarea class="js-summernote" id="js-summernote-air" name="Announcement" required="">Write Announcement!</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <button type="submit" name="submit" class="btn btn-alt-primary" data-dismiss="modal">
                                        <i class="fa fa-send mr-5"></i> Save Announcement
                                    </button>
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SimpleMDE Editor -->
                </div>
                <!-- END Page Content -->

            </div>
            </main>
            <!-- END Main Container -->
 
        </div>
        <!-- END Page Container -->

 
        <script src="../assets/js/codebase.core.min.js"></script>
 
        <script src="../assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="../assets/js/plugins/ckeditor/ckeditor.js"></script>
        <script src="../assets/js/plugins/simplemde/simplemde.min.js"></script>

        <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
        <script>jQuery(function () {
                                    Codebase.helpers(['summernote', 'ckeditor', 'simplemde']);
                                });</script>
        
    </body>
</html>
<?php }?>