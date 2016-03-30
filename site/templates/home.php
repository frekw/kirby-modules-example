<?php snippet('header') ?>

  <main class="main" role="main">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->body()->kirbytext() ?>
    <?php echo $page->modules()->modules() ?>

    <hr>
  </main>

<?php snippet('footer') ?>