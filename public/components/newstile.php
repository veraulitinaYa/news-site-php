<div class="news-card news-card-item-style">
    
    <span class="news-card-date">
        <?= htmlspecialchars($item['date']) ?> <!-- item подтягивается из newslist -->
    </span>

    <h3 class="news-card-title">
        <?= htmlspecialchars($item['title']) ?>
    </h3>

    <span class="news-card-announce">
        <?= htmlspecialchars($item['announce']) ?>
    </span>

</div>