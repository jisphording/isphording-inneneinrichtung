<section class="mood__image">
    <div class="mood__image--inside">
        <?php if($image = $page -> image('introMood.webp')): ?>
            <img srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
                                        src="<?= $image -> url()?>" alt="Mood Image" style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;" />
        <?php endif ?>
    </div>
</section>