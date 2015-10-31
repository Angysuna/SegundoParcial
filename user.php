<?php
require "database.php";

Class User{

  public static function create($Username, $Contrasena) {
    $sql = 'INSERT INTO News (Username, Contrasena) VALUES (:Username,:Contrasena)';
    try {
      $db = Database::connect();
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':Username', $Username);
      $stmt->bindParam(':Contrasena', $Contrasena);
      $stmt->execute();
      Database::disconnect();
      echo "<script>alert(':D'); location.href='index.php'</script>";
      return true;
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      return false;
    }
  }
}

?>