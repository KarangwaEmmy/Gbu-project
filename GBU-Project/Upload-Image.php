<?php
session_start();
    include_once('config/PDOClass.php');
    include_once('config/PDO.php');
if(isset($_GET['img'])){
  $image_id=$_GET['img'];
    $query = "DELETE FROM vendorimages WHERE ImageId='$image_id' ";

    $quer = $db->prepare($query);
    if ($quer->execute()) {
      unset($_GET['img']);
    }else{
      echo "Something went wrong";
    }
}
   

if (isset($_POST["upload"])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg","PNG",
        "JPG",
        "JPEG"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Un supported formats, Only JPG, PNG and JPEG are allowed."
        );
         
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    else if ($width < "300" || $height < "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $target = "Images/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            // $response = array(
            //     "type" => "success",
            //     "message" => "Image uploaded meet criterias."
            // );

         
                $serv = $_GET['sid'];

                $vid =  $_GET['vid'];
            $image = $_FILES["file-input"]["name"];
        
             

              $sq = "SELECT * from  vendorimages  WHERE VendorId='$vid' AND ServiceId='$serv'";
                            $q = $db ->prepare($sq);
                            $q->execute();
                            $results=$q->fetchAll(PDO::FETCH_OBJ);
                            $cnt=$q->rowCount();
                            if ($cnt<5) {

                               $query = DB::connect()->query("INSERT INTO vendorimages(VendorId,ServiceId,ImageName) Values ('$vid','$serv ','$image')"); 

                                ?><div class='alert alert-success'><?php echo "Image uploaded successfully, NOTE:  You have maximum of 5 images"?></div><?php
                            }else{
                               ?><div class='alert alert-danger'><?php echo "You have reached maximum number ".$cnt." of Images to upload."?></div><?php
                            }
              
                
               
        
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Urugo| Upload More Images</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
  

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">

        <div class="content-wrapper">
           <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div>
                  <!--  <button class="btn btn-info">Uploading tips</button>
                  
                  <button class="btn btn-dark">Back to Website</button> -->
                </div>
                <div class="card-body">
                   <?php 
                           
                            $serv = $_GET['sid'];

                            $vid =  $_GET['vid'];

                             $sq = "SELECT * from  vendorimages  WHERE  ServiceId='$serv'";
                            $q = $db ->prepare($sq);
                            $q->execute();
                            $results=$q->fetchAll(PDO::FETCH_OBJ);
                            $cnt=$q->rowCount();

                            
                                                ?>
                   <h4><span style="color: green"><?php echo htmlentities($cnt);?> Images</span>  <?php if(isset($message)) echo $message;?>  Uploaded for this Service </h4>  <hr>

                    <form id="frm-image-upload" action="" name='img' method="post"
                        enctype="multipart/form-data">
                        <div class="form-row">
                            <div>Choose Image file:</div>
                            <div id="image-preview">
                              </div>
                            <div>
                                <input type="file" class="file-input" name="file-input" id="image-upload">
                            </div>
                        </div>
                        <hr>
                        <div class="button-row">
                        <button class="btn btn-primary" type="submit"   name="upload" value="Upload">Upload New Image</button>
                        </div>
                    </form>
                    <hr>
                    <?php if(!empty($response)) { ?>
                    <div class="response <?php echo $response["type"]; ?>
                        ">
                        <?php echo $response["message"]; ?>
                    </div>
                    <?php }?>
                </div>
              </div>
            </div>
            <button class="btn btn-success"><a href="Add-more-service.php?vendor_id=<?=$vid ?>">Add New Service</a></button>
          </div>
                    <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="row portfolio-grid">
                 
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                           
                          <figure class="effect-text-in" style="height: 250px; width: 300px;padding:10px;">
                           
                           
                          </figure>
                        </div>
                   
                        
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <script type="text/javascript">
    
   $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false // Default: false
        });
    });
  </script>
</body>

</html>
