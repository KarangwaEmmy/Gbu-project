    <?php 
    include_once('../config/PDOClass.php');
       
      $sql = "SELECT SUM(amount) FROM `expenses`";
      $query = $db->prepare($sql);
      $query->execute();
      $result=$query->fetchAll(PDO::FETCH_OBJ);
       
       echo "Total:".$result;
       ?>