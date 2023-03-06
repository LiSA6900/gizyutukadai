<?php
$dsn = 'mysql:host=localhost;dbname=testdb';
$username = 'root';
$password = 'asdfasdf01';
$driver_options = [
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $driver_options);

try {
  $dbh = new PDO($dsn, $username, $password,
  array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
  if ($dbh == null) {
    print_r('接続失敗').PHP_EOL; 
  } else {  
    print_r('接続成功').PHP_EOL;
  }
} catch(PDOException $e) {
  echo('Connection failed:'.$e->getMessage());
  die();
}
$sql = 'SHOW TABLES';
$stmt = $dbh->query($sql);
while ($result = $stmt->fetch(PDO::FETCH_NUM)){
  $choices[] = $result[0];
}

include('./form.html');
?>