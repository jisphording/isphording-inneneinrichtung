<?php snippet('header') ?>

<main>
  <header class="intro">
  </header>

  <?php foreach( $page -> images() as $file ): ?>
    <img src="<?= $file -> url() ?>">
  <?php endforeach ?>
  
</main>

<?php snippet('footer') ?>
