  </div>

  <footer class="footer">
    <section class="footer-top darkgray-bg">
      <p>Isphording <strong>Inneneinrichtung</strong> überträgt die Ideen <strong>moderner Architektur</strong> in zeitgenössische, kontemporäre Raumgestaltung. Damit Sie sich überall zuhause fühlen.</p>

      <img class="logo" src="<?= $kirby->url('assets') ?>/img/logotype-modern-dark.png">
    </section>

    <section class="footer-bottom black-bg">
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

      <a id="copyright" href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>
    </section>
  </footer>

  <?php snippet('cookies') ?>

<?= js('assets/js/script.js', ['async' => true, 'defer' => true]) ?>

</body>
</html>
