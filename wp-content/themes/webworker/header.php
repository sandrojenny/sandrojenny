<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="p:domain_verify" content="bb17f4fac43a44f0aa3309167394b1db"/>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <!--  Open Graph -->
    <?php if (is_single() || is_page() ) { ?>
      <meta property="og:title" content="<?php utf8_decode(single_post_title());?>"/>
      <?php if ( has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
        <meta property="og:image" content="<?php echo $large_image_url['0'] ?>"/>
      <?php }
            else{ ?>
        <meta property="og:image" content="[DEIN STANDARDBILD LINK HIER]"/>
      <?php } ?>
      <meta property="og:url" content="<?php echo get_permalink();?>?utm_source=social_media"/>
    <?php } ?>

    <?php wp_head();?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>webworkers</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="navigation">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="webworkers" class="logoimg" /></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="my-2 my-lg-0">
                  <?php wp_nav_menu( array(
                    'theme_location' => 'mainMenu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav mr-auto'
                  )); ?>
                </div><!-- /.navbar-collapse -->

            </div>
          </nav>
        </div>
      </div>
      </div>
    </div>
