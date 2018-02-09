<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="row">
      <div class="col-md-12 contactBox">
        <?php the_content(); ?>
      </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
