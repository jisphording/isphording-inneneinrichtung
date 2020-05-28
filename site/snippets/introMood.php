<section class="mood__image">
    <div class="mood__image--inside">
        <?php if($image = $page->image('introMood.webp')): ?>
            <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>
</section>