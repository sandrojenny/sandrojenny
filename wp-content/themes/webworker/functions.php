<?php

  // Include Stylesheets & Scripts
  function namespace_theme_stylesheets() {
    wp_enqueue_style( 'bootstrap-min',  get_template_directory_uri() .'/dist/css/bootstrap.min.css', array(), null, 'all' );
    wp_enqueue_style( 'stylecss',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_style( 'aos',  get_template_directory_uri() .'/extensions/aos/aos.css', array(), null, 'all' );
    wp_enqueue_style( 'all', get_stylesheet_uri(), '', null, 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets' );

  // jQuery Support
  add_action('wp_enquere_scripts','load_jquery_from_google');
  function load_jquery_from_google () {
  wp_deregister_script('jquery');
  wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',false,'1.9.1',false);
  wp_enqueue_script('jquery');
  }

  // Boostrap JavaScript
  function bootstrap() {
    wp_enqueue_script(
        'handlerBootstrap',
        get_stylesheet_directory_uri() . '/dist/js/bootstrap.min.js',
        array('jquery')
    );
  }

  add_action( 'wp_enqueue_scripts', 'bootstrap' );

  // AOS JavaScript
  function aos() {
    wp_enqueue_script(
        'handlerAos',
        get_stylesheet_directory_uri() . '/extensions/aos/aos.js',
        array('jquery')
    );
  }

  add_action( 'wp_enqueue_scripts', 'aos' );

  // Typekit
    add_action( 'wp_enqueue_scripts', 'prefix_enqueue_scripts' );
  /**
   * Loads the main typekit Javascript. Replace your-id-here with the script name
   * provided in your Kit Editor.
   *
   * @todo Replace prefix with your theme or plugin prefix
   */
  function prefix_enqueue_scripts() {
  	wp_enqueue_script( 'typekit', '//use.typekit.net/pnp6xul.js', array(), '1.0.0' );
  }
  add_action( 'wp_head', 'prefix_typekit_inline' );
  /**
   * Check to make sure the main script has been enqueued and then load the typekit
   * inline script.
   *
   * @todo Replace prefix with your theme or plugin prefix
   */
  function prefix_typekit_inline() {
  	if ( wp_script_is( 'typekit', 'enqueued' ) ) {
  		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
  	}
  }


  // Google Analyitcs
  add_action('wp_footer', 'add_googleanalytics');

  function add_googleanalytics() { ?>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110690739-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110690739-1');
    </script>
  <?php }

  // Facebook Pixel
  add_action('wp_footer', 'add_facebookpixel');

  function add_facebookpixel() { ?>
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '119279295444070');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=119279295444070&ev=PageView&noscript=1"
    /></noscript>
  <?php }

  /* Navigation */
  function register_my_menus() {
  register_nav_menus(
    array(
      'mainMenu' => __( 'mainMenu' )
      )
    );
  }

  add_action( 'init', 'register_my_menus' );

    // Basic Example
  add_theme_support('post-thumbnails');

  // Fixed Size with Class
  if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) {
  the_post_thumbnail(array(250,120), array("class" => "alignright post_thumbnail"));
  }

  /**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return ' – <a href="'.get_the_permalink().'" rel="nofollow"> Weiterlesen...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



?>
