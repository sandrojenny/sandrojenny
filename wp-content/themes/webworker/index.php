<?php get_header(); ?>

  <div class="container blog-main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="blogpost-main" data-aos="zoom-in" data-aos-duration="750">
          <div class="row no-gutters">
            <div class="col-md-5 blogimage-main">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="col-md-7 blogcontent-main">
              <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

<?php get_footer(); ?>
