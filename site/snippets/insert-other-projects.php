<section class="insert-other-projects silver-bg-light">
    <div class="insert-other-projects__headline">
        <span>Andere Projekte</span>
    </div>

    <section class="projects">
    <ul>
      <?php foreach(page('projects')->children()->published()->limit(4) as $project): ?>
      <li>
        <!-- Fetching only the first image, will be exchanged for a cover image later. -->
        <?php if($image = $project->image()): ?>
            <figure class="grid__item grid__item--image">
                      <img class="grid__image" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
											src="<?php echo $image->url() ?>" alt="<?= $image->content()->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
            </figure>
        <?php endif ?>

        <div class="grid__container--text">
          <div class="grid__item grid__item--headline">
            <h2 class="project__title"><?= $project->title() ?></h2>
            <h2 class="project__subtitle"><?= $project->subtitle() ?></h2>
          </div>
          <div class="grid__item grid__item--bodycopy">
            <p class="project__synopsis"><?= $project->synopsis() ?></p>
          </div>

      </li>
      <?php endforeach ?>
    </ul>
  </section>

</section>