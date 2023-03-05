<?php
$str = mb_convert_encoding($str, "UTF-8", "JIS, eucjp-win, sjis-win");

//直リンクされた場合form.htmlにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
  header("Location: form.html");
  exit();
}

//画像を保存
// move_uploaded_file($_FILES['image']['tmp_name'], './upload/' . $img_name);

// フォームのボタンが押されたら
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // フォームから送信されたデータを各変数に格納
  $choice = $_POST["choice"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $message = $_POST["message"];
  // アップロードファイル名を取得
  //$image = '';
  //  if ($_FILES['image']['name']) {
  //    $image = htmlspecialchars($_FILES['image']['name'], ENT_QUOTES, 'UTF-8');
  //  }
}

?>

<!--PHPでhtmlファイルをincludeして読み込む-->
<?php include('./confirm.html'); ?>