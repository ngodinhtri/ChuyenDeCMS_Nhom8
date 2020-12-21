<!-- Footer -->
<footer class="pt-5 pb-5 border-top bg-dark ">
  <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 mt-5">
            <?php dynamic_sidebar('footer_area_one'); ?>
        </div>
        <div class="col-12 col-md-3 mt-5">
            <?php dynamic_sidebar('footer_area_two'); ?>
        </div>
        <div class="col-12 col-md-3 mt-5">
            <?php dynamic_sidebar('footer_area_three'); ?>
        </div>
    </div>
  </div>
</footer>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <?php wp_footer() ?>
</body>

</html>
