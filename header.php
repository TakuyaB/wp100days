<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo(); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="wrapper">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo(); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>
    </div>
  </header>