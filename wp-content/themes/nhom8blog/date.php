<?php get_header() ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-2 mb-4 page-header">
          Bài viết:  
          <small><?php echo get_the_date('F Y') ?></small>
        </h1>

        <!-- Blog Post -->
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
          <?php endwhile; ?>
        <?php endif; ?>


        <!-- Pagination -->
        <?php nhom8_blog_pagination() ?>

      </div>

      <!-- Sidebar Widgets Column -->
      <?php get_sidebar() ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer() ?>
  
