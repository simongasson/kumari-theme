<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

    <?php wp_head(); ?>
  </head>

  <div class="topnav">
    <!-- navbar -->
    <img class="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" />
    <a href="#contact">Contact Us</a>
    <a href="#stock">Our Stock</a>
    <a href="#home">Home</a>
  </div>