<?php
//直リンクされた場合upload.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: form.html");
	exit();
}

// POSTデータの下ごしらえ
foreach($_POST as $k => $v) {
	$$k = htmlspecialchars($v);
}

// アップロードファイル名を取得
$upload_file = '';
if ($_FILES['upload_file']['name']) {
	$upload_file = htmlspecialchars($_FILES['upload_file']['name'], ENT_QUOTES, 'UTF-8');
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// ユーザー向けのメール内容の準備
$body = "--__BOUNDARY__\n";
$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$body .= <<<EOT
 
お問い合わせをいただき、ありがとうございました。
折り返し担当者から返信が行きますので、しばらくお待ちください。
以下の内容でお問い合わせをお受けいたしました。
 
< お問い合わせ内容 >

■件名
{$choice}
 
■お名前
{$name}
 
■メールアドレス
{$email}

■電話番号
{$tel}
 
■お問い合わせ内容
{$message}
 
■添付ファイル
{$upload_file}
 
 
EOT;
	
$body .= "--__BOUNDARY__\n";
$body .= "Content-Type: application/octet-stream; name=\"{$upload_file}\"\n";
$body .= "Content-Disposition: attachment; filename=\"{$upload_file}\"\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "\n";
$body .= chunk_split(base64_encode(file_get_contents($_FILES['upload_file']['tmp_name'])));
$body .= "--__BOUNDARY__\n";
 
 
$from_mail = "sample@test.com"; // 送信元メールアドレス
$subject = "お問い合わせありがとうございます";
 
$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
$header .= "Return-Path: " . $from_mail . " \n";
$header .= "From: " . mb_encode_mimeheader($from_encoded) . "<" . $from_mail . ">\n";
$header .= "Reply-To: ".$from_mail."\n";
 
// メール送信
$success_1 = mb_send_mail($email, $subject, $body, $header);
?>

<!--PHPでhtmlファイルをincludeして読み込む-->
<?php include('./complete.html'); ?>
