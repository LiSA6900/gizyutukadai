<?php
$user = "root";
$pass = "asdfasdf01";
$dsn = "mysql:dbname=testdb;host=localhost;charset=utf8";

try{
  $dbh = new PDO($dsn, $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT choice FROM `choice_data`";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  $dbh = null;
}      
catch(PDOException $e){
  echo 'DB接続エラー'.$e->getMessage();
}

include('./form.html');
?>