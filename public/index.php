<?php

require_once __DIR__ . '/data/login.php';
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/data/controllers/news-controller.php';

$controller = new NewsController($pdo);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = trim($uri, '/');

$parts = explode('/', $uri);

$route = $parts[1] ?? 'news';
$sub = $parts[2] ?? null;
$sub2 = $parts[3] ?? null;

include __DIR__ . "/components/head.php";
include __DIR__ . "/components/header.php";

switch ($route) {

    case 'news':

    // ======================
    // /news/page/1
    // ======================
    if ($sub === 'page' && $sub2 !== null) {

        $page = (int)$sub2;

        $data = $controller->list($page);

        $news = $data['news'];
        $banner = $data['banner'];
        $currentPage = $data['currentPage'];
        $totalPages = $data['totalPages'];

        include __DIR__ . "/components/main.php";
        break;
    }

    // ======================
    // /news/5 (деталка)
    // ======================
    if ($sub !== null && $sub !== 'page') {

        $id = (int)$sub;
        $data = $controller->item($id);

        if (!$data) {
            echo "<h1>Новость не найдена</h1>";
            break;
        }

        include __DIR__ . "/components/newspageinfo1.php";
        break;
    }

    // ======================
    // /news (главная)
    // ======================
    $page = 1;

    $data = $controller->list($page);

    $news = $data['news'];
    $banner = $data['banner'];
    $currentPage = $data['currentPage'];
    $totalPages = $data['totalPages'];

    include __DIR__ . "/components/main.php";

    break;

    default:
        http_response_code(404);
        echo "<h1>404 - страница не найдена</h1>";
        break;
}


include __DIR__ . "/components/footer.php";