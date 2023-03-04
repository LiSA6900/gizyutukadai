<!DOCTYPE html>
<html>
  <head>
    <meta charset ="urf-8 /">
    <title>確認画面</title>
    <style type="text/css">
      .input-area{
        margin-bottom: 20px;
      }
      p{
        margin-bottom: 0px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <form action="complete.php" method="post">
      <h2>確認画面</h2>
      <div class="input-area">
        <p>件名</p>
        <?php echo $choice; ?>
      </div>
      <div class="input-area">
        <p>名前</p>
        <?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8'); ?>
      </div>
      <div class="input-area">
        <p>メールアドレス</p>
        <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8'); ?>
      </div>
      <div class="input-area">
        <p>電話番号</p>
        <?php echo $tel; ?>
      </div>
      <div class="input-area">
        <p>お問合せ内容</p>
        <?php echo $contact_body; ?>
      </div>
      <div class="input-area">
        <p>添付画像（任意）</p>
        <?php echo $file; ?>
      </div>
      <div class="input-area">
        <div class="input-area">
 		  <input type='button' onclick='history.back()' value='修正' class="btn-border">
 		  <input type="submit" name="submit" value="送信" class="btn-border">
 		  <input type="hidden" name="name" value="<?php echo $name;?>">
 		  <input type="hidden" name="email" value="<?php echo $email;?>">
 		  <input type="hidden" name="sex" value="<?php echo $sex;?>">
 		  <input type="hidden" name="pref" value="<?php echo $pref;?>">
 		  <input type="hidden" name="reason" value="<?php echo $reason;?>">
 		  <input type="hidden" name="contact_body" value="<?php echo $contact_body;?>">
	 	</div>
      </div>
    </form>
  </body>
</html>