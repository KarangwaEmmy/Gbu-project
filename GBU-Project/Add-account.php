<?php


    session_start();
    include_once('config/PDOClass.php');
     include_once('config/PDO.php');
    

    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }
    if (isset($_POST['submit'])) {

        $name = $email = $phone = $sex = $password = "";
        $nameErr = $emailErr = $phoneErr = $categoryErr = $passwordErr = $confpwdErr="";
        
        $name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_REQUEST['phone'], FILTER_SANITIZE_STRING);
        $sex = filter_var($_REQUEST['sex'], FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $confpassword = password_hash($_POST['confpassword'], PASSWORD_DEFAULT);

         include_once('config/Validation.php');
             
        
         //     // Check input errors before inserting in database
    if(empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($passwordErr)){
        
        // Prepare an insert statement
        $sql1 = "INSERT INTO accounts (`username`, `email`, `phone`, `type`, `password`) VALUES (:name, :email,:phone,:sex,:password)";
         
        if($stmt = $db->prepare($sql1)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindparam(':name', $name, PDO::PARAM_STR);
            $stmt->bindparam(':email', $email, PDO::PARAM_STR);
            $stmt->bindparam(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindparam(':sex', $sex, PDO::PARAM_STR);
            $stmt->bindparam(':password', $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement

            if($stmt->execute()){
             header("location: index.php");
            echo "<script>alert('Your Registration was done Successfully!')</script>";
        }
         
        // Close statement
        unset($stmt);
    }
       
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
        <style type="text/css">
            .help-block{
                color: red;
            }
        </style>
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
                                <a class="link-effect font-w700" href="">
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
                            <a class="link-effect font-w700 mr-5" href="">
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
                                <a class="active" href=" "><i class="si"></i>Gbu Membership Form</a>
                            </li>
                  
                            <li>
                                <a href="dashboard.php"><i class="si si-home"></i>Home</a>
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
                        <form action="bd_search.html" method="post">
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
                <div class="bg-gd- ">
                    <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                        <!-- Header -->
                        <div class="py-30 px-5 text-center">
                           
                            <h1 class="h2 font-w700 mt-50 mb-10">Create New Account</h1>
                            <h2 class="h4 font-w400 text-muted mb-0">Please add your details, to add new treasurer or secretary</h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <div class="row justify-content-center px-5">
                            <div class="col-sm-8 col-md-6 col-xl-4">
                                <form class="js-validation-signup" action=" " method="post">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input id="name" name="name" type="text" value="<?php echo $name;?>"   class="form-control input-md"  >
                                                <label for="signup-username">Username</label>
                                                 <span class="help-block"><?php echo $nameErr;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input id="email" name="email" type="email" value="<?php echo $email;?>"   class="form-control input-md" id="email" onBlur="checkAvailability()" autocomplete="off" >
                                                <label for="signup-email">Email</label>
                                                <span class="help-block"><?php echo $emailErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                               <input id="phone" name="phone" type="text"   class="form-control input-md" value="<?php echo $phone; ?>" id="phone">
                                                <label for="signup-email">Phone Number</label>
                                                 <span class="help-block"><?php echo $phoneErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="signup-category">Category</label>
                                                <div class="col-md-6">
                                            <label class="control-label" for="sex">Category</label>
                                            <select id="sex" name="sex" class="form-control" required="">
                                                <option value="<?php echo $sex; ?>"> </option>
                                                <option value="Admin">Admin</option>
                                             <option value="secretary">secretary</option>
                                              <option value="Treasurer">treasurer</option>
                                                               
                                            </select>
                                        </div>
                                        </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                 
                                                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" >
                                                <label for="signup-password">Password</label>
                                                <span class="help-block"><?php echo $passwordErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input id="password" name="confpassword" type="password" placeholder=" " class="form-control input-md" >
                                
                                                <label for="signup-password-confirm">Password Confirmation</label>
                                                <span class="help-block"><?php echo $confpwdErr; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                   <br>
                                    <div class="form-group row gutters-tiny">
                                        <div class="col-12 mb-10">
                                            <button type="submit" name="submit" class="btn btn-block btn-hero btn-border btn-rounded btn-alt-success">
                                                <i class="si si-user-follow mr-10"></i> Create New Account
                                            </button>
                                        </div>
                                      
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
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

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
        <script rsc="assets/js/pages/op_auth_signup.js"></script>
   
    </body>
</html>
 