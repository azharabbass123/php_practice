<?php require('views/partials/head.php') ?>
  <?php require('views/partials/nav.php') ?>
  <?php require('views/partials/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <p class="mb-6">
        <a href="/php_practice/dynamic_webpages/notes" class="text-blue-400 underline">Go back...</a>
      </p>
      <p>
        <?php echo htmlspecialchars($note['body']) ?>
      </p>
      <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
        <div class="mt-4 flex items-center justify-left">
        <button type="submit" class="rounded-md  bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
        </div>
      </form>
    </div>
  </main>

<?php require('views/partials/footer.php') ?>  