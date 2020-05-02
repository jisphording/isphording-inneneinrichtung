<section class="intro silver-bg-light">
    <?php 
    // get intro headline content from kirby
    $introtxt = $page -> Intro() -> kirby();
    // pass delimiter and string to explode function to split at commas
    $introtxt_ar = explode(', ', $introtxt); 
    ?>
  
    <h1 class="color-inverted"><?php print $introtxt_ar[0] ;?></h1>
    <h1><?php print $introtxt_ar[1]; ?></h1>
    <h1><?php print $introtxt_ar[2]; ?></h1>
</section>