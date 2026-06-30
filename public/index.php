
<!-- <?php include __DIR__ . "/components/head.php"; ?>
<?php include __DIR__ . "/components/header.php"; ?>
<?php include __DIR__  . "/components/main.php"; ?>
<?php

include __DIR__ . "/components/footer.php";
?> -->

<?php

require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/data/controllers/news-controller.php';

$controller = new NewsController($pdo);

$route = $_GET['route'] ?? 'news/list';

$parts = explode('/', $route);

$action = $parts[1] ?? 'list';
$id = $parts[2] ?? null;

if ($action === 'list') {
    $page = $_GET['page'] ?? 1;
    $controller->list((int)$page);
}

if ($action === 'item') {
    $controller->item((int)$id);
}