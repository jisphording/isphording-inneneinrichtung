<!doctype html>
<html lang="en" class="white-bg">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Online Presence of German Interior Design Firm Isphording Inneneinrichtung GmbH." />
  <meta name="author" content="Johannes Isphording" />
  <meta name="keywords" content="interior, design, architecture, fabrics, furniture" />

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['dist/index.css']) ?>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

</head>
<body class="loading">

  <div class="page">
    <header class="header">
	  <a class="logo" href="<?= $site->url() ?>"><img class="logo" src="<?= $kirby->url('assets') ?>/img/logotype-modern-dark.png"></a>

	  	<div class="menu__fake">
			  <p>Men&uuml;</p>
		</div>

		<div class="menu__fullscreen">
			<div class="screens" aria-hidden="true">
				<div class="screen__item" style="--bg-img:url(img/menuMood-01.webp);">
					<div class="screen screen--full"></div>
					<div class="screen screen--clip screen--clip-1"></div>
				</div>
				<div class="screen__item" style="--bg-img:url(img/menuMood-02.webp);">
					<div class="screen screen--full"></div>
					<div class="screen screen--clip screen--clip-1"></div>
				</div>				
				<div class="screen__item" style="--bg-img:url(img/menuMood-03.webp);">
					<div class="screen screen--full"></div>
					<div class="screen screen--clip screen--clip-1"></div>
				</div>
				<div class="screen__item" style="--bg-img:url(img/menuMood-04.webp);">
					<div class="screen screen--full"></div>
					<div class="screen screen--clip screen--clip-1"></div>
				</div>
				<div class="screen__item" style="--bg-img:url(img/menuMood-05.webp);">
					<div class="screen screen--full"></div>
					<div class="screen screen--clip screen--clip-1"></div>
				</div>
			</div>

			<div class="content">
				<nav id="menu" class="menu">
					<?php foreach ($site->children()->listed() as $item): ?>
						<span class="menu__item" href="#">
							<a class="menu__item-link" href="<?= $item->url() ?>"><?= $item->title() ?></a>
						</span>
					<?php endforeach ?>
				</nav>	
			</div>
		</div>
    </header>

