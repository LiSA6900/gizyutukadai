<?php

$str = mb_convert_encoding($str, "UTF-8", "JIS, eucjp-win, sjis-win");

//直リンクされた場合form.htmlにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
  header("Location: form.html");
  exit();
}

//画像を保存
move_uploaded_file($_FILES['image']['tmp_name'], './upload/' . $image);

// フォームのボタンが押されたら
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // フォームから送信されたデータを各変数に格納
  $choice = $_POST["choice"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $message = $_POST["message"];
  $img_name = $_FILES['image']['name'];
}

include('./confirm.html');

?>