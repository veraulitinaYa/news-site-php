<?php

require_once __DIR__ . '/data/login.php';
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/data/controllers/news-controller.php';

$controller = new NewsController($pdo);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$data = $controller->list($page);

$news = $data['news'];
$banner = $data['banner'];

include __DIR__ . "/components/head.php";
include __DIR__ . "/components/header.php";
include __DIR__ . "/components/main.php";
include __DIR__ . "/components/footer.php";