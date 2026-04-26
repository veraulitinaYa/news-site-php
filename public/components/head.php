<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новости</title>
<?php
$styles = [
  "/styles/globals.css",
  "/styles/footer-style.css",
  "/styles/header-style.css",
  "/styles/banner-style.css",
  "/styles/newstile-style.css",
  "/styles/newslist-style.css"
];
?>
  <?php if (!empty($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" href="<?= $style ?>">
    <?php endforeach; ?>
  <?php endif; ?>

</head>
<body>