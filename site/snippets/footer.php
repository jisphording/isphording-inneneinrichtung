  </div>

  <footer class="footer">
    <section class="footer-top darkgray-bg">
      <p>Isphording <strong>Inneneinrichtung</strong> überträgt die Ideen <strong>moderner Architektur</strong> in zeitgenössische, kontemporäre Raumgestaltung. Damit Sie sich überall zuhause fühlen.</p>

      <img class="logo" src="<?= $kirby->url('assets') ?>/img/logotype-modern-dark.png">
    </section>

    <section class="footer-navigation black-bg">
    <?php if ($contact = page('contact')): ?>
      <ul>
        <ul>
          <li>Navigation</li>
          <nav class="menu">
            <?php foreach ($site->children()->listed() as $item): ?>
            <?= $item->title()->link() ?>
            <?php endforeach ?>
          </nav>
        </ul>
        <ul>
          <li>Kontakt</li>
          <li>Mainstraße 125</li>
          <li>41469 Neuss</li>
          <li>Germany</li>
          <li>&nbsp;</p>
          <li>mail@isphording-inneneinrichtung.de</li>
          <li>+49 2137 92 76 72</li>
        </ul>
        <ul>
          <li>Legal</li>
          <li><a href="<?= $site->url() ?>/imprint">Impressum</a></li>
        </ul>
        <ul>
          <li>Folgen Sie Uns</li>
          <li><?php foreach ($contact->social()->toStructure() as $social): ?>
            <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
          <?php endforeach ?></li>
        </ul>
      </ul>
      <?php endif ?>
    </section>

    <section class="footer-bottom silver-bg">
      <p>Wir sind spezialisiert auf die Fertigung <strong>individueller Einzelstücke</strong> und die Innenausstattung mit hochwertigen und <strong>exklusiven Stoffen.</strong></p>

      <img class="emblem" src="<?= $kirby->url('assets') ?>/img/emblem.svg">

      <div class="copyright">
        <p>Crafted <a class="date" href="<?= url() ?>"> <?= date('Y') ?></a> by <a href="http://studioisphording.com/">Studio Isphording</a></p>
        <span>Alle Rechte Vorbehalten</span>
        <span class="trademark">&copy;</span>
      </div>
    </section>
  </footer>

  <?php snippet('cookies') ?>

<?= js('dist/script.js', ['async' => false]) ?>

</body>
</html>
