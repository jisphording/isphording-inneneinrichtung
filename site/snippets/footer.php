  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <?php if ($contact = page('contact')): ?>
    <nav class="social">
      <?php foreach ($contact->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>
  </footer>

</body>
</html>
