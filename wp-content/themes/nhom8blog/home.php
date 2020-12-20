<?php get_header() ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <?php 
          $args = [
              'posts_per_page' => 1,     // Số lượng bài
              'post__in'  => get_option( 'sticky_posts' )  // Lấy bài viết được đánh dấu sticky
          ];
          $the_query = new WP_Query($args); // Gọi hàm WP_Query
      ?>

      <!-- Slider -->
      <div id="demo" class="carousel slide my-4 col-12" data-ride="carousel">
        <div class="carousel-inner">
        
        <?php if ( $the_query->have_posts() ) : ?>
            
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
          <a href="<?php the_permalink() ?>">
          <div class="carousel-item <?php echo $the_query->current_post == 1 ? 'active' : ''  ?>">
          <div class="overlay"></div>
          <?php the_post_thumbnail('slider-img',['class'=>'fuild-img']) ?>
          <div class="carousel-caption d-none d-block">
              <h5><?php echo wp_trim_words( get_the_title() , 12 ) ?></h5>
          </div>   
          </a>
        </div>
        
            
        <?php endwhile; ?>

        <?php endif; ?>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      </div>
      <?php wp_reset_postdata() ?>

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Bài viết danh mục PSD2HTML -->
        <?php
        $args = [
            'category_name' => 'psd2html',
            'posts_per_page' => 6,
        ];

        $the_query = new WP_Query($args);
        ?>

        <div class="card my-4">
            <h5 class="card-header">
              PSD2HTML
            </h5>
            <div class="card-body">
                <div class="row">
                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>

        <!-- Bài viết danh mục USEFUL -->
        <?php
        $args = [
            'category_name' => 'useful',
            'posts_per_page' => 6,
        ];

        $the_query = new WP_Query($args);
        ?>

        <div class="card my-4">
            <h5 class="card-header">
              USEFUL
            </h5>
            <div class="card-body">
                <div class="row">
                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>
      

      <!-- Bài viết danh mục CSS Chuyên Sâu -->
        <?php
        $args = [
            'category_name' => 'css-chuyen-sau',
            'posts_per_page' => 6,
        ];

        $the_query = new WP_Query($args);
        ?>

        <div class="card my-4">
            <h5 class="card-header">
              CSS CHUYÊN SÂU
            </h5>
            <div class="card-body">
                <div class="row">
                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>

        <!-- Bài viết danh mục FLEXBOX -->
        <?php
        $args = [
            'category_name' => 'flexbox',
            'posts_per_page' => 6,
        ];

        $the_query = new WP_Query($args);
        ?>

        <div class="card my-4">
            <h5 class="card-header">
              FLEXBOX
            </h5>
            <div class="card-body">
                <div class="row">
                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>

        <!-- Bài viết danh mục GRID -->
        <?php
        $args = [
            'category_name' => 'grid',
            'posts_per_page' => 6,
        ];

        $the_query = new WP_Query($args);
        ?>

        <div class="card my-4">
            <h5 class="card-header">
              GRID
            </h5>
            <div class="card-body">
                <div class="row">
                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata() ?>
        </div>

      <!-- Sidebar Widgets Column -->
      <?php get_sidebar() ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer() ?>
  