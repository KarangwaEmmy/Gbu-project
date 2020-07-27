<?php
    include_once('../config/PDOClass.php');
   

    if (isset($_REQUEST['submit'])) {
        // declare the inputs from the form

        $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
        $expense = filter_var($_POST['expense'], FILTER_SANITIZE_STRING);
        $amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
        $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        $academic = filter_var($_POST['academic'], FILTER_SANITIZE_STRING);

        // Query to insert into the database

        $submitter = "Treasure";

        $sql = $db->prepare("INSERT INTO `expenses` (`academic`,`date`,`submitter`, `name`, `details`, `amount`) VALUES ('$academic','$date','$submitter', '$expense', '$amount', '$comment')");

        $sql->execute(array(':date'=>$date, ':expense'=>$expense,':comment'=>$comment, ':amount'=>$amount));
        if ($sql) {
              echo "<script>alert( 'Expense was created  Successfully!')</script>";
        }else{
              echo "<script>alert( 'Error in creating  Expense!')</script>";
        }
        $date = "";
        unset($sql);
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
        <link rel="stylesheet" href="../assets/js/plugins/select2/css/select2.css">
        <link rel="stylesheet" href="../assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
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
            <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title" style="text-align: center;">GBU Exepense Form</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <form  action="" method="post">
                                    <?php
                                    include_once('../config/PDOClass.php');
                                    $sql = "SELECT * FROM `academic-year`";
                                    $query = $db->prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);

                                    if($query->rowCount() > 0)
                                        {
                                        foreach($results as $result)
                                        {               
                                                ?> 
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Academic Year <span class="text-danger">*</span></label>
                             
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="academic"  value="<?php echo htmlentities($result->year);?>" readonly>
                                            </div>
                                        </div>
                                         <?php }}?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="example-datepicker1"> Spend  Date</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val- ">Exepense   <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val" name="expense" placeholder="Enter a Expense.." required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-digits" name="amount" placeholder="eg. 7900 Rfw" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                               <textarea class="text-primary" cols="67" name="comment" required=""></textarea>
                                            </div>
                                        </div>
                                       
                                        
                                      <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check mr-5"></i> Submit Expense
                                        </button>
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

 
        <script src="../assets/js/codebase.core.min.js"></script>

         
        <script src="../assets/js/codebase.app.min.js"></script>

       
        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

         <script src="../assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../assets/js/plugins/jquery-validation/additional-methods.js"></script>

        

        <!-- Page JS Code -->
        <script src="../assets/js/pages/be_forms_validation.min.js"></script>
        <script src="../assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 <script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
    </body>
</html>
 