<?php get_header(); ?>

  <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
        <div class="col-md-12 jumboArea" data-aos="zoom-in" data-aos-duration="1500">
            <div class="row">
              <div class="col-md-12 jumboTitle">
                <h1><?php the_field('title'); ?></h1>
                <h2><?php the_field('subtitle'); ?></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="grey"><?php the_field('description'); ?></p>
                <p><?php the_field('formular'); ?><p>
              </div>
            </div>
        </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

<?php get_footer(); ?>
