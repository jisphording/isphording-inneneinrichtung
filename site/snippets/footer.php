  </div>

  <footer class="footer">
    <section class="footer-top darkgray-bg">
      <p>Isphording <strong>Inneneinrichtung</strong> überträgt die Ideen <strong>moderner Architektur</strong> in zeitgenössische, kontemporäre Raumgestaltung. Damit Sie sich überall zuhause fühlen.</p>

      <img class="logo" src="<?= $kirby->url('assets') ?>/img/logotype-modern-dark.png">
    </section>

    <section class="footer-navigation black-bg">
    <?php if ($contact = page('contact')): ?>
      <ul class="footer-navigation__menu__main">
        <ul class="footer-navigation__menu__sub">
          <li>Navigation</li>
          <nav class="menu">
            <?php foreach ($site->children()->listed() as $item): ?>
            <?= $item->title()->link() ?>
            <?php endforeach ?>
          </nav>
        </ul>
        <ul class="footer-navigation__menu__sub">
          <?= $page->address()->kt() ?>
          <li><?= html::email($page->email()) ?></li>
          <li><?= html::tel($page->phone()) ?></li>
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
      </ul>
      <?php endif ?>
    </section>

    <section class="footer-bottom silver-bg">
      <ul>
        <li class="specialized">Wir sind spezialisiert auf die Fertigung <strong>individueller Einzelstücke</strong> und die Innenausstattung mit hochwertigen und <strong>exklusiven Stoffen.</strong>
        </li>
        <li class="emblem">
          <img src="<?= $kirby->url('assets') ?>/img/emblem.svg">
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

</body>
</html>
