<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>フォーム入力</h1>

      <form action="confirm.php" method="post">
        <label>名前:</label>
        <input type="text" name="name" id="name">

        <label>年齢:</label>
        <input type="text" name="age" id="age">

        <label>電話番号:</label>
        <input type="text" name="phone" id="phone">

        <label>メールアドレス:</label>
        <input type="text" name="email" id="email">

        <label>住所:</label>
        <input type="text" name="address" id="address">

        <label>質問:</label>
        <input type="text" name="question" id="question">

        <label>性別:</label>
        <select name="gender" id="gender">
          <option value="男性">男性</option>
          <option value="女性">女性</option>
        </select>

        <button type="submit">送信</button>
      </form>
    </div>
  </body>
</html>