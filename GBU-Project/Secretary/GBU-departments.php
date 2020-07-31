<?php
session_start();
    include_once('../config/PDOClass.php');
    if (strlen($_SESSION['SecLogin'])==0) {
        header("Location: dashboard.php");
    }
    else{


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
        <link rel="stylesheet" href="../assets/js/plugins/select2/css/select2.css">
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
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">GBU</span><span class="font-size-xl text-primary"> Nyarugenge Campus</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                
                        <ul class="nav-main-header">
                            <li>
                                <a class="active" href="#"><i class="si"></i>Gbu Membership Form</a>
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
                    <div class="my-50 text-center">
                        <h2 class="font-w700 text-black mb-10">All GBU Departments</h2>
                        <h3 class="h5 text-muted mb-0">All great, keep it up!</h3>
                    </div>
                    <div class="row">
                 
                        <div class="col-lg-6 col-xl-4">
                            <div class="block block-fx-shadow text-center">
                                <a class="d-block bg-info font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-eth">
                                    <span class="text-white">Evangelism</span>
                                </a>
                                <div class="block-content block-content-full">
                                    <div class="pt-20 pb-30">
                                        <div class="font-size-h3 font-w700">8 Members</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Cell leader name</div>
                                    </div>
                                    <a class="btn btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-send mr-5"></i> View More
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-6 col-xl-4">
                            <div class="block block-fx-shadow text-center">
                                <a class="d-block bg-elegance font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-gbp">
                                    <span class="text-white">Rhema Ministries</span>
                                </a>
                                <div class="block-content block-content-full">
                                    <div class="pt-20 pb-30">
                                        <div class="font-size-h3 font-w700">37 members</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Cell leader name</div>
                                    </div>
                                   <a class="btn btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-send mr-5"></i> View More
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>
            <!-- END Main Container -->
 
        </div>
        <!-- END Page Container -->

        <!-- BTC Wallet -->
 
        <!-- END BTC Wallet -->

        <!-- ETH Wallet -->
        <div class="modal fade" id="modal-crypto-wallet-eth" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-eth" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">
                                <i class="si si-wallet text-info mr-5"></i> Dominion Cell
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped table-vcenter mb-10">
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            JAN<br>10
                                        </td>
                                        <td>
                                            <strong>Bought Ethereum</strong><br>
                                            <span class="text-muted">Using USD wallet</span>
                                        </td>
                                        <td class="text-right text-success font-w600">
                                            + 2.50 ETH
                                        </td>
                                        <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                            - $2.405
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            JAN<br>05
                                        </td>
                                        <td>
                                            <strong>Bought Ethereum</strong><br>
                                            <span class="text-muted">Using USD wallet</span>
                                        </td>
                                        <td class="text-right text-success font-w600">
                                            + 0.50 ETH
                                        </td>
                                        <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                            - $530
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            JAN<br>02
                                        </td>
                                        <td>
                                            <strong>Sold Ethereum</strong><br>
                                            <span class="text-muted">Using USD wallet</span>
                                        </td>
                                        <td class="text-right text-danger font-w600">
                                            - 0.25 ETH
                                        </td>
                                        <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                            + $260
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            JAN<br>01
                                        </td>
                                        <td>
                                            <strong>Sold Ethereum</strong><br>
                                            <span class="text-muted">Using USD wallet</span>
                                        </td>
                                        <td class="text-right text-danger font-w600">
                                            - 2.00 ETH
                                        </td>
                                        <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                            + $2.120
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            JAN<br>01
                                        </td>
                                        <td>
                                            <strong>Bought Ethereum</strong><br>
                                            <span class="text-muted">Using USD wallet</span>
                                        </td>
                                        <td class="text-right text-success font-w600">
                                            + 1.00 ETH
                                        </td>
                                        <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                            - $1.000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ETH Wallet -->

       
 

 
        <script src="../assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at ../assets/_es6/main/app.js
        -->
        <script src="../assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/be_pages_dashboard.min.js"></script>
        
    </body>
</html>
<?php }?>