<?php snippet('header') ?>

<main>
  <?php snippet('intro-amp') ?>

  <?php snippet('introMood') ?>

  <section class="mood__claim">
    <?= $page -> Claim() -> kirbytext() ?>
  </section>

  <section class="projects">
    <ul>
      <?php foreach(page('projects')->children()->published()->limit(4) as $project): ?>
      <li>
        <div class="grid__container">
          <!-- Since at the moment kirby serves allfiletypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
          <?php foreach( $project -> images() as $file ): ?>
              
              <?php $extension = $file->extension();
              $file_webp = NULL;

              if ($extension == 'webp') {
                $file_webp = $file -> url(); ?>
                <figure class="grid__item">
                <img class="grid__image" src="<?php echo $file_webp ?>" alt="<?= $project->title() ?>">

                <figcaption>
                  <span class="title"><p><?= $file->title() ?></p></span>
                  <span class="caption"><p><?= $file->caption() ?></p></span>
                </figcaption>
              </figure>
              <?php } ?>
                
          <?php endforeach ?>
        </div>

        <h2 class="project__title"><?= $project->title() ?></h2>
        <h2 class="project__subtitle"><?= $project->subtitle() ?></h2>

        <p class="project__synopsis"><?= $project->synopsis() ?></p>
        <p class="project__description"><?= $project->description() ?></p>

      </li>
      <?php endforeach ?>
  </ul>
  </section>
  
</main>

<?php snippet('footer') ?>
