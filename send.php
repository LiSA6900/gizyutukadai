<?php
// 送信ボタンが押されたら
if (isset($_POST["submit"])) {
// 送信ボタンが押された時に動作する処理をここに記述する
      
// 日本語をメールで送る場合のおまじない
mb_language("Ja");
mb_internal_encoding("UTF-8");
  
//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";

// メール本文を変数bodyに格納
$body = <<<EOM
{$name} 様

お問い合わせありがとうございます。
以下のお問い合わせ内容をメールにて確認させていただきました。

===================================================
【 件名 】 
{$choice}

【 お名前 】 
{$name}

【 メールアドレス 】 
{$email}

【 電話番号 】 
{$tel}

【 お問合せ内容 】 
{$message}

【 添付画像 】 

===================================================

内容を確認の上、回答させていただきます。
しばらくお待ちください。
EOM;

//送信元
$headers = "From: example@test.com";
//メール送信
mb_send_mail($to, $subject, $body, $headers); 

// サンクスページに画面遷移させる
header("Location: complete.html");
exit();
}

?>