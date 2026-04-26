<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новости</title>
<?php
$styles = [
  "/styles/variables.css",
  "/styles/globals.css",
  "/styles/footer-style.css",
  "/styles/header-style.css",
  "/styles/banner-style.css",
    "/styles/newslist-style.css",
  "/styles/newstile-style.css",
  "/styles/newsinfo-style.css",
  "/styles/style-general.css"

];
?>
  <?php if (!empty($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" href="<?= $style ?>">
    <?php endforeach; ?>
  <?php endif; ?>

</head>
<body>