<!DOCTYPE html>
<html>
  <head>
    <meta charset ="urf-8 /">
    <title>お問合せフォーム</title>
    <style type="text/css">
      .input-area{
        margin-bottom: 20px;
      }
      p{
        margin-bottom: 0px;
        font-weight: bold;
      }
      textarea{
        width: 300px;
        height: 30px;
      }
    </style>
  </head>
  <body>
    <form action="confirm.php" method="post">
      <h2>お問合せフォーム</h2>
      <div class="input-area">
        <p>件名</p>
        <select name="choice" required>
          <option value="ご意見">ご意見</option>
          <option value="ご感想">ご感想</option>
          <option value="その他">その他</option>
        </select>
      </div>
      <div class="input-area">
        <p>名前</p>
        <!--「required」を指定することで入力必須項目にすることができる-->
        <input type="text" name="name" required>
      </div>
      <div class="input-area">
        <p>メールアドレス</p>
        <input type="email" name="email" required>
      </div>
      <div class="input-area">
        <p>電話番号</p>
        <input type="tel" name="tel" required>
      </div>
      <div class="input-area">
        <p>お問合せ内容</p>
        <input type="textarea" name="contact_body" required>
      </div>
      <div class="input-area">
        <p>添付画像（任意）</p>
        <!--画像ファイルを全て許可-->
        <input type="file" name="file" accept="image/*">
      </div>
      <div class="input-area">
        <button type="submit" name="submit" value="確認">確認</button>
      </div>
    </form>
  </body>
</html>