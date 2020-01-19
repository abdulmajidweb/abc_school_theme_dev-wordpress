<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

</head>
<body style="background-color:#E9EBEE;" <?php body_class(); ?>>
  <!-- Image and text -->
  <div class="container-fluid">
    <nav class="navbar navbar-light shadow" style="background-color:#8686f0;">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-badge.png" style="width: 30px; height: 30px;" class="d-inline-block align-top" alt="">
        <span class="h5"><?php bloginfo('name'); ?></span>

      </a>
      <?php get_search_form(); ?>
    </nav>
  </div>