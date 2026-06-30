<?php

require_once __DIR__ . '/login.php';

try {
    $pdo = new PDO(
        $attributes,
        $user,
        $password,
        $options
        
    );
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}