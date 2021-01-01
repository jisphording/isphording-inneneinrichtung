<!doctype html>
<html lang="en" class="white-bg">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Online Presence of German Interior Design Firm Isphording Inneneinrichtung GmbH." />
  <meta name="author" content="Johannes Isphording" />
  <meta name="keywords" content="interior, design, architecture, fabrics, furniture" />

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <!-- Canonical Link to main content for this site -->
  <link rel="canonical" href="https://isphording-inneneinrichtung.de/">
  
  <!-- Theme color for PWA -->
  <meta name="theme-color" content="#d2d3d6"/>

  <!-- main css file for styling -->
  <?= css(['dist/index.css']) ?>

  <!-- Enabling a very basic Progressive Web App Manifest in case the user has no internet connection -->
  <link rel="manifest" href="/dist/manifest.webmanifest" crossorigin="use-credentials">

  <!-- Manually adding the apple touch icon for PWA here -->
  <link rel="apple-touch-icon" href="\dist\emblem-quadrat-192x192.png" />
  
	<!-- Enable non-render-blocking quality for Google Fonts -->
	<!-- Connect to domain of font files -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700&display=swap">
	<!-- async CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700&display=swap" media="print" onload="this.onload=null;this.removeAttribute('media');">
	<!-- no-JS fallback -->
	<noscript>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700&display=swap">
	</noscript>

</head>
<body class="loading">

  <div class="page <?= $page->uri() ?>">
    <header class="header">

		<section id="navbar" class="navbar">
			<a class="logo" href="<?= $site->url() ?>"><img class="logo" src="<?= $kirby->url() ?>/dist/img/logotype-modern-light.webp" width="539" height="99" alt="Company Logotype - Isphording Inneneinrichtung"></a>

			<div class="menu__fake">
					<p>Men&uuml;</p>
			</div>
		</section>

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

