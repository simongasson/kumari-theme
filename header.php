<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url') ?>/style.css">

    <?php wp_head(); ?>
  </head>

  <div class="topnav">
    <!-- navbar -->
    <a href="#home"><img class="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" /></a>
    <a class="right" href="#contact">Contact Us</a>
    <a class="right" href="#stock">Our Stock</a>
    <a class="right" href="#home">Home</a>
  </div>