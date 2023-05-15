<section class="container seccion">
    <?php
    global $post;


    $categorie = str_replace('/', "", $_SERVER['REDIRECT_URL']);


    $terminos = array(
        array(
            'taxonomy' => 'category',
            'field'     => 'slug',
            'terms'  =>  $categorie

        )
    );

    $args = array(
        'post_type'           => 'video',
        'post_status'         => 'publish',
        'orderby'             => 'title',
        'order'               => 'ASC',
        'tax_query'           => $terminos
    );

    $videos = new WP_Query($args);


    ?>

    <section class="container seccion video">


        <h2 class="title_categorie text-primary d-flex just-center items-center"><?php echo str_replace("-", " ", $categorie); ?><img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo  $categorie; ?>.png" alt="<?php echo $categorie; ?>"></h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php

                while ($videos->have_posts()) {
                    $videos->the_post();
                    $id_video = get_post_meta($post->ID, 'id_video', true);




                ?>
                    <div class="swiper-slide">
                        <iframe width="100%" height="200" src="https://player.vimeo.com/video/<?php echo $id_video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        <div class="title"><?php the_title() ?></div>
                        <div class="sign"><a class="js-modal-btn d-flex just-center" data-video-id="<?php echo $id_video; ?>">Visionnez <img class="signlanguage" src="<?php echo get_template_directory_uri(); ?>/img/signlanguage.png" alt="Visionnez"></a></div>
                    </div>

                <?php


                }

                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper mySwiper_m">
            <div class="swiper-wrapper">
                <?php

                while ($videos->have_posts()) {
                    $videos->the_post();

                    $id_video = get_post_meta($post->ID, 'id_video', true); { ?>
                        <div class="swiper-slide">
                            <iframe width="100%" height="200" src="https://player.vimeo.com/video/<?php echo $id_video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                            <div class="title"> <?php the_title() ?></div>
                        </div>

                <?php
                    }
                }

                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

</section>
</section>