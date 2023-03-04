<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.html");
	exit();
}

//各項目を内容を取得
$choice = $_POST['choice'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$contact_body = $_POST['contact_body'];
$file = $_POST['file'];
?>

<!--PHPでhtmlファイルをincludeして読み込む-->
<?php include('./confirm.html'); ?>
