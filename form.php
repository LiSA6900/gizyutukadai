<?php
$user = "env['DB_USERNAME']";
$pass = "env['DB_PASSWORD']";
$dsn = "mysql:dbname=env['DB_DATABASE'];host=env['DB_HOST'];charset=utf8";

try{
  $dbh = new PDO($dsn, $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT choice FROM choice_data";
  $stmt = $dbh->query($sql);
  // 表示処理
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row["choice"];
  }
  // 接続を閉じる
  $dbh = null;
}
catch(PDOException $e){
  echo 'DB接続エラー'.$e->getMessage();
}

include('./form.html');
?>