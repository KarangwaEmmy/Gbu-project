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
                                <a class="active" href="javascript:void(0)"><i class="si"></i>GBU announcement</a>
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

            
                            <!-- Projects -->
                            <div   class="content">

                                 <button type="button" class="btn btn-lsm   btn-info float-right" data-toggle="modal" data-target="#modal-compose">Add New announcement</button><br>
                                <hr>
                                <table class="table table-striped table-borderless table-hover table-vcenter">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 50%;">Announcement</th>
                                         
                                            <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Person Incharge</th>
                                            <th class="text-center" style="width: 20%;">Submission Date</th>
                                            <th class="text-center" style="width: 80px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                       include_once('../config/PDOClass.php');
                       
                      $sql = "SELECT * from announcement ";
                      $query = $db->prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;

                      foreach ($results as $result) {
                           // if ($results->rowCount()>0) {
                                
                          
                    
                                ?>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)"><?=$result->title?></a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    <?=$result->details?>
                                                </p>
                                            </td>
                                            
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600"><?=$result->person?></td>
                                            <td class="font-size-xl text-center font-w600"><?=$result->submitdate?></td>
                                             <td class="text-center">
                                                <div class="btn-group">
                                                    <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <a href="announcement-update.php?member=<?=$result->id?>"><i class="fa fa-edit" title="Edit Record"></i> </a>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <a href="Delete-ann.php?member=<?=$result->id?>"><i class="fa fa-times" title="Edit Record"></i> </a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                         <?php $cnt++;  
                          // }

                          }?>
                                    
                                       
                                    </tbody>
                                </table>
                            </div>

            </main>
            <!-- END Main Container -->
         
        </div>
        <!-- END Page Container -->

 
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