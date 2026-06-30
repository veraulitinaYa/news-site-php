
 
 <div class="news_list news-list-style">
      <h1 class="news_list_title news-list-title-style">Новости</h1>
      <div class = "news-cards-container-style">
 <?php foreach ($news as $item): ?> <!-- //news подтягивается из index -->
            <?php include __DIR__ . "/newstile.php"; ?>
        <?php endforeach; ?>


 </div>
 </div>