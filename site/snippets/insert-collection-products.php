<section class="insert-slide insert-collection-products">
<!-- This Insert can be used as a hook/link to another page which contains more information on the topic and/or to break up the page flow a little bit -->
    <div class="grid__item--image__insertSlide"> 
        <?php if($image = $page->image('insertreadmore-Lemuren.webp')): ?>
            <img class="grid__image" src="<?= $image->url() ?>" alt="">
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
            <img class="grid__image grid__image--items" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
   </div>
   
  </section>