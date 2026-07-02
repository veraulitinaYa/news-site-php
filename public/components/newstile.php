<div class="news-tile-item">

    <span class="news-card-item-date">
        <?= htmlspecialchars($item['date']) ?>
    </span>

    <h3 class="news-card-item-title">
        <?= htmlspecialchars($item['title']) ?>
    </h3>

    <span class="news-card-announce">
        <?= $item['announce'] ?>
    </span>

    <a class="news-card-details-button button"
        href="/index.php/news/page/<?= $currentPage ?>/<?= $item['id'] ?>">
        Подробнее
    </a>

</div>