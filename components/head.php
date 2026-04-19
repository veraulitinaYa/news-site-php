<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новости</title>

  <?php if (!empty($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" href="<?= $style ?>">
    <?php endforeach; ?>
  <?php endif; ?>

</head>
<body>