<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>

  <?php foreach( $page -> images() as $file ): ?>
    <img src="<?= $file -> url() ?>">
  <?php endforeach ?>
  
</main>

<?php snippet('footer') ?>
