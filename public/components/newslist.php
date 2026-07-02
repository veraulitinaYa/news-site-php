<div class="news-list">
     <h1 class="news-list-title">Новости</h1>

     <div class="news-cards-container">

          <?php foreach ($news as $item): ?>
               <?php include __DIR__ . "/newstile.php"; ?>
          <?php endforeach; ?>

     </div>
</div>