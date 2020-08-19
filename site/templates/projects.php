<?php snippet('header') ?>

<main>
	<?php snippet('intro') ?>

	<!-- ALL IMAGES OF PAGE TO ARRAY -->

  	<!-- Since at the moment kirby serves allfiletypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
	<?php 
		// an array to store all the images in to make it easier to place rthem in various parts of the template  
		$images_ar = NULL;
		$currentpage = $page->children()->find('project-5');

		// FILTERING THE IMAGES

		// make use of kirbys filter function to load web optimized images for all images of the site
		$images = $currentpage->images()->filterBy('extension', 'webp');
		$figcount = 0; // used inside function for numbering images
		
		foreach($images as $file ):
			$images_ar[] = $file;
		endforeach;

		// PHP HELPER FUNCTION:
		// This function takes a kirby files object and can be called in this template to place the first image from this object along with it's meta information and then remove it from the array to avoid duplication
		// -> the '&' infront of the variable is used to pass a reference to the variable instead of a copy
		function unshift_image(&$el) {
			// #TODO - Counting the number of images automatically. Using a global variable here is not clean and should be changed.
			global $figcount; 

			// First, we check if the array actually contains any images
			if (empty($el)) {
				// Do nothing, because array is empty and/or all images are already placed
			} else {				

				?><figure class="grid__item grid__item--image">
					<img class="grid__image" src="<?php echo $el[0]->url() ?>" alt="<?= $el[0]->content()->title() ?>">

					<figcaption>
						<span class="title"><p><?= $el[0]->content()->title() ?></p></span>
						<span class="caption"><p><?= $el[0]->content()->caption(); echo ($figcount); ?></p></span>
					</figcaption>
				</figure>
				<?php
				array_shift($el);

				$figcount += 1;
				return $figcount;
			}	
		}
	?>

	<!-- PROJECT PAGE TEXT TO ARRAY -->

  	<!-- Splitting all the kirbytext content up into chunks which are loaded into an array for finer control over the placement on the site. The Delimiter for the next array section is the <h2> tag -->
	  <?php 
	  	// loading the kirbytext of the project page
		$projecttext = $currentpage->ProjectPageText()->kirbytext();
		
		// Splitting the text up into various chunks by use of the <h2> Tag as a chapter marker. 
		// If simply splitting by /<h2>/, the tag disappears, so we need '/(?=<h2>)/' to tell PHP to keep the tag intact
		$projecttext_ar = preg_split('/(?=<h2>)/', $projecttext, -1, PREG_SPLIT_NO_EMPTY);

		// Now we have everything in an array with the following structure
		// [0] <h1>
		// [1] <h2><p><p>
		// [2] <h2><p><p> 
		// etc.

		// PHP HELPER FUNCTION:
		// This function takes a kirbytext object and can be called in this template to place the first chapter from the object along with it's meta information and then remove it from the array to avoid duplication
		// -> the '&' infront of the variable is used to pass a reference to the variable instead of a copy
		function unshift_projecttext (&$el) {
			// First, we check if the array actually contains any text
			if (empty($el)) {
				// Do nothing, because array is empty and/or all text is already placed
			} else {
				?><section class="project__text project__text--chapter"><?php
					print($el[0]);
					array_shift($el);
				?></section><?php
			}
		}
	?>

	<section class="mood__image">
		<div class="mood__image--inside">
			<?php unshift_image($images_ar); ?>
		</div>
	</section>

	<section class="grid__container grid__container--project__details">
		<div class="details__emblem">
			<img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">
		</div>
		<div class="project__details--content">
			<ul class="grid__container">
				<li class="grid__item grid__item--headline">
					<h2 class="project__title"><?= $currentpage->Details()->kirbytext() ?></h2>
				</li>
				<li class="grid__item grid__item--entry">
					<p class="project__details">Projekttitel</p>
					<p class="project__details"><?= $currentpage->DetailsProjecttitle()->kirby() ?></p>
				</li>
				<li class="grid__item grid__item--entry">
					<p class="project__details">Realisiert</p>
					<p class="project__details"><?= $currentpage->DetailsRealised()->kirby() ?></p>
				</li>
				<li class="grid__item grid__item--entry">
					<p class="project__details">Kunde</p>
					<p class="project__details"><?= $currentpage->DetailsClient()->kirby() ?></p>
				</li>
				<li class="grid__item grid__item--entry">
					<p class="project__details">Fl&auml;che des Objekts</p>
					<p class="project__details"><?= $currentpage->DetailsSize()->kirby() ?></p>
				</li>
				<li class="grid__item grid__item--entry">
					<p class="project__details">Hauptt&auml;tigkeit</p>
					<p class="project__details"><?= $currentpage->DetailsJob()->kirby() ?></p>
				</li>
			</ul>
		</div>
	</section>

	<section class="project__text--longform">
		<?php 
		// Checking how many chapters there are on the project page
		$projecttext_ar_length = count($projecttext_ar);
		$projecttext_chapters_placed = 0;

		// PHP HELPER FUNTION
		// -> Placing a number of images from a given array where the images are stored
		function place_images(&$el, $amount) {
			?><section class="grid__container--images"><?php
			for ($i = 0; $i < $amount; $i++) {
				unshift_image($el);	
			}
			?></section><?php
		}	 
		
		// SWITCH CASE
		// -> Going through the parsed kirbytext array to place contents chapter by chapter and automatically add an accompanying image triplet. For the moment this is implemented with a rather clunky if/else switch, but it will possibly refactored into a more elegeant solution further down the road

		for ($i = 0; $i < $projecttext_ar_length; $i++) {
			// First check if we are on the first chapter by checking if $projecttext_ar_length has been reduced
			if ($projecttext_chapters_placed == 0) {
				unshift_projecttext($projecttext_ar); 
				unshift_projecttext($projecttext_ar); 
				$projecttext_chapters_placed = $projecttext_chapters_placed + 2;

				place_images($images_ar, 3);

			// Then check if the first chapter was already placed. If so, we just post another three images without any text 
			} elseif ($projecttext_chapters_placed == 2) {
				$projecttext_chapters_placed += 1;
				place_images($images_ar, 3);

			// Now the first chapter and two image triplets have been placed, so we just post a chapter text without any images
			} elseif ($projecttext_chapters_placed == 3) {
				$projecttext_chapters_placed += 1;
				unshift_projecttext($projecttext_ar);

			// And if there is still content to be placed we just use a chapter-and-images block until everything has been placed onto the site
			} else {
				$projecttext_chapters_placed += 1;
				unshift_projecttext($projecttext_ar);
				place_images($images_ar, 3);
			}
		}
		?>
	</section>
	
</main>

<?php snippet('insert-readmore') ?>

<?php snippet('insert-other-projects') ?>

<?php snippet('footer') ?>
