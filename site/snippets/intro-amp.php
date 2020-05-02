<section class="intro silver-bg-light">
    <?php 
    // get intro headline content from kirby
    $introtxt = $page -> Intro() -> kirby();
    // pass delimiter and string to explode function to split at commas
    $introtxt_ar = explode(', ', $introtxt); 
    $length = count($introtxt_ar);

    if ($length == 2) {
        echo '<h1>' . $introtxt_ar[0] . '<span class="color-inverted"> <b>&amp;</b></span></h1>';
        echo '<h1>' . $introtxt_ar[1] . '</h1>';
    } else {
        echo '<h1>' . $introtxt_ar[0] . ', </h1>';
        echo '<h1>' . $introtxt_ar[1] . '<span class="color-inverted"> <b>&amp;</b></span></h1>';
        echo '<h1>' . $introtxt_ar[2] . '</h1>';
    }
    ?>

</section>