<?php
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$question = $_POST['question'] ?? '';
$gender = $_POST['gender'] ?? '';

$errors = [];

// バリデーション
if (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u', $name)) {
  $errors[] = '名前の形式が不正です';
}

if (!is_numeric($age) || $age < 5 || $age > 150) {
  $errors[] = '年齢は5〜150で入力してください';
}

if (!preg_match('/^[0-9-]+$/', $phone)) {
  $errors[] = '電話番号の形式が不正です';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'メールアドレスの形式が不正です';
}

if (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z0-9\-\s]+$/u', $address)) {
  $errors[] = '住所の形式が不正です';
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>入力内容確認</h1>

      <?php if (!empty($errors)): ?>
        <ul class="error">
          <?php foreach ($errors as $e): ?>
            <li><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p>名前: <?= htmlspecialchars($name) ?></p>
        <p>年齢: <?= htmlspecialchars($age) ?></p>
        <p>電話番号: <?= htmlspecialchars($phone) ?></p>
        <p>メールアドレス: <?= htmlspecialchars($email) ?></p>
        <p>住所: <?= htmlspecialchars($address) ?></p>
        <p>質問: <?= htmlspecialchars($question) ?></p>
        <p>性別: <?= htmlspecialchars($gender) ?></p>
      <?php endif; ?>
    </div>
  </body>
</html>