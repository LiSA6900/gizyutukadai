<?php
$dsn = 'mysql:host=ip-10-7-1-206;dbname=testdb;charset=utf8';
$user = 'root';
$pass = 'asdfasdf01';

try{
  $dbh = new PDO($dsn,$user,$pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
  $sql = 'SELECT choice FROM choice_data';
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchall(PDO::FETCH_ASSOC);
  $dbh = null;
} catch(PDOException $e) {
  echo '接続失敗'. $e->getMessage();
  exit();
};
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset ="urf-8 /">
    <title>お問合せフォーム</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <form action="confirm.php" method="post" enctype="multipart/form-data">
      <h2>お問合せフォーム</h2>
      <div class="input-area">
        <p class="item">件名<span>※</span></p>
        <select name="choice" required>
          <?php foreach($result as $colum)
            echo $column['choice'];
          ?>
        </select>
      </div>
      <div class="input-area">
        <p class="item">名前<span>※</span></p>
        <!--「required」を指定することで入力必須項目にすることができる-->
        <input type="text" name="name" required>
      </div>
      <div class="input-area">
        <p class="item">メールアドレス<span>※</span></p>
        <input type="email" name="email" required>
      </div>
      <div class="input-area">
        <p class="item">電話番号<span>※</span></p>
        <input type="tel" name="tel" pattern="^[0-9]+$" required>
      </div>
      <div class="input-area">
        <p class="item">お問合せ内容<span>※</span></p>
        <textarea cols="34" rows="6" name="message" required></textarea>
      </div>
      <div class="input-area">
        <p class="item">添付画像（任意）</p>
        <!--画像ファイルを全て許可-->
        <input type="file" name="image">
      </div>
      <div class="input-area">
        <button type="submit">確認</button>
      </div>
    </form>
  </body>
</html>