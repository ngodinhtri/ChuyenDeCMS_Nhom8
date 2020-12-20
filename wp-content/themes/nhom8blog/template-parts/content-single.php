<!-- Tiêu đề -->
<h1 class="mt-4"><?php the_title() ?></h1>

<!-- Tác giả -->
<p class="lead">
  by
  <?php the_author_posts_link() ?>
  in   
  <?php the_category(' &nbsp;&#47;&nbsp; ') ?>
</p>

<hr>

<!-- Ngày tháng -->
<p>Posted on <?php echo get_the_date() ?></p>

<hr>

<!-- Ảnh preview -->
<?php the_post_thumbnail('post-large',['class'=> 'img-fluid rounded']) ?>

<hr>

<!-- Nội dung -->
<?php the_content() ?>

<!-- Bài viết liên quan -->
<?php echo nhom8_blog_related_post('Bài viết liên quan', 4) ?>
