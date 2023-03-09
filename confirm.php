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
  $choice = htmlspecialchars($_POST["choice"],ENT_QUOTES | ENT_HTML5);
  $name = htmlspecialchars($_POST["name"],ENT_QUOTES | ENT_HTML5);
  $email = htmlspecialchars($_POST["email"],ENT_QUOTES | ENT_HTML5);
  $tel = htmlspecialchars($_POST["tel"],ENT_QUOTES | ENT_HTML5);
  $message = htmlspecialchars($_POST["message"],ENT_QUOTES | ENT_HTML5);
  $img_name = htmlspecialchars($_FILES['image']['name'],ENT_QUOTES | ENT_HTML5);
}

include('./confirm.html');

?>