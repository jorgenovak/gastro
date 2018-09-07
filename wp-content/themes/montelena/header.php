<!-- HEAD.PHP -->


<!DOCTYPE html>
<html>
  <head>
    <!-- Iso -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title is the first phrase you see as a search result. -->
    <title>Gastronómica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <!-- Description of your website. Max 160 Characters-->
    <meta name="description" content="Page description. No longer than 155 characters."/>

    <!-- Most important word to use on specific page. / No more than 10 keyword phrases -->
    <meta name="keywords" content="words">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#2b2b2b">
    <meta name="theme-color" content="#ffffff">

    <!-- Allows robots to crawl your website. https://yoast.com/robots-meta-tags/ -->
    <meta name="robots" content="selection">

    <!-- Schema.org markup for Google+ and Pinterest  http://schema.org/docs/gs.html-->
    <meta itemprop="name" content="Area83">
    <meta itemprop="description" content="<?php bloginfo('description');?>">
    <meta itemprop="image" content="http://www.example.com/image.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="gastronomica">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Gastronomica">
    <meta name="twitter:description" content="<?php bloginfo('description');?>">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="http://www.example.com/image.jpg">


    <!-- Open Graph data for sharing in Facebook -->
    <meta property="og:title" content="Gastronomica"/>
    <meta property="og:type" content="Gastronomica"/>
    <meta property="og:url" content="http://www.gastronomica.mx/"/>
    <meta property="og:image" content="http://gastronomica.com/image.jpg"/>
    <meta property="og:description" content="<?php bloginfo('description');?>"/>
    <meta property="og:site_name" content="Gastronomica"/>
    <meta property="og:locale:alternate" content="es_MX"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Stylesheets -->
    <?php wp_head();?>
  </head>

  <body>
      <!-- LOADER -->
      <!-- <div class="loader">
          <img class="img center-xy" src="<?php echo get_template_directory_uri();?>/img/icons/a83.gif">
      </div> -->

      <!-- CONTENT -->
      <div class="site">
          <div class="site-content">
              <!-- Header -->
              <header class="transition-600">
                <div class="grid">
                  <div class="last2 fill-white">
                    <?php
                      $args = array (
                        'post_type' => 'header',
                      );
                      $wp_query = new WP_Query( $args );
                      if ( $wp_query -> have_posts() ) : while ( $wp_query -> have_posts() ) :  $wp_query -> the_post();
                      ?>
                      <!-- LINK - RESERVACIONES  -->
                      <a href="<?php
                      $custom_header_meta_fields_1_desc = get_post_custom_values('header_text_desc_1');
                      foreach ( $custom_header_meta_fields_1_desc as $key => $value ) {
                        echo "$value";
                      }
                      ?>" target="_blank" class="text-link reservaciones neuehas">
                        <?php
                        $custom_header_meta_fields_1 = get_post_custom_values('header_text_titulo_1');
                        foreach ( $custom_header_meta_fields_1 as $key => $value ) {
                          echo $value;
                        }
                        ?>
                      </a>

                      <div class="social-div">
                        <!-- LINK - INSTAGRAM  -->
                        <a href="<?php
                        $custom_header_meta_fields_2_desc = get_post_custom_values('header_text_desc_2');
                        foreach ( $custom_header_meta_fields_2_desc as $key => $value ) {
                          echo "$value";
                        }
                        ?>" class="">
                          <i class="fab fa-<?php
                          $custom_header_meta_fields_2 = get_post_custom_values('header_text_titulo_2');
                          foreach ( $custom_header_meta_fields_2 as $key => $value ) {
                            echo $value;
                          }
                          ?>"></i>
                        </a>

                        <!-- LINK - FACEBOOK  -->
                        <a href="<?php
                        $custom_header_meta_fields_3_desc = get_post_custom_values('header_text_desc_3');
                        foreach ( $custom_header_meta_fields_3_desc as $key => $value ) {
                          echo "$value";
                        }
                        ?>" class="">
                          <i class=" fab fa-<?php
                          $custom_header_meta_fields_3 = get_post_custom_values('header_text_titulo_3');
                          foreach ( $custom_header_meta_fields_3 as $key => $value ) {
                            echo $value;
                          }
                          ?>"></i>
                        </a>
                      </div>
                    <?php endwhile; endif; wp_reset_postdata();wp_reset_query(); ?>
                  </div>
                <div>
              </header>
