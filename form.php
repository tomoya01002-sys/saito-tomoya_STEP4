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
      <label for="name">名前:</label>
      <input type="text" name="name" id="name" required>

      <label for="age">年齢:</label>
      <!-- number + 5歳以上に統一 -->
      <input type="number" name="age" id="age" min="5" max="150" required>

      <label for="phone">電話番号:</label>
      <input type="text" name="phone" id="phone" placeholder="090-1234-5678" required>

      <label for="email">メールアドレス:</label>
      <input type="email" name="email" id="email" placeholder="sample@gmail.com" required>

      <label for="address">住所:</label>
      <input type="text" name="address" id="address" required>

      <label for="question">質問:</label>
      <input type="text" name="question" id="question">

      <label for="gender">性別:</label>
      <select name="gender" id="gender" required>
        <option value="">選択してください</option>
        <option value="男性">男性</option>
        <option value="女性">女性</option>
      </select>

      <button type="submit">送信</button>
    </form>
  </div>
</body>
</html>
