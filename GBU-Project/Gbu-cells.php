<?php
    session_start();
 // error_reporting(0);
    include_once('config/PDOClass.php');
    if (strlen($_SESSION['SecLogin'])==0 AND strlen($_SESSION['AdminLogin'])==0 AND strlen($_SESSION['TreasLogin'])==0 ) {
        header("Location: index.php");
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
                                <a class="link-effect font-w700" href=" ">
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
                            <a class="link-effect font-w700 mr-5" href=" ">
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
                                <a class="active" href=" "><i class="si"></i>Gbu Cells</a>
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

            <div class="content">
                    <div class="my-50 text-center">
                        <h2 class="font-w700 text-black mb-10">All Cells</h2>
                        <h3 class="h5 text-muted mb-0">All great, keep it up!</h3>
                    </div>
                    <div class="row">
                 
                        <div class="col-lg-6 col-xl-4">
                            <div class="block block-fx-shadow text-center">
                                <a class="d-block bg-info font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-eth">
                                    <span class="text-white">Jehovah Shallon</span>
                                </a>
                                <div class="block-content block-content-full">
                                    <div class="pt-20 pb-30">
                                        <div class="font-size-h3 font-w700">8 Members</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Cell leader name</div>
                                    </div>
                                    <a class="btn btn-secondary" href="Cell-members.php">
                                        <i class="fa fa-send mr-5"></i> View More
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-6 col-xl-4">
                            <div class="block block-fx-shadow text-center">
                                <a class="d-block bg-elegance font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-gbp">
                                    <span class="text-white">Domijion Cell</span>
                                </a>
                                <div class="block-content block-content-full">
                                    <div class="pt-20 pb-30">
                                        <div class="font-size-h3 font-w700">7 members</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Cell leader name</div>
                                    </div>
                                   <a class="btn btn-secondary" href="Cell-members.php">
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
                            <table class="table table-striped table-borderless table-hover table-vcenter">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="d-none d-sm-table-cell text-center" style="width: 40px;">#</th>
                                            <th class="text-center" style="width: 70px;"><i class="si si-user"></i></th>
                                            <th>Name</th>
                                            <th class="d-none d-sm-table-cell">Email</th>
                                            <th class="d-none d-lg-table-cell" style="width: 15%;">Access</th>
                                            <th class="text-center" style="width: 80px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">1</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Jose Parker</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client1@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">2</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Scott Young</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client2@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">3</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Jose Parker</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client3@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">4</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Jack Estrada</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client4@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">5</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Lori Grant</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client5@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Ralph Murray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client6@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">7</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Jesse Fisher</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client7@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">8</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Lisa Jenkins</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client8@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">9</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Danielle Jones</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client9@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">10</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Brian Stevens</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client10@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
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