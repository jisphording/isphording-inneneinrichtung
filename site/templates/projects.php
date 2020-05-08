<?php snippet('header') ?>

<main>
	<?php snippet('intro') ?>

	<!-- ALL IMAGES OF PAGE TO ARRAY ->

  	<!-- Since at the moment kirby serves allfiletypes found we wrap everything in a PHP function that checks for the image type and then filters out everything that is not webp -->
	<?php 
		// an array to store all the images in to make it easier to place rthem in various parts of the template  
		$images_ar = NULL;

		foreach($page->children()->find('project-5')->images() as $file ):
              
			$extension = $file->extension();
			
			if ($extension == 'webp') {
				$images_ar[] = $file;
			}

		endforeach;

		// PHP HELPER FUNCTION:
		// This function takes a kirby files object and can be called in this template to place the first image from this object along with it's meta information and then remove it from the array to avoid duplication
		// -> the '&' infront of the variable is used to pass a reference to the variable instead of a copy
		function unshift_image(&$el) {
			// First, we check if the array actually contains any images
			if (empty($el)) {
				// Do nothing, because array is empty and/or all images are already placed
			} else {				

				?><img class="grid__image" src="<?php echo $el[0]->url() ?>" alt="<?= $el[0]->content()->title() ?>"><?php
				array_shift($el);
			}	
		}
	?>

	<section class="mood__image">
		<?php unshift_image($images_ar); ?>
	</section>
			
	<?php
	$images_ar_length = count($images_ar);
	for ($i = 0; $i < $images_ar_length; $i++) {
		unshift_image($images_ar);	
	} 
	?>
	
</main>

<?php snippet('insert-readmore') ?>

<?php snippet('footer') ?>
