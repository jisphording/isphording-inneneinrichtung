<section class="mood__image">
    <?php if($image = $page->image('introMood.webp')): ?>
        <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
</section>