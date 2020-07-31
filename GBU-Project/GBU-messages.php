<?php
    session_start();
 // error_reporting(0);
    include_once('config/PDOClass.php');
    if (strlen($_SESSION['AdminLogin'])==0) {
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
                            <a class="link-effect font-w700 mr-5" href="index.php">
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
                                <a class="active" href="#"><i class="si"></i>Gbu Membership Form</a>
                            </li>
                  
                            <li>
                                <a shref="dashboard.php"><i class="si si-home"></i>Back to dashboard</a>
                            </li>
                            
                        </ul>
                        <!-- END Header Navigation -->
                    </div>
      
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action=" " method="post">
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
                    <h2 class="content-heading">
                        <button type="button" class="btn btn-sm btn-rounded btn-primary d-md-none float-right ml-5" data-toggle="class-toggle" data-target=".js-inbox-nav" data-class="d-none d-md-block">Menu</button>
                        <button type="button" class="btn btn-sm btn-rounded btn-success float-right" data-toggle="modal" data-target="#modal-compose">New Message</button>
                        All Messages (23)
                    </h2>
                    <div class="row">
                        <div class="col-md-5 col-xl-3">
                            <!-- Collapsible Inbox Navigation -->
                            <div class="js-inbox-nav d-none d-md-block">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Navigation</h3>
                                        
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav nav-pills flex-column push">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-inbox mr-5"></i> Inbox</span>
                                                    <span class="badge badge-pill badge-secondary">23</span>
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-folder mr-5"></i> Archive</span>
                                                    <span class="badge badge-pill badge-secondary">99</span>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END Collapsible Inbox Navigation -->

                            
                        </div>
                        <div class="col-md-7 col-xl-9">
                            <!-- Message List -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                     
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-left"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-right"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Messages Options -->
                                    <div class="push">
                                       
                                      
                                    </div>
                                    <!-- END Messages Options -->

                                    <!-- Messages -->
                                    <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
                                   
                            <!-- Web App Category -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="2">Message</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Date</th>
                                        
                                        <th class="d-none d-md-table-cell" style="width: 180px;">  Post by</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-speedometer fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Subject of the member</a>
                                            <div class="text-muted my-5">If you are a new user, here you will find everything you need</div>
                                             
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">819</a>
                                        </td>
                                        
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php">Barbara Scott</a><br>on <em>January 17, 2017</em></span>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <button type="button" class="btn btn-rounded btn-alt-secondary float-right">
                                            <i class="fa fa-times text-danger mx-5"></i>
                                            <span class="d-none d-sm-inline"> Delete</span>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="si si-compass fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Tutorials</a>
                                            <div class="text-muted my-5">The best place to learn new stuff</div>
                                            <div class="font-size-sm text-muted">
                                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">justinhunt</a></em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">837</a>
                                        </td>
                                       
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php">Amanda Powell</a><br>on <em>January 23, 2017</em></span>
                                        </td>
                                         <td class="d-none d-md-table-cell text-center">
                                             <button type="button" class="btn btn-rounded btn-alt-secondary float-right">
                                            <i class="fa fa-times text-danger mx-5"></i>
                                            <span class="d-none d-sm-inline"> Delete</span>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- END Web App Category -->
                                    <!-- END Messages -->
                                </div>
                            </div>
                            <!-- END Message List -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        <!-- Message Modal -->
        <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Welcome to our service</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Reply">
                                    <i class="fa fa-reply"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-image text-center" style="background-image: url('assets/media/photos/photo6.jpg');">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body font-size-sm">
                            <span class="text-muted float-right"><em>2 min ago</em></span>
                            <a href="javascript:void(0)">service@example.com</a>
                        </div>
                        <div class="block-content">
                            <p>Dear Customer,</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Best Regards,</p>
                            <p>Andrea Gardner</p>
                        </div>
                        <div class="block-content bg-body">
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-4">
                                    <div class="options-container fx-overlay-slide-down">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo20.jpg" alt="">
                                        <div class="options-overlay bg-black-op">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-noborder btn-alt-secondary min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-muted mt-5">Travel_Pack_1.jpg</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="options-container fx-overlay-slide-down">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo21.jpg" alt="">
                                        <div class="options-overlay bg-black-op">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-noborder btn-alt-secondary min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-muted mt-5">Travel_Pack_2.jpg</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="options-container fx-overlay-slide-down">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo22.jpg" alt="">
                                        <div class="options-overlay bg-black-op">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-noborder btn-alt-secondary min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-muted mt-5">Travel_Pack_3.jpg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Message Modal -->
            <!-- Compose Modal -->
        <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header">
                            <h3 class="block-title">
                                <i class="fa fa-pencil mr-5"></i> New Message
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form class="my-10" action="be_pages_generic_inbox.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                            <input type="email" class="form-control" id="message-email" name="message-email" placeholder="Where to send?">
                                            <label for="message-email">Email</label>
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
                                            <input type="text" class="form-control" id="message-subject" name="message-subject" placeholder="What is this about?">
                                            <label for="message-subject">Subject</label>
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
                                        <div class="form-material form-material-primary">
                                            <textarea class="form-control" id="message-msg" name="message-msg" rows="6" placeholder="Write your message.."></textarea>
                                            <label for="message-msg">Message</label>
                                        </div>
                                        <div class="form-text font-size-sm text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                                        <i class="fa fa-send mr-5"></i> Send Message
                                    </button>
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Compose Modal -->
        </div>
        <!-- END Page Container -->

 
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>
             <!-- Page JS Helpers (Table Tools helper) -->
        <script>jQuery(function () {
                                    Codebase.helpers('table-tools');
                                });</script>
        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
        
    </body>
</html>
<?php } ?>