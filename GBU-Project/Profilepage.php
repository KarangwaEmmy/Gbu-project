<?php
    session_start();
 // error_reporting(0);
    include_once('config/PDOClass.php');
    if (strlen($_SESSION['AdminLogin'])==0) {
        header("Location: index.php");
    }
    else{

    $m_id =  $_GET['member'];
?>
<!doctype html>
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
        <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.css">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css">  
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
                                    <i class="si si-users text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">GBU</span><span class="font-size-xl text-primary">Nyarugenge Campus</span>
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
                                <i class="si si-users text-primary"></i>
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
                                <a class="active" href="#"><i class="si"></i>Gbu Profile page</a>
                            </li>
                  
                            <li>
                                 <a href="dashboard.php"><i class="si si-home"></i>Back to dashboard</a>
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
                   <!-- Page Content -->
                <div class="content">
                    <?php
                     include_once('config/PDO.php');
                     $m_id = $_GET['member'];
                      $sql = "SELECT * from gbumember WHERE id=$m_id";
                      $query = $db->prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();

                      foreach ($results as $result) {
                           
                    
                                ?>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Subscribe -->
                            
                            <!-- END Subscribe -->

                            <!-- Instructor -->
                            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-user"></i>
                                        <?=$result->firstname?>  <?=$result->lastname?>
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5"><?=$result->firstname?>  <?=$result->lastname?></div>
                                    <div class="text-muted"><?=$result->phone?></div>
                                </div>
                            </a>
                            <!-- END Instructor -->

                            
                            <!-- END Course Info -->
                        </div>
                        <div class="col-xl-8">
                             <!-- Page Content -->
                <div class="content">
                    

                    <!-- Results -->
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#search-classic">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#search-photos">Connected Service</a>
                            </li>
                           
                        </ul>
                        <div class="block-content block-content-full tab-content overflow-hidden">
                            <!-- Classic -->
                            <div class="tab-pane fade show active" id="search-classic" role="tabpanel">
                                
                                <div class="row items-push">
                                 <div class="col-12">
                                
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-4 col-md-3 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->firstname?>  <?=$result->lastname?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Sex</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->sex?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-4 col-md-3 col-5">
                                                <label style="font-weight:bold;">Phone </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->phone?>
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-4 col-md-3 col-5">
                                                <label style="font-weight:bold;">Cell </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->cell?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Home Church</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->homechurch?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Baptism Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->baptism?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Email Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <?=$result->email?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">School</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->school?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Faculty</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$result->faculty?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Registration Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <label style="font-weight:bold; color: orange"><?=$result->submitdate?></label>
                                                
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    
                                </div>
                            </div>
                             
                                </div>
                    <div class="col-md-6 col-offset-6">
                        <button type="submit" class="btn btn-primary"><a href="GBU-memberform.php?member=<?=$m_id?>" style="color: white">Update Info</a> </button>
                   </div>
           
                            </div>
                            <!-- END Classic -->

                            <!-- Photos -->
                            <div class="tab-pane fade" id="search-photos" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">1</span> service found for 
                                </div>
                                <div class="row gutters-tiny">
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo1.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo2.jpg" alt="">
                                    </div>
                               
                                </div>
                            </div>
                            <!-- END Photos -->

                         
                        </div>
                    </div>
                    <!-- END Results -->
                </div>
                <!-- END Page Content -->
                      
                        </div>
                    </div>
                    <?php }?>
                </div>

            
            </main>
            <!-- END Main Container -->
 
        </div>
        <!-- END Page Container -->

        <script type="text/javascript">
        $(document).ready(function () {
            $imgSrc = $('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            $('#profilePicture').on('change', function () {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').attr('value', 'Confirm');
                $('#btnDiscard').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function () {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });
    </script>
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
        
    </body>
</html>
<?php } ?>