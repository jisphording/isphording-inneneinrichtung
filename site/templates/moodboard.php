<?php snippet('header') ?>

<main>
	<?php snippet('intro-amp') ?>

	<!-- ALL IMAGES OF PAGE TO ARRAY -->

  <!-- Since at the moment kirby serves all filetypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
	<?php 
	// an array to store all the images in to make it easier to place rthem in various parts of the template  
	$images_ar = NULL;
	
	// FILTERING THE IMAGES

	// make use of kirbys filter function to load web optimized images for all images of the site
	$images = $page->images()->filterBy('extension', 'webp');
	// filter images by filename containing a string to use for main site body
	$images_filtered = $images->filterBy('filename', '*=', 'mood-');
	// Then load those filtered images into an array to populate the page
	foreach($images_filtered as $file ):
		$images_ar[] = $file;
  endforeach;

	// PHP HELPER FUNCTION:
	// This function takes a kirby files object and can be called in this template to place the first image from this object along with it's meta information and then remove it from the array to avoid duplication
	// -> the '&' infront of the variable is used to pass a reference to the variable instead of a copy
	function unshift_image(&$el) {
		// First, we check if the array actually contains any images
		if (empty($el)) {
			// Do nothing, because array is empty and/or all images are already placed
		} else {				
			?><figure class="grid__item grid__item--image">
          <div class="grid__image--inside">
				  <img class="grid__image" srcset="<?= $el[0] -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
											src="<?php echo $el[0]->url() ?>" alt="<?= $el[0]->content()->title() ?>" loading="lazy" 
                                            style="height:<?= floor(($el[0] -> height()) * 0.5) ?>; width:<?= floor(($el[0] -> width()) * 0.5) ?>;">
          </div>
          <figcaption>
            <span class="title"><p><?= $el[0]->title() ?></p></span>
            <span class="caption"><p><?= $el[0]->caption() ?></p></span>
          </figcaption>
        </figure>
			<?php
			array_shift($el);
		}	
	}
?>

<?php snippet('introMood') ?>

<section class="mood__claim">
    <?= $page -> Claim() -> kirbytext() ?>
  </section>

	<section class="moodboard__images">
		<?php 
    // PHP HELPER FUNTION
		// -> Placing a number of images from a given array where the images are stored
		function place_images(&$el, $amount = 99) {
			?><section class="grid__container--images"><?php
			for ($i = 0; $i < $amount; $i++) {
				unshift_image($el);	
			}
			?></section><?php
    }
  ?>  
  <?php // Placing the first half of the images
  place_images($images_ar, 3);

  place_images($images_ar, 4);
  
  place_images($images_ar, 2);
    
  place_images($images_ar, 4); ?>
	</section><!-- end moodboard -->
	
</main>

<?php snippet('footer') ?>
