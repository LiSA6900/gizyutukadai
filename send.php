<?php
// 送信ボタンが押されたら
if (isset($_POST["submit"])) {
// 送信ボタンが押された時に動作する処理をここに記述する
      
// 日本語をメールで送る場合のおまじない
mb_language("Ja");
mb_internal_encoding("UTF-8");

// ヘッダー情報を設定
$header = "MIME-Version: 1.0\n";
$header .= "From: TEST <test@test.com>\n";
$header .= "Reply-To: TEST <test@test.com>\n";
//送信先アドレス
$to = $email;
//メール件名
$auto_reply_subject = "お問い合わせ完了のお知らせ";
// メール本文を変数bodyに格納
$auto_reply_body = <<<EOM

以下の内容でお問い合わせを受け付けいたしましたので
ご確認ください。
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
{$image}

===================================================

内容を確認の上、回答させていただきます。
しばらくお待ちください。
EOM;

//メール送信
mb_send_mail($to, $auto_reply_subject, $auto_reply_body, $headers); 


//送信先アドレス
$admin_to = 'test@test.com';
//メール件名
$admin_reply_subject = "お問い合わせのお知らせ";
// メール本文を変数bodyに格納
$admin_reply_body = <<<EOM

以下の内容でお問い合わせを受け付けいたしましたので
ご確認ください。
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
{$image}


===================================================

EOM;

//メール送信
mb_send_mail($admin_to, $admin_reply_subject, $admin_reply_body, $headers); 


// サンクスページに画面遷移させる
header("Location: complete.html");
exit();
}

?>