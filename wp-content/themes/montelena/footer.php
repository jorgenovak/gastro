              <!-- FOOTER.PHP -->
              <footer class="transition-600">
                <div class="grid">
                  <div class="" hidden>
                    <a href="javascript:void(0)" class="menuMobile">
                      <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-menu.svg" alt="Menu" class="menu-open transition">
                      <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-menu-close.svg" alt="Menu" class="transition menu-close">
                    </a>
                  </div>
                  <div class="text-center" tabindex="1">
                    <a href="<?php echo home_url() ?>" data-slide="section-01" class="homeLink link logoLink">
                      <img src="<?php echo get_template_directory_uri();?>/img/logo-w.svg" alt="Logo Gastronómica" class="logo">
                      <img src="<?php echo get_template_directory_uri();?>/img/logo-w.svg" alt="Logo Gastronómica" class="logo-min">
                    </a>
                  </div>
                  <?php
                    $args = array (
                      'post_type' => 'footer',
                    );
                    $wp_query = new WP_Query( $args );
                    if ( $wp_query -> have_posts() ) : while ( $wp_query -> have_posts() ) :  $wp_query -> the_post();
                  ?>
                  <!-- Link - 01 -->
                  <a href="<?php
                  $custom_footer_meta_fields_1_desc = get_post_custom_values('footer_text_desc_1');
                  foreach ( $custom_footer_meta_fields_1_desc as $key => $value ) {
                    echo "$value";
                  }
                  ?>" class="link transition color-white text-link filosofia" tabindex="2">
                    <?php
                    $custom_footer_meta_fields_1 = get_post_custom_values('footer_text_titulo_1');
                    foreach ( $custom_footer_meta_fields_1 as $key => $value ) {
                      echo $value;
                    }
                    ?>


                  </a>
                  <!-- Link - 02 -->
                  <a href="<?php
                  $custom_footer_meta_fields_2_desc = get_post_custom_values('footer_text_desc_2');
                  foreach ( $custom_footer_meta_fields_2_desc as $key => $value ) {
                    echo "$value";
                  }
                  ?>" class="link transition color-white text-link filosofia" tabindex="3">
                    <?php
                    $custom_footer_meta_fields_2 = get_post_custom_values('footer_text_titulo_2');
                    foreach ( $custom_footer_meta_fields_2 as $key => $value ) {
                      echo $value;
                    }
                    ?>

                  </a>
                  <!-- Links Div - 03/06  -->
                  <div class="links-div fill-white">
                    <!-- Link - 03 -->
                    <a href="<?php
                    $custom_footer_meta_fields_3_desc = get_post_custom_values('footer_text_desc_3');
                    foreach ( $custom_footer_meta_fields_3_desc as $key => $value ) {
                      echo "$value";
                    }
                    ?>" class="link text-link transition color-black neuehas" tabindex="4">
                      <?php
                      $custom_footer_meta_fields_3 = get_post_custom_values('footer_text_titulo_3');
                      foreach ( $custom_footer_meta_fields_3 as $key => $value ) {
                        echo $value;
                      }
                      ?>
                    </a>
                    <!-- Links - 04 -->
                    <a href="<?php
                    $custom_footer_meta_fields_4_desc = get_post_custom_values('footer_text_desc_4');
                    foreach ( $custom_footer_meta_fields_4_desc as $key => $value ) {
                      echo "$value";
                    }
                    ?>" class="link text-link transition color-black neuehas" tabindex="5">
                      <?php
                      $custom_footer_meta_fields_4 = get_post_custom_values('footer_text_titulo_4');
                      foreach ( $custom_footer_meta_fields_4 as $key => $value ) {
                        echo $value;
                      }
                      ?>
                    </a>
                    <!-- Link - 05 -->
                    <a href="<?php
                    $custom_footer_meta_fields_5_desc = get_post_custom_values('footer_text_desc_5');
                    foreach ( $custom_footer_meta_fields_5_desc as $key => $value ) {
                      echo "$value";
                    }
                    ?>" class="link text-link transition color-black neuehas" tabindex="6">
                      <?php
                      $custom_footer_meta_fields_5 = get_post_custom_values('footer_text_titulo_5');
                      foreach ( $custom_footer_meta_fields_5 as $key => $value ) {
                        echo $value;
                      }
                      ?>

                    </a>
                    <!-- Link - 06 -->
                    <a href="<?php
                    $custom_footer_meta_fields_6_desc = get_post_custom_values('footer_text_desc_6');
                    foreach ( $custom_footer_meta_fields_6_desc as $key => $value ) {
                      echo "$value";
                    }
                    ?>" class="link text-link transition color-black neuehas" tabindex="7">
                      <?php
                      $custom_footer_meta_fields_6 = get_post_custom_values('footer_text_titulo_6');
                      foreach ( $custom_footer_meta_fields_6 as $key => $value ) {
                        echo $value;
                      }
                      ?>
                    </a>
                  </div>
                  <!-- Link - 07 -->
                  <a href="<?php
                  $custom_footer_meta_fields_7_desc = get_post_custom_values('footer_text_desc_7');
                  foreach ( $custom_footer_meta_fields_7_desc as $key => $value ) {
                    echo "$value";
                  }
                  ?>" target="_blank" class="link text-link transition fill-white color-black last-column neuehas" tabindex="8">
                    <?php
                    $custom_footer_meta_fields_7 = get_post_custom_values('footer_text_titulo_7');
                    foreach ( $custom_footer_meta_fields_7 as $key => $value ) {
                      echo $value;
                    }
                    ?>

                  </a>
                <?php endwhile; endif; wp_reset_postdata();wp_reset_query(); ?>
                </div>
              </footer>
          </div>
      </div>


      <!-- Js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!--CDN link for  TweenMax-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <!-- Mouse -->
      <!-- <script src="js/plugins/assets.js"></script>
      <script src="js/plugins/cursor.js"></script> -->
      <!-- Regular -->
      <?php wp_footer();?>


      <!-- Loader -->
      <script>
        setTimeout(function(){
          $(".loaderGif").fadeOut(100);
        }, 1500);
      </script>
  </body>
</html>
