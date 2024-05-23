<?php require('partials/head.php') ?>
  <?php require('partials/nav.php') ?>
  <?php require('partials/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <p class="mb-6">
        <a href="/php_practice/dynamic_webpages/notes.php" class="text-blue-400 underline">Go back...</a>
      </p>
      <p>
        <?php echo htmlspecialchars($note['body']) ?>
      </p>
    </div>
  </main>

<?php require('partials/footer.php') ?>  