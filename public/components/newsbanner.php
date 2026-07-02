<div class="news-card-banner">
  <img
    src="/images/<?= htmlspecialchars($banner['image'] ?? 'default.jpg') ?>"
    class="news-card-banner-image"
    alt="News image" />
  <div class="news-card-banner-text">
    <h1 class="news-card-banner-title">
      <?= htmlspecialchars($banner['title'] ?? '') ?>
    </h1>
    <span
      class="news-card-banner-announce">
      <?= $banner['announce'] ?></span>
  </div>
</div>