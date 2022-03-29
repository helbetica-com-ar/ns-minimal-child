<?php
/**
 * The Header for NS Minimal
 *
 * @package ns-minimal
 * @since ns-minimal 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- init wp_head -->
	<?php wp_head(); ?>
	<!-- end wp_head -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css" integrity="sha512-TPigxKHbPcJHJ7ZGgdi2mjdW9XHsQsnptwE+nOUWkoviYBn0rAAt0A5y3B1WGqIHrKFItdhZRteONANT07IipA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" integrity="sha512-avbJ+2tqjGDsLhAbhnmNVjAfEI5Sa4+yrVSQD1K5sH8O5p7FwQlPsU+mxRVZ0zWPIk+FY9PyS23TCngfdb84Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/pace-theme-default.min.css" integrity="sha512-Ai6m3x6GYjuLAcJXEGBxHPLNOj6eIxh+/21wGpXT9B2dmcdvaFqEZr+/H/aaup+Rrkw4t3FzifGIuYhVPuBsrg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/vendor/pace.js/flat-top.css" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/gofio-style.css?v=<?php echo date('U'); ?>" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/media-queries.css?v=<?php echo date('U'); ?>" media="all" />

</head>

<body <?php body_class(); ?>>

<?php
  if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open();
  } else {
      do_action( 'wp_body_open' );
  }
?>
<div id="page" class="hfeed site">
  <nav class="navbar navbar-expand-md bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand prev" href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gofioradio-logo-crop.png" alt="Gofio Radio Logo" class="img-fuid">
      </a>
      <div class="right-side d-flex justify-content-end">
        <div class="player-wrapper">
          <?php echo do_shortcode('[mp3j track="https://stream.xicnet.com:2424/gofioradio.mp3" style="nofullbars" volslider="n" title=""]'); ?>
          <p>Click play and start enjoying the happy loop.</p>
        </div>
        <img class="img-fuid" width="50" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/copyleft.svg" alt="Copyleft Logo">
      </div>
    </div>
  </nav>
