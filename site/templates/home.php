<?php snippet('header') ?>

<main>
  <?php snippet('intro-amp') ?>

  <?php snippet('introMood') ?>

  <section class="mood__claim">
    <?= $page -> Claim() -> kirbytext() ?>
  </section>

  <section class="projects projects__overview">
    <ul>
      <?php foreach(page('projects')->children()->published()->limit(4) as $project): ?>
      <li>
        <div class="grid__container--images">
          <!-- Since at the moment kirby serves allfiletypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
          <?php foreach( $project -> images() as $file ): ?>
              
              <?php $extension = $file->extension();
              $file_webp = NULL;

              if ($extension == 'webp') {
                $file_webp = $file ?>
                <figure class="grid__item grid__item--image">
                  <img class="grid__image" srcset="<?= $file_webp -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
                                            src="<?= $file_webp -> url()?>" alt="<?= $project->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($file_webp -> height()) * 0.5) ?>; width:<?= floor(($file_webp -> width()) * 0.5) ?>;">

                <figcaption>
                  <span class="title"><p><?= $file->title() ?></p></span>
                  <span class="caption"><p><?= $file->caption() ?></p></span>
                </figcaption>
              </figure>
              <?php } ?>
                
          <?php endforeach ?>
        </div>

        <div class="grid__container--text">
          <div class="grid__item grid__item--headline">
            <h2 class="project__title"><?= $project->title() ?></h2>
            <h2 class="project__subtitle"><?= $project->subtitle() ?></h2>
          </div>
          <div class="grid__item grid__item--bodycopy project__text">
            <p class="project__synopsis"><?= $project->synopsis() ?></p>
            <p><?= $project->description() ?></p>
          </div>

      </li>
      <?php endforeach ?>
  </ul>
  </section>

  <?php snippet('insert-slide') ?>

  <?php snippet('insert-readmore') ?>
  
</main>

<?php snippet('footer') ?>
