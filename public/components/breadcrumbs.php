<div class="breadcrumbs breadcrumbs-style">

    <a class="breadcrumbs-previous-page"
       href="/index.php/news/page/<?= $backPage ?? 1 ?>">
        Главная
    </a>

    <span> / </span>

    <span class="breadcrumbs-current-news">
        <?= htmlspecialchars($item['title']) ?>
    </span>

</div>