  </div>

  <footer class="footer">
    <section class="footer-top darkgray-bg">
      <p>Isphording <strong>Inneneinrichtung</strong> überträgt die Ideen <strong>moderner Architektur</strong> in zeitgenössische, kontemporäre Raumgestaltung. Damit Sie sich überall zuhause fühlen.</p>

      <img class="logo" src="<?= $kirby->url() ?>/dist/img/logotype-modern-dark.webp" width="539" height="99" alt="Company Logotype on dark Background - Isphording Inneneinrichtung">
    </section>

    <section class="footer-navigation black-bg">
    <?php if ($contact = page('contact')): ?>
      <div class="footer-navigation__menu__main">
        <ul class="footer-navigation__menu__sub">
          <li>Navigation</li>
          <li class="menu">
            <?php foreach ($site->children()->listed() as $item): ?>
            <?= $item->title()->link() ?>
            <?php endforeach ?>
          </li>
        </ul>
        <ul class="footer-navigation__menu__sub">
          <li>Kontakt</li>
          <li><?= strip_tags(page('imprint')->address()->kirbytext()) ?></li>
          <li><?= html::email(page('imprint')->email()) ?></li>
          <li><?= html::tel(page('imprint')->phone()) ?></li>
        </ul>
        <ul class="footer-navigation__menu__sub">
          <li>Legal</li>
          <li><a href="<?= $site->url() ?>/imprint">Impressum</a></li>
        </ul>
        <ul class="footer-navigation__menu__sub">
          <li>Folgen Sie Uns</li>
          <li><?php foreach ($contact->social()->toStructure() as $social): ?>
            <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
          <?php endforeach ?></li>
        </ul>
      </div>
    <?php endif ?>
    </section>

    <section class="footer-bottom silver-bg">
      <ul>
        <li class="specialized">Wir sind spezialisiert auf die Fertigung <strong>individueller Einzelstücke</strong> und die Innenausstattung mit hochwertigen und <strong>exklusiven Stoffen.</strong>
        </li>
        <li class="emblem">
          <img src="<?= $kirby->url() ?>/dist/img/emblem.svg" width="110" height="160" alt="Company Heraldic Emblem">
        </li>
        <li class="copyright">
            <p>Crafted <a class="date" href="<?= url() ?>"> <?= date('Y') ?></a> by <a href="http://studioisphording.com/">Studio Isphording</a></p>
            <span>Alle Rechte Vorbehalten</span>
            <span class="trademark">&copy;</span>
        </li>
    </section>
  </footer>

  <?php snippet('cookies') ?>

<?= js('dist/script.js', ['async' => false]) ?>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

<!-- Enabling a very basic Progressive Web App Service Worker in case the user has no internet connection -->
<script>
if ('serviceWorker' in navigator) {
  // Before registering the service worker, wait until site has loaded
  window.addEventListener('load', () => {
    // Register a service worker hosted at the root of the
    // site using the default scope.
    navigator.serviceWorker.register('/serviceworker.js').then(function(registration) {
      console.log('Service worker registration succeeded:', registration);
    }, /*catch*/ function(error) {
      console.log('Service worker registration failed:', error);
    });
  });
} else {
  console.log('Service workers are not supported.');
}
</script>

</body>
</html>
