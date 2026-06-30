<?php

require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/data/services/news-service.php';
require_once __DIR__ . '/data/models/news-model.php';

$service = new NewsService($pdo);
$model = new NewsModel($service);

echo "<pre>";

print_r($model->getNewsPage(4, 4));

echo "</pre>";