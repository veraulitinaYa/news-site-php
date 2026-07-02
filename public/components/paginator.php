<?php if ($totalPages > 1): ?>
<div class="paginator">

    <?php if ($currentPage > 1): ?>
        <a class="button"
           href="/index.php/news/page/<?= $currentPage - 1 ?>">
            ←
        </a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a class="button <?= $i === $currentPage ? 'active' : '' ?>"
           href="/index.php/news/page/<?= $i ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <a class="button"
           href="/index.php/news/page/<?= $currentPage + 1 ?>">
            →
        </a>
    <?php endif; ?>

</div>
<?php endif; ?>