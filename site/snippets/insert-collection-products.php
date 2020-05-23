<section class="insert-collection-products">
<!-- This Insert can be used as a hook/link to another page which contains more information on the topic and/or to break up the page flow a little bit -->
    <div class="insert-collection-products__content">
        <div class="grid__item--image__insertSlide"> 
            <?php if($image = $page->image('insertreadmore-Lemuren.webp')): ?>
                <img class="grid__image" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div>
        <div class="headline">
            <?= $page -> InsertCollectionProductsHeadline() -> kirbytext() ?>
        </div>
        <div class="text"> 
            <?= $page -> InsertCollectionProductsText() -> kirbytext() ?>
        </div>

        <div class="items"> 
            <?= $page -> InsertCollectionProductsItems() -> kirbytext() ?>
        </div>
        <div class="grid__item--image__insertItems"> 
            <?php if($image = $page->image('insertreadmore-Stoffe.webp')): ?>
                <img class="grid__image" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div>
   </div>
   
  </section>