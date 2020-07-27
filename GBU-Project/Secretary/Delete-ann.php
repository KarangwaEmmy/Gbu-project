<?php
include_once('../config/PDOClass.php');

$getid = $_GET['member'];
$sql = $db->prepare("DELETE FROM `announcement` WHERE  id='$getid'");
$sql->execute();
if ($sql ->rowCount() >0) {
    // Mesage after updation
        echo "<script>alert('Record   was deleted successfully');</script>";
        // Code for redirection
        echo "<script>window.location.href='GBU-announcement.php'</script>"; 
           
}else{
    // Mesage after updation
        echo "<script>alert('Error Occured');</script>";
        // Code for redirection
        echo "<script>window.location.href='GBU-announcement.php'</script>"; 
           
}
     

?>