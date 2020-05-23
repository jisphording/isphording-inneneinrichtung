<?php snippet('header') ?>

<main>
	<?php snippet('intro') ?>

	<!-- ALL IMAGES OF PAGE TO ARRAY -->

  	<!-- Since at the moment kirby serves all filetypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
	<?php 
	// an array to store all the images in to make it easier to place rthem in various parts of the template  
	$images_ar = NULL;
	
	// FILTERING THE IMAGES

	// make use of kirbys filter function to load web optimized images for all images of the site
	$images = $page->images()->filterBy('extension', 'webp');
	// filter images by filename containing a string to use for main site body
	$images_filtered = $images->filterBy('filename', '*=', 'service-');
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
			<img class="grid__image" src="<?php echo $el[0]->url() ?>" alt="<?= $el[0]->content()->title() ?>">
			</figure>
			<?php
			array_shift($el);
		}	
	}
?>

<?php snippet('introMood') ?>

<section class="mood__claim">
	<?= $page -> Claim() -> kirby() ?>
</section>

	<section class="project__text--longform">
		<section class="project__text project__text--chapter">
			<?= $page->PageText()->kirbytext() ?>
		</section>
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

    // Actually Placing Images
    place_images($images_ar);

		?>
	</section>

	<!-- SERVICE ITEMS LIST -->

	<?php // SPLITTING HEADLINE HELPER FUNCTION
	// TODO: At the moment this function is used only for headlines, but it coult probably be built in a more flexible way to be used for other text fields with automatic tag recognition etc. 

	function split_txt($text_field, $delimiter) {
		// pass delimiter and string to explode function to split at commas
		$text_ar = explode($delimiter, $text_field); 
		$length = count($text_ar); // getting the array length after the split

		for ($i = 0; $i < $length; $i += 1) {
			echo '<h2 class="service__title--0' . $i . '">';
				echo $text_ar[$i];
			echo '</h2>';
		};
	} ?>

	<section class="grid__container grid__container--service__details">
		<!-- TODO: The building of the following list should be refactored into a neat loop -->
		<!-- Service List 01 -->
		<ul class="grid__container">
			<li class="number">
				<p>1</p>
			</li>
			<li class="details__emblem">
				<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
			</li>
			<li class="grid__item grid__item--headline">
				<?php $txt = $page->Service01Titel()->kirby(); split_txt($txt, ', '); ?>
			</li>
			<li class="grid__item grid__item--entry">
				<p class="service__details"><?= $page->Service01Text()->kirby() ?></p>
			</li>
		</ul>
		<!-- Service List 02 -->
		<ul class="grid__container">
			<li class="number">
				<p>2</p>
			</li>
			<li class="details__emblem">
				<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
			</li>
			<li class="grid__item grid__item--headline">
				<?php $txt = $page->Service02Titel()->kirby(); split_txt($txt, ', '); ?>
			</li>
			<li class="grid__item grid__item--entry">
				<p class="service__details"><?= $page->Service02Text()->kirby() ?></p>
			</li>
		</ul>
		<!-- Service List 03 -->
		<ul class="grid__container">
			<li class="number">
				<p>3</p>
			</li>
			<li class="details__emblem">
				<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
			</li>
			<li class="grid__item grid__item--headline">
				<?php $txt = $page->Service03Titel()->kirby(); split_txt($txt, ', '); ?>
			</li>
			<li class="grid__item grid__item--entry">
				<p class="service__details"><?= $page->Service03Text()->kirby() ?></p>
			</li>
		</ul>
		<!-- Service List 04 -->
		<ul class="grid__container">
			<li class="number">
				<p>4</p>
			</li>
			<li class="details__emblem">
				<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
			</li>
			<li class="grid__item grid__item--headline">
				<?php $txt = $page->Service04Titel()->kirby(); split_txt($txt, ', '); ?>
			</li>
			<li class="grid__item grid__item--entry">
				<p class="service__details"><?= $page->Service04Text()->kirby() ?></p>
			</li>
		</ul>
		<!-- Service List 05 -->
		<ul class="grid__container">
			<li class="number">
				<p>5</p>
			</li>
			<li class="details__emblem">
				<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
			</li>
			<li class="grid__item grid__item--headline">
				<?php $txt = $page->Service05Titel()->kirby(); split_txt($txt, ', '); ?>
			</li>
			<li class="grid__item grid__item--entry">
				<p class="service__details"><?= $page->Service05Text()->kirby() ?></p>
			</li>
		</ul>
	</section>
	
</main>

<?php snippet('insert-collection-products') ?>

<?php snippet('footer') ?>
