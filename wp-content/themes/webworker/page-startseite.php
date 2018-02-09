<?php get_header(); ?>

  <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
        <div class="col-md-12 heroArea">
            <div class="row">
              <div class="col-md-0 col-lg-7">
                <h1><?php the_field('hero_title'); ?></h1>
                <h2><?php the_field('hero_subtitle'); ?></h2>
                <p class="grey"><?php the_field('hero_description'); ?></p>
                <p class="buttonbox"><a href="<?php the_field('hero_button_link'); ?>" class="button"><?php the_field('hero_button'); ?></a></p>
              </div>
              <div class="col-md-12 col-lg-5 herocontent">
                <img src="<?php the_field('heroimage'); ?>" alt="<?php the_field('heroimagealt'); ?>" class="heroimage nobreakpoint1 nobreakpoint2 nobreakpoint3">
              </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-4 cbWrapper">
            <a href="<?php the_field('box_1_link'); ?>" target="_blank">
              <div class="contentBox">
                <h3><?php the_field('box_1_title'); ?></h3>
                <p><?php the_field('box_1_description'); ?></p>
                <img src="<?php the_field('imagebox1'); ?>" alt="<?php the_field('imagebox1alt'); ?>">
              </div>
            </a>
          </div>
          <div class="col-md-4 cbWrapper">
            <a href="<?php the_field('box_2_link'); ?>">
              <div class="contentBox">
                <h3><?php the_field('box_2_title'); ?></h3>
                <p><?php the_field('box_2_description'); ?></p>
                <img src="<?php the_field('imagebox2'); ?>" alt="<?php the_field('imagebox1alt'); ?>">
              </div>
            </a>
          </div>
          <div class="col-md-4 cbLast">
            <a href="<?php the_field('box_3_link'); ?>">
              <div class="contentBox">
                <h3><?php the_field('box_3_title'); ?></h3>
                <p><?php the_field('box_3_description'); ?></p>
                <img src="<?php the_field('imagebox3'); ?>" alt="<?php the_field('imagebox1alt'); ?>">
              </div>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

<?php get_footer(); ?>
