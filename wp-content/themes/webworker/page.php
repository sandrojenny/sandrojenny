<?php get_header(); ?>

  <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row no-gutters">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

<?php get_footer(); ?>
