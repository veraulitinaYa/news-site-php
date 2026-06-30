<?php

class NewsService
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        if (!$pdo) {
            throw new Exception("PDO не передан в NewsService");
        }

        $this->pdo = $pdo;
    }

    public function fetchAllNews(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM news");

        if (!$stmt) {
            throw new Exception("Ошибка запроса news");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchNewsItemById(int $id): ?array
{
    $stmt = $this->pdo->prepare("SELECT * FROM news WHERE id = :id");
    $stmt->execute(['id' => $id]);

    return $stmt->fetch() ?: null;
}


}