<?php
$host = 'localhost';
$db   = 'Bitforum';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
  
try {
     $connect = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     echo "DB Connection failed" . $e->getMessage();
}
?>
