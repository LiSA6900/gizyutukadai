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
    </style>
  </head>
  <body>
    <form action="confirm.php" method="post">
      <h2>お問合せフォーム</h2>
      <div class="input-area">
        <p>件名</p>
        <select name="choice">
          <option value="ご意見">ご意見</option>
          <option value="ご感想">ご感想</option>
          <option value="その他">その他</option>
        </select>
      </div>
      <div class="input-area">
        <p>名前</p>
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
        <input type="text-area" name="email" required>
      </div>
      <div class="input-area">
        <p>添付画像（任意）</p>
        <input type="file" name="test" required>
      </div>
      <div class="input-area">
        <button type="submit" name="submit" value="送信">送信</button>
      </div>
    </form>
  </body>
</html>