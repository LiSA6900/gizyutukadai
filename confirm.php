<?php
//直リンクされた場合index.htmlにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: form.html");
	exit();
}

//各項目を内容を取得
$choice = $_POST['choice'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$upload_file = $_FILES['upload_file'];
?>

<!--PHPでhtmlファイルをincludeして読み込む-->
<?php include('./confirm.html'); ?>
