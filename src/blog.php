<?php include_once('partials/header.php'); ?>

<main id="blog">
  <section id="blog" class="section">
    <div class="container">
      <h2 class="section__title">Полезные статьи</h2>

      <div class="blog">
        <div class="row">
          <div class="col-12 col-md-3 mb-4">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-3 mb-4">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-3 mb-4">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-3 mb-4">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-3">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-3">
            <?php include('partials/template/news-item.php') ?>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.blog -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('partials/block/callback.php'); ?>
</main>

<?php include_once('partials/footer.php'); ?>