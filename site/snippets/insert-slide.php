<section class="insert-slide">
    <div class="grid__item--image__insertSlide"> 
        <?php if($image = $page->image('insertSlide.webp')): ?>
            <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>
    <div class="grid__container--text__insertSlide">
        <div class="grid__item--headline__insertSlide">
            <h2><?= $page -> Insert() -> kirbytext() ?></h2>
        </div>
        <div class="grid__item--bodycopy__insertSlide">
            <div class="column--01">
                <?= $page -> InsertColumn01() -> kirbytext() ?>
                <img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem-quadrat.svg">
            </div>
            <div class="column--02"><?= $page -> InsertColumn02() -> kirbytext() ?></div>
        </div>
    </div>
</section>