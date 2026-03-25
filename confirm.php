<?php
// 名前チェック（未入力＋形式）
if ($name === '') {
  $errors[] = '名前を入力してください';
} elseif (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u', $name)) {
  $errors[] = '名前は日本語または英字で入力してください';
}

// 年齢チェック（5〜150）
if ($age === '') {
  $errors[] = '年齢を入力してください';
} elseif (!is_numeric($age)) {
  $errors[] = '年齢は数字で入力してください';
} elseif ($age < 5 || $age > 150) {
  $errors[] = '年齢は5〜150の範囲で入力してください';
}

// 電話番号チェック（実用的フォーマット）
if ($phone === '') {
  $errors[] = '電話番号を入力してください';
} elseif (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $phone)) {
  $errors[] = '電話番号は「090-1234-5678」の形式で入力してください';
}

// メールチェック
if ($email === '') {
  $errors[] = 'メールアドレスを入力してください';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = '正しいメールアドレス形式で入力してください（例: sample@gmail.com）';
}

// 住所チェック
if ($address === '') {
  $errors[] = '住所を入力してください';
} elseif (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z0-9\-\s]+$/u', $address)) {
  $errors[] = '住所は日本語・英数字で入力してください';
}

// 性別チェック
if ($gender === '') {
  $errors[] = '性別を選択してください';
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
      <p>名前: <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></p>
      <p>年齢: <?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></p>
      <p>電話番号: <?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?></p>
      <p>メールアドレス: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
      <p>住所: <?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8') ?></p>
      <p>質問: <?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?></p>
      <p>性別: <?= htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
