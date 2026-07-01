<?php if ($totalPages > 1): ?>
    <div class="paginator">

        <?php if ($currentPage > 1): ?>
            <a class="paginator-btn"
                href="/index.php/news/page/<?= $currentPage - 1 ?>">
                arrow
            </a>
        <?php endif; ?>


        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a class="paginator-btn <?= $i === $currentPage ? 'active' : '' ?>"
                href="/index.php/news/page/<?= $i ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>


        <?php if ($currentPage < $totalPages): ?>
            <a class="paginator-btn"
                href="/index.php/news/page/<?= $currentPage + 1 ?>">
                arrow
            </a>
        <?php endif; ?>

    </div>
<?php endif; ?>