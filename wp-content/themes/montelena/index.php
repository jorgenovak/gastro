        <!-- THEME INDEX -->
        <!-- GET HEAD.PHP -->
        <?php get_header(); ?>
        <!-- HOME -->

        <?php   if ( is_page('home') ) { ?>
            <section id="home">
            <!-- Loader -->
            <div class="loaderGif" style="background: white;">
              <div style="background: url(<?php echo get_post_meta(get_the_ID(),'field_image_loader_1',true)?>); background-position: center center; background-repeat: no-repeat; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px;  height: 400px;" ></div>
            </div>
            <!-- Background Gif -->
            <div class="background"
              <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_back_1', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_back_1', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_back_1', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_back_1', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?> >

              <!-- Metabox Art_1-->
              <?php if ( class_exists('typeMetabox')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type', true);
                $image_val = get_post_meta(get_the_ID(),'field_image', true);
                $video_val = get_post_meta(get_the_ID(),'field_video', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_2-->
              <?php if ( class_exists('typeMetabox_2')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_2', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_2', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_2', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_2', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_2', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_2', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_2', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_2', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_3-->
              <?php if ( class_exists('typeMetabox_3')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_3', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_3', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_3', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_3', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_3', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_3', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_3', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_3', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_4-->
              <?php if ( class_exists('typeMetabox_4')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_4', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_4', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_4', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_4', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_4', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_4', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_4', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_4', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_5-->
              <?php if ( class_exists('typeMetabox_5')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_5', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_5', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_5', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_5', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_5', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_5', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_5', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_5', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_6 -->
              <?php if ( class_exists('typeMetabox_6')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_6', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_6', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_6', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_6', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_6', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_6', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_6', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_6', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_7 -->
              <?php if ( class_exists('typeMetabox_7')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_7', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_7', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_7', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_7', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_7', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_7', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_7', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_7', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
              <!-- Metabox Art_8 -->
              <?php if ( class_exists('typeMetabox_8')) { ?>
                <div class="metaboxArt"
                <?php
                $type_val = get_post_meta(get_the_ID(),'field_type_8', true);
                $image_val = get_post_meta(get_the_ID(),'field_image_8', true);
                $video_val = get_post_meta(get_the_ID(),'field_video_8', true);
                $hexa_val = get_post_meta(get_the_ID(),'field_hexa_8', true);
                 if( $type_val === "image" ):
                   echo "style='background: url($image_val)' ";
                  elseif( $type_val === "video"  ):
                     echo "style='background: url($video_val)' ";
                  else:
                    echo "style='background: $hexa_val' ";
                  endif;
                   ?>
                data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>">
                <?php if ( get_post_meta(get_the_ID(), 'field_text_8', true)) {?>
                  <!--  IF text -->
                  <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_8', true ); ?></p>
                  <?php }?>
                  <?php if ( get_post_meta(get_the_ID(), 'field_video_8', true)) {?>
                    <!-- IF video-->
                    <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>"
                    src="<?php echo get_post_meta( get_the_ID(), 'field_video_8', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                <?php }?>
                </div>
              <?php }?>
            </div>
          </section>
        <?php } ?>
        <!-- LA NACIONAL -->
        <?php   if ( is_page('nacional') ) { ?>
          <section id="nacional">
            <h1>NACIONAL</h1>
          </section>
        <?php } ?>
        <!--  GALLO 71 -->
        <?php   if ( is_page('gallo') ) { ?>
          <section id="gallo">
            <h1>GALLO</h1>
          </section>
        <?php } ?>
        <!--  MERCURIO -->
        <?php   if ( is_page('mercurio') ) { ?>
          <!-- Loader -->
          <div class="loaderGif" style="background: white;">
            <div style="background: url(<?php echo get_post_meta(get_the_ID(),'field_image_loader_1',true)?>); background-position: center center; background-repeat: no-repeat; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px;  height: 400px;" ></div>
          </div>

          <section id="mercurio">
            <div class="images-holder" data-from="<?php echo get_template_directory_uri();?>">
              <!-- Photo - 01 -->
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
            </div>
            <!-- Metabox Art_1-->
            <?php if ( class_exists('typeMetabox')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type', true);
              $image_val = get_post_meta(get_the_ID(),'field_image', true);
              $video_val = get_post_meta(get_the_ID(),'field_video', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_2-->
            <?php if ( class_exists('typeMetabox_2')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_2', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_2', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_2', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_2', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_2', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_2', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_2', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_2', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_3-->
            <?php if ( class_exists('typeMetabox_3')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_3', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_3', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_3', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_3', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_3', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_3', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_3', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_3', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_4-->
            <?php if ( class_exists('typeMetabox_4')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_4', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_4', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_4', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_4', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_4', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_4', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_4', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_4', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_5-->
            <?php if ( class_exists('typeMetabox_5')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_5', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_5', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_5', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_5', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_5', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_5', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_5', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_5', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_6 -->
            <?php if ( class_exists('typeMetabox_6')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_6', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_6', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_6', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_6', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_6', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_6', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_6', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_6', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_7 -->
            <?php if ( class_exists('typeMetabox_7')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_7', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_7', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_7', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_7', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_7', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_7', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_7', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_7', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>
            <!-- Metabox Art_8 -->
            <?php if ( class_exists('typeMetabox_8')) { ?>
              <div class="metaboxArt"
              <?php
              $type_val = get_post_meta(get_the_ID(),'field_type_8', true);
              $image_val = get_post_meta(get_the_ID(),'field_image_8', true);
              $video_val = get_post_meta(get_the_ID(),'field_video_8', true);
              $hexa_val = get_post_meta(get_the_ID(),'field_hexa_8', true);
               if( $type_val === "image" ):
                 echo "style='background: url($image_val)' ";
                elseif( $type_val === "video"  ):
                   echo "style='background: url($video_val)' ";
                else:
                  echo "style='background: $hexa_val' ";
                endif;
                 ?>
              data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>">
              <?php if ( get_post_meta(get_the_ID(), 'field_text_8', true)) {?>
                <!--  IF text -->
                <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_8', true ); ?></p>
                <?php }?>
                <?php if ( get_post_meta(get_the_ID(), 'field_video_8', true)) {?>
                  <!-- IF video-->
                  <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>"
                  src="<?php echo get_post_meta( get_the_ID(), 'field_video_8', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
              <?php }?>
              </div>
            <?php }?>

            <!--  -->
            <!-- BACKGROUND IMAGES -------------------------->
            <?php
              $args = array (
                'post_type' => 'mercurio',
              );
              $wp_query = new WP_Query( $args );
              if ( $wp_query -> have_posts() ) : while ( $wp_query -> have_posts() ) :  $wp_query -> the_post();
            ?>
              <?php
                $custom_meta_fields_1 = get_post_custom_values('skinjoint_image_01');
                foreach ( $custom_meta_fields_1 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
                $custom_meta_fields_2 = get_post_custom_values('skinjoint_image_02');
                foreach ( $custom_meta_fields_2 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
                $custom_meta_fields_3 = get_post_custom_values('skinjoint_image_03');
                foreach ( $custom_meta_fields_3 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
                $custom_meta_fields_4 = get_post_custom_values('skinjoint_image_04');
                foreach ( $custom_meta_fields_4 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
                $custom_meta_fields_5 = get_post_custom_values('skinjoint_image_05');
                foreach ( $custom_meta_fields_5 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
                $custom_meta_fields_6 = get_post_custom_values('skinjoint_image_06');
                foreach ( $custom_meta_fields_6 as $key => $value ) {
                  echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
                }
              ?>
              <div class="text-area">
                <?php echo get_the_content() ?>
              </div>
              <?php endwhile; endif; wp_reset_postdata();wp_reset_query(); ?>
          </section>
        <?php } ?>
        <!--  SKIN JOINT-->
        <?php   if ( is_page('skin_joint') ) { ?>
          <!-- Loader -->
          <div class="loaderGif" style="background: white;">
            <div style="background: url(<?php echo get_post_meta(get_the_ID(),'field_image_loader_1',true)?>); background-position: center center; background-repeat: no-repeat; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px;  height: 400px;" ></div>
          </div>

          <!-- Metabox Art_1-->
          <?php if ( class_exists('typeMetabox')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type', true);
            $image_val = get_post_meta(get_the_ID(),'field_image', true);
            $video_val = get_post_meta(get_the_ID(),'field_video', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_2-->
          <?php if ( class_exists('typeMetabox_2')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_2', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_2', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_2', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_2', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_2', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_2', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_2', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_2', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_2', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_2', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_3-->
          <?php if ( class_exists('typeMetabox_3')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_3', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_3', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_3', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_3', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_3', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_3', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_3', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_3', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_3', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_3', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_4-->
          <?php if ( class_exists('typeMetabox_4')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_4', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_4', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_4', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_4', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_4', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_4', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_4', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_4', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_4', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_4', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_5-->
          <?php if ( class_exists('typeMetabox_5')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_5', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_5', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_5', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_5', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_5', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_5', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_5', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_5', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_5', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_5', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_6 -->
          <?php if ( class_exists('typeMetabox_6')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_6', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_6', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_6', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_6', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_6', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_6', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_6', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_6', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_6', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_6', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_7 -->
          <?php if ( class_exists('typeMetabox_7')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_7', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_7', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_7', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_7', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_7', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_7', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_7', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_7', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_7', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_7', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>
          <!-- Metabox Art_8 -->
          <?php if ( class_exists('typeMetabox_8')) { ?>
            <div class="metaboxArt"
            <?php
            $type_val = get_post_meta(get_the_ID(),'field_type_8', true);
            $image_val = get_post_meta(get_the_ID(),'field_image_8', true);
            $video_val = get_post_meta(get_the_ID(),'field_video_8', true);
            $hexa_val = get_post_meta(get_the_ID(),'field_hexa_8', true);
             if( $type_val === "image" ):
               echo "style='background: url($image_val)' ";
              elseif( $type_val === "video"  ):
                 echo "style='background: url($video_val)' ";
              else:
                echo "style='background: $hexa_val' ";
              endif;
               ?>
            data-width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>" data-height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>">
            <?php if ( get_post_meta(get_the_ID(), 'field_text_8', true)) {?>
              <!--  IF text -->
              <p class="text"><?php echo get_post_meta( get_the_ID(), 'field_text_8', true ); ?></p>
              <?php }?>
              <?php if ( get_post_meta(get_the_ID(), 'field_video_8', true)) {?>
                <!-- IF video-->
                <iframe frameborder="0" height="<?php echo get_post_meta( get_the_ID(), 'field_height_8', true ); ?>" width="<?php echo get_post_meta( get_the_ID(), 'field_width_8', true ); ?>"
                src="<?php echo get_post_meta( get_the_ID(), 'field_video_8', true ); ?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            <?php }?>
            </div>
          <?php }?>

          <section id="skinjoint">
            <div class="images-holder" data-from="<?php echo get_template_directory_uri();?>">
              <!-- Photo - 01 -->
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
              <div class="image-part"  data-count="0"></div>
            </div>
          </section>

          <!-- BACKGROUND IMAGES -------------------------->
          <?php
            $args = array (
              'post_type' => 'skinjoint',
            );
            $wp_query = new WP_Query( $args );
            if ( $wp_query -> have_posts() ) : while ( $wp_query -> have_posts() ) :  $wp_query -> the_post();
          ?>
            <?php
              $custom_meta_fields_1 = get_post_custom_values('skinjoint_image_01');
              foreach ( $custom_meta_fields_1 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
              $custom_meta_fields_2 = get_post_custom_values('skinjoint_image_02');
              foreach ( $custom_meta_fields_2 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
              $custom_meta_fields_3 = get_post_custom_values('skinjoint_image_03');
              foreach ( $custom_meta_fields_3 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
              $custom_meta_fields_4 = get_post_custom_values('skinjoint_image_04');
              foreach ( $custom_meta_fields_4 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
              $custom_meta_fields_5 = get_post_custom_values('skinjoint_image_05');
              foreach ( $custom_meta_fields_5 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
              $custom_meta_fields_6 = get_post_custom_values('skinjoint_image_06');
              foreach ( $custom_meta_fields_6 as $key => $value ) {
                echo "<div class='image-array' data-count='0' hidden data-array='$value;'></div>";
              }
            ?>
            <?php endwhile; endif; wp_reset_postdata();wp_reset_query(); ?>
        <?php } ?>
    </div>
</div>
<!-- GET FOOTER.PHP -->
<?php get_footer(); ?>
