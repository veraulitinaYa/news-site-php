<main class="main-style">
    <?php
    require_once __DIR__ . '/../data/controllers/news-controller.php';

    $controller = new NewsController($pdo);

    $page = $_GET['page'] ?? 1;

    $controller->list((int)$page);
    ?>
</main>