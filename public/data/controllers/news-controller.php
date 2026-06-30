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

    public function list(int $page = 1): array
    {
        $perPage = 4;

        $pages = $this->model->getNewsPaginated($perPage);

        $news = $pages[$page - 1] ?? [];

        $banner = $this->model->getLatestNewsItem();

        return [
            'news' => $news,
            'banner' => $banner
        ];
    }

    public function item(int $id): array
    {
          return $this->model->getNewsItemById($id);
    }
}