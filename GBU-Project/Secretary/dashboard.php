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
        <link rel="shortcut icon" href="../assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/media/favicons/apple-touch-icon-180x180.png">
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
                       
                        <button type="button" class="btn btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32" src="../assets/media/avatars/avatar14.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect font-w600" href="javascript:void(0)">Secretary</a>
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
                                    <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">../assets</div>
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
                                 <a class="link-effect font-w700" href="index.php">
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
                                <a class="active" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage Members</span></li>
                            <li>
                                <a href="Gbu-cells.php"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Manage Cells</span></a>
                            </li>
                            <li>
                                <a href="GBU-departments.php"><i class="si si-users"></i><span class="sidebar-mini-hide">Manage departments</span></a>
                            </li>
                            <li>
                                <a href="GBU-members.php"><i class="si si-users"></i><span class="sidebar-mini-hide">Manage Members</span></a>
                            </li>
                            <li>
                                <a href="GBU-amis.php"><i class="si si-users"></i><span class="sidebar-mini-hide">Manage Amis De GBU</span></a>
                            </li>
                            
                           
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                            <li>
                                <a href="GBU-announcement.php"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Announcement</span></a>
                            </li>
                            <li>
                                <a href="GBU-activities.php"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Activities</span></a>
                            </li>
                            <li>
                                <a href="Profile.php"><i class="si si-user"></i><span class="sidebar-mini-hide">My Profile</span></a>
                            </li>
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
                                Secretary Dashboard
                            </button>
                            <div class="dropdown-menu min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="Profile.php">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="GBU-messages.php">
                                    <span><i class="si si-envelope-open mr-5"></i> Messages</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                 
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->
                                <a class="dropdown-item" href="GBU-memberform.php" >
                                    <i class="si si-wrench mr-5"></i> Add new Member
                                </a>
                                <a class="dropdown-item" href="GBU-add-activity.php"  >
                                    <i class="si si-wrench mr-5"></i> Add new Activity
                                </a>
                                <a class="dropdown-item" href="GBU-add-announcement.php"  >
                                    <i class="si si-wrench mr-5"></i> Add new Announcement
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

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->
 

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <span class="badge badge-pill badge-info mr-5">Settings</span> <i class="fa fa-cog"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
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

            <!-- Main Container -->
             <main id="main-container">
                 <div class="block block-rounded bg-gd-lake">
                        <div class="block-content bg-white-op-5">
                            <div class="py-30 text-center">
                                <h1 class="font-w700 text-white mb-10">GBU Secretary Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op">Welcome Secretary, create something amazing!</h2>
                            </div>
                        </div>
                    </div>
                <!-- Page Content -->
                <div class="content content-full">
               <!-- Quick Navigation -->
                <div class="bg-body-dark">
                    <div class="content">
                        <div class="row">
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT id from announcement ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="GBU-announcement.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-envelope  text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-envelope  text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <div class="block-content block-content-full clearfix">
                                     
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?php echo htmlentities($cnt);?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Announce ments</div>
                                </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT id from cell ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="Gbu-cells.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <div class="block-content block-content-full clearfix">
                                     
                                    <div class="font-size-h3 font-w600 text-primary-darker"><span data-toggle="countTo" data-speed="1000" data-to="<?php echo htmlentities($cnt);?>">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Cells</div>
                                </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT id from department ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="GBU-departments.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-users text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-users text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                         <div class="block-content block-content-full clearfix">
                                     
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?php echo htmlentities($cnt);?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Departments</div>
                                </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT * from amisdedbu ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="../GBU-amis.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-users text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-users text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>   <div class="block-content block-content-full clearfix">
                                     
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?php echo htmlentities($cnt);?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Amis De Gbu</div>
                                </div>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT id from gbumember ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="GBU-members.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-users text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-users text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <div class="block-content block-content-full clearfix">
                                    
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?php echo htmlentities($cnt);?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Members</div>
                                </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <?php 
                      $sql = "SELECT id from activities ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?> 
                                <a class="block block-rounded text-center" href="GBU-activities.php">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-briefcase text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-briefcase text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                          <div class="block-content block-content-full clearfix">
                                    
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="150">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Actiivities</div>
                                </div>
                                         
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
                    <div class="row invisible" data-toggle="appear">
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <?php 
                      $sql = "SELECT id from messages ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?>
                                            <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">5 Messages</div>
                                        <div class="text-muted">2 were added today!</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <?php 
                      $sql = "SELECT id from gbumember ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?>
                                            <i class="fa fa-calendar fa-3x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600"><?php echo htmlentities($cnt);?> Members</div>
                                        <div class="text-muted">4 are scheduled for today!</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-paypal fa-3x text-primary"></i>
                                        </div>
                                                <?php 
                      $sql = "SELECT id from payments ";
                      $query = $db-> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=$query->rowCount();
                                ?>
                                        <div class="font-size-h4 font-w600"><?php echo htmlentities($cnt);?> Payments</div>
                                        <div class="text-muted">Pending for tomorrow.</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Overview -->
              
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

          
            <!-- END Footer -->
        </div>
 
        <script src="../assets/js/codebase.core.min.js"></script>
 
        <script src="../assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/db_pop.min.js"></script>

    </body>
</html>
<?php }?>