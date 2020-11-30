<section class="insert-slide insert-collection-products">
<!-- This Insert can be used as a hook/link to another page which contains more information on the topic and/or to break up the page flow a little bit -->
    <div class="grid__item--image__insertSlide"> 
        <?php if($image = $page->image('insertreadmore-Lemuren.webp')): ?>
            <img class="grid__image" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
											src="<?php echo $image->url() ?>" alt="<?= $image->content()->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
        <?php endif ?>
    </div>
    <div class="grid__container--text__insertSlide">
        <div class="grid__item--headline__insertSlide">
            <h2><?= $page -> InsertCollectionProductsHeadline() -> kirbytext() ?></h2>
        </div>
        <div class="text"> 
            <?= $page -> InsertCollectionProductsText() -> kirbytext() ?>
        </div>

        <div class="items"> 
            <?= $page -> InsertCollectionProductsItems() -> kirbytext() ?>
        </div>
        <?php if($image = $page->image('insertreadmore-Stoffe.webp')): ?>
            <img class="grid__image grid__image--items" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
											src="<?php echo $image->url() ?>" alt="<?= $image->content()->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
        <?php endif ?>
   </div>
   
  </section>