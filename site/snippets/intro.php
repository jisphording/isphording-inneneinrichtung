<section class="intro silver-bg-light">
    <div class="intro__txt">
        <?php 
        // get intro headline content from kirby
        $introtxt = $page -> Intro() -> kirby();
        // pass delimiter and string to explode function to split at commas
        $introtxt_ar = explode(', ', $introtxt); 
        ?>
    
        <h1 class="color-inverted"><?php print $introtxt_ar[0]; ?></h1>
        <h1><?php print $introtxt_ar[1]; ?></h1>
        <h1><?php print $introtxt_ar[2]; ?></h1>
    </div>
    <div class="intro__emblem">
        <img class="emblem" src="<?= $kirby->url() ?>/dist/img/emblem.svg">
    </div>
</section>