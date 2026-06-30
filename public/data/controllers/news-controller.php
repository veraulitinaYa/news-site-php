<?php

require_once __DIR__ . '/../services/news-service.php';
require_once __DIR__ . '/../models/news-model.php';

class NewsController
{
    private NewsModel $model;

    public function __construct(PDO $pdo)
    {
        $service = new NewsService($pdo);
        $this->model = new NewsModel($service);
    }

    public function list(int $page = 1): void
    {
        $perPage = 4;

        $pages = $this->model->getNewsPaginated($perPage);

        $news = $pages[$page - 1] ?? [];

        $banner = $this->model->getLatestNewsItem();

        include __DIR__ . '/../../components/newslist.php';
    }

    public function item(int $id): void
    {
        $news = $this->model->getNewsItemById($id);

        include __DIR__ . '/../../components/newstile.php';
    }
}