<?php get_header(); ?>

  <div class="container-fluid blog-single">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="blogpost-single">
          <div class="row no-gutters">
            <div class="col-md-12 blogimage-single">
              <h1><?php the_title(); ?></h1>
              <div class="bloginfo-single"><?php the_category(','); ?> / <?php the_date(); ?> / von <?php the_author(); ?></div>
              <div class="blogimage-container nobreakpoint1"><?php the_post_thumbnail(); ?></div>
            </div>
          </div>
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-1"></div>
              <div class="col-md-10 blogcontent-single">
                <p><?php the_content(); ?></p>
                <div class="comments">
                  <?php comments_template(); ?>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>

            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

<?php get_footer(); ?>
