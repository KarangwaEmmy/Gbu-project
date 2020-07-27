<?php
 include('config/PDOClass.php');
 $query = $db->query("SELECT * FROM accounts")->count();
 print_r($query);
?>