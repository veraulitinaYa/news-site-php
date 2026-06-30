<?php

class NewsModel
{
    private NewsService $service;

    public function __construct(NewsService $service)
    {
        if (!$service) {
            throw new Exception("NewsModel: NewsService not provided");
        }

        $this->service = $service;
    }

    public function getAllNews(): array
    {
        return $this->service->fetchAllNews();
    }

    public function getAllNewsSorted(): array
    {
        $news = $this->service->fetchAllNews();

        usort($news, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $news;
    }

    public function getNewsItemById(int $id): array
    {
        $news = $this->service->fetchNewsItemById($id);

        if (!$news) {
            throw new Exception("News not found");
        }

        return $news;
    }

    public function getLatestNewsItem(): array
    {
        $sorted = $this->getAllNewsSorted();

        if (empty($sorted)) {
            return [];
        }

        return $sorted[0];
    }

    public function getNewsPaginated(int $perPage): array
    {
        $sorted = $this->getAllNewsSorted();

        return array_chunk($sorted, $perPage);
    }

    public function getNewsPage(int $page, int $perPage): array
{
    $pages = $this->getNewsPaginated($perPage);

    if (empty($pages)) {
        return [];
    }

    $page = max(1, min($page, count($pages)));

    return $pages[$page - 1];
}
}