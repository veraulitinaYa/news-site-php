<?php

require_once __DIR__ . '/../components/db.php';

$stmt = $pdo->query("SELECT * FROM news");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($data);
echo "</pre>";