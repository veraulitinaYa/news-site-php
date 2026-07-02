<div class="news-card news-card-banner-style">
  <img
    src="/images/<?= htmlspecialchars($banner['image'] ?? 'default.jpg') ?>"
    class="news-card-image news-card-banner-image-style"
    alt="News image" />
  <div class="news-card-banner-text-style">
    <h1 class="news-card-title news-card-banner-title-style">
      <?= htmlspecialchars($banner['title'] ?? '') ?>
    </h1>
    <span
      class="news-card-announce news-card-banner-announce-style">
      <?= $banner['announce'] ?></span>
  </div>
</div>