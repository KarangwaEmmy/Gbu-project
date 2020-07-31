<?php
    session_start();
 // error_reporting(0);
    include_once('../config/PDOClass.php');
    if (strlen($_SESSION['TreasLogin'])==0) {
        header("Location: dashboard.php");
    }
    else{

 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>GBU Nyarugenge campus</title>

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

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="../assets/css/themes/flat.min.css"> -->
         

        <!-- END Stylesheets -->
    </head>
    <body>
 
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-boxed">

            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-success"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar14.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect font-w600" href="javascript:void(0)">Treasurer</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Mini Stats -->
                    <div class="block pull-t pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-danger-light">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">assets</div>
                                    <div class="font-size-h4 text-pulse-darker">350</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">books</div>
                                    <div class="font-size-h4 text-pulse-darker">250</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">outreach</div>
                                    <div class="font-size-h4 text-pulse-darker">7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    

                    <!-- Notifications -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">Notifications</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600"> 29 New  </div>
                                    <div>
                                        <a href="javascript:void(0)">Admin Template</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 min ago</div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- END Notifications -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                 <a class="link-effect font-w700" href="dashboard.php">
                                    <i class=" text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">GBU</span><span class="font-size-xl text-primary">Nyarugenge  </span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="active" href=""><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Offerings & Tithe</span></li>
                            <li>
                                <a href="Total-expenses.php"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Manage Expenses</span></a>
                            </li>
                            <li>
                                <a href="All-income.php"><i class="si si-users"></i><span class="sidebar-mini-hide">Manage Incomes</span></a>
                            </li>
                             
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                            <li>
                                <a href="Donations.php"><i class="si si-user"></i><span class="sidebar-mini-hide">Manage Donations</span></a>
                            </li>
                         
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block" role="group">
                            <button type="button" class="btn btn-dual-secondary dropdown-toggle" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dashboard
                            </button>
                            <div class="dropdown-menu min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="Treasurer-profile.php">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Add-income.php">
                                    <i class="si si-user mr-5"></i> Add Income
                                </a>
                               <a class="dropdown-item" href="Add-expenses.php">
                                    <i class="si si-user mr-5"></i> Add Expense
                                </a>
                                <a class="dropdown-item" href="Donation.php">
                                    <i class="si si-briefcase mr-5"></i> Add Donation
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../index.php">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Left Section -->

                
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
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
             <div class="block block-rounded bg-gd-aqua">
                        <div class="block-content bg-white-op-5">
                            <div class="py-30 text-center">
                                <h1 class="font-w700 text-white mb-10">GBU Treasurers Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op">Welcome Treasurer, Manage financial related records!</h2>
                            </div>
                        </div>
                    </div>
            <!-- Main Container -->
             <main id="main-container">

                        <div class="row gutters-tiny">
                        <!-- Row #5 -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-transparent" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-primary-lighter">
                                        <?php 
                                        include_once('../config/PDO.php');
                                      $sql = "SELECT sum(*) from expense";
                                      $query = $db->prepare($sql);
                                      $query->execute();
                                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                                      $cnt=$query->rowCount();
                                                ?>
                                    <div class="py-50 text-center bg-white-op-25">
                                        <div class="font-size-h2 font-w700 mb-0 text-primary"><?php echo htmlentities($cnt);?></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Total Expenses</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-transparent" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-success-light">
                                    <?php 
                                       
                                      $sql = "SELECT sum(tithe) as tith  from income";
                                      $query = $db->prepare($sql);
                                      $query->execute();
                                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                                      $cnt=$query->rowCount();
                                                ?>
                                    <div class="py-50 text-center bg-white-op-25">
                                        <div class="font-size-h2 font-w700 mb-0 text-success"><?php echo htmlentities($cnt);?></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Total Income</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-transparent" href="Account-update.php">
                                <div class="block-content block-content-full bg-info-light">
                                    <div class="py-50 text-center bg-white-op-25">
                                        <div class="font-size-h2 font-w700 mb-0 text-info"><?php echo htmlentities($cnt);?></div>
                                        <div class="font-size-sm font-w600 text-uppercase">Account Status</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-transparent" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-warning-light">
                                    <div class="py-50 text-center bg-white-op-25">
                                        <div class="font-size-h2 font-w700 mb-0 text-warning"><?php echo htmlentities($cnt);?></div>
                                        <div class="font-size-sm font-w600 text-uppercase">Debts</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #5 -->
                    </div>

            </main>
            <!-- END Main Container -->

          
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="../assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="../assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/db_pop.min.js"></script>


    </body>
</html>
<?php }?>