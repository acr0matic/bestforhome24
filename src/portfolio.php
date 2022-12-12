<?php include_once('partials/header.php'); ?>

<main id="portfolio">
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title">Наши выполненные работы</h2>
      </div>
      <!-- /.section__header -->

      <div class="portfolio">
        <div class="portfolio__gallery">
          <div class="row gy-4">
            <div class="col-12 col-md-4">
              <?php include('partials/template/portfolio-item.php') ?>
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-md-4">
              <?php include('partials/template/portfolio-item.php') ?>
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-md-4">
              <?php include('partials/template/portfolio-item.php') ?>
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.portfolio__gallery -->
      </div>
      <!-- /.portfolio -->
    </div>
    <!-- /.container -->

    <?php include_once('partials/modal/portfolio.php'); ?>
  </section>

  <?php include_once('partials/block/callback.php'); ?>
</main>

<?php include_once('partials/footer.php'); ?>