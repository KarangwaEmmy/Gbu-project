<?php
 // initialize the session
  session_start();
    include_once('config/PDOClass.php');
     include_once('config/PDO.php');

   if(isset($_REQUEST['submit'])) {
       $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
       $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
       $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
       $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
       $homechurch = filter_var($_POST['homechurch'], FILTER_SANITIZE_STRING);
       $sex=  filter_var($_POST['sex'], FILTER_SANITIZE_STRING);
       $cell = filter_var($_POST['cell'], FILTER_SANITIZE_STRING);
       $department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
       $baptism = filter_var($_POST['baptism'], FILTER_SANITIZE_STRING);
       $school = filter_var($_POST['school'], FILTER_SANITIZE_STRING);
       $faculty = filter_var($_POST['faculty'], FILTER_SANITIZE_STRING);
       // $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);

        // Prepare an insert statement

        $sql ="INSERT INTO `gbumember` (`firstname`, `lastname`, `email`, `phone`, `homechurch`, `cell`, `department`, `sex`, `baptism`, `school`, `faculty`) VALUES (':fname', ':lname', ':email', ':phone', ':homechurch', ':cell', ':department',':sex', ':baptism', ':school', ':faculty')";
         
        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindparam(':fname', $fname, PDO::PARAM_STR);
            $stmt->bindparam(':lname', $lname, PDO::PARAM_STR);
            $stmt->bindparam(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindparam(':email', $email, PDO::PARAM_STR);
            $stmt->bindparam(':homechurch', $homechurch, PDO::PARAM_STR);
            $stmt->bindparam(':cell', $cell, PDO::PARAM_STR);
            $stmt->bindparam(':department', $department, PDO::PARAM_STR);
            $stmt->bindparam(':sex', $sex, PDO::PARAM_STR);
            $stmt->bindparam(':baptism', $baptism, PDO::PARAM_STR);
            $stmt->bindparam(':school', $school, PDO::PARAM_STR);
            $stmt->bindparam(':faculty', $faculty, PDO::PARAM_STR);
            

            if($stmt->execute()){
             header("location: index.php");
            echo "<script>alert('Your Registration was done Successfully!')</script>";
            
        }
         
        // Close statement
        unset($stmt);
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
        <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.css">
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
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
            <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title" style="text-align: center;">GBU Nyarugenge Campus Registration Form</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <form class="js-validation-bootstrap" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">First Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="fname" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Last name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="lname" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Phone Number <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-digits" name="phone" placeholder="eg. 0783133033">
                                            </div>
                                        </div>
                                      
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Home Church <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="homechurch" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">SEX<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="val-select2" name="sex" style="width: 100%;" data-placeholder="Choose Department..">
                                                    <option></option> 
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Cell Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="val-select2" name="cell" style="width: 100%;" data-placeholder="Choose Cell..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Jehova Adonai">Jehovah Adonai</option>
                                                    <option value="Dominion">Dominion</option>
                                                    <option value="Ezra Generation">Ezra Generation</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Department Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="val-select2" name="department" style="width: 100%;" data-placeholder="Choose Department..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="php">Rhema Ministries</option>
                                                    <option value="css">Evangelism</option>
                                                    <option value="javascript">Music Department</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="example-datepicker1">Year of graduation</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="baptism" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">School eg. ICT <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"   name="school" placeholder="Enter a school.." required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Faculty(Department) <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"   name="faculty" placeholder="Enter a faculy.." required="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
            </main>
            <!-- END Main Container -->
 
        </div>
        <!-- END Page Container -->

 
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

         <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.js"></script>

        <!-- Page JS Helpers (Select2 plugin) -->
        <script>jQuery(function(){ Codebase.helpers('select2'); });</script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_forms_validation.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 <script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
    </body>
</html>