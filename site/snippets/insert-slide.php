<section class="insert-slide">
    <div class="grid__item--image__insertSlide"> 
        <?php if($image = $page->image('insertSlide.webp')): ?>
            <img class="grid__image" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
											src="<?php echo $image->url() ?>" alt="<?= $image->content()->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
        <?php endif ?>
    </div>
    <div class="grid__container--text__insertSlide">
        <div class="grid__item--headline__insertSlide">
            <h2><?= $page -> Insert() -> kirbytext() ?></h2>
        </div>
        <div class="grid__item--bodycopy__insertSlide">
            <div class="column--01">
                <?= $page -> InsertColumn01() -> kirbytext() ?>
                <img class="emblem" src="<?= $kirby->url() ?>/dist/img/emblem-quadrat.svg">
            </div>
            <div class="column--02"><?= $page -> InsertColumn02() -> kirbytext() ?></div>
        </div>
    </div>
</section>