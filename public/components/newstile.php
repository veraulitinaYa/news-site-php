<div class="news-card news-card-item-style">

    <span class="news-card-date news-card-item-date-style">
        <?= htmlspecialchars($item['date']) ?>
    </span>

    <h3 class="news-card-title news-card-item-title-style">
        <?= htmlspecialchars($item['title']) ?>
    </h3>

    <span class="news-card-announce">
        <?= htmlspecialchars($item['announce']) ?>
    </span>

    <a class="news-card-details-button news-card-details-button-style"
        href="/index.php/news/page/<?= $currentPage ?>/<?= $item['id'] ?>">
        Подробнее
    </a>

</div>