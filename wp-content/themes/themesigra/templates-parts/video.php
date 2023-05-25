<section class="container seccion">
    <?php
    global $post;

    $url = str_replace('/', "", $_SERVER['REDIRECT_URL']);
    $categorie = str_replace('categorie', "", $url);

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
        <h2 class="title_categorie text-primary"><?php echo str_replace("-", " ", $categorie); ?> pour l'âge: <?php echo $_GET['age']; ?></h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php

                while ($videos->have_posts()) {
                    $videos->the_post();

                    $id_video = get_post_meta($post->ID, 'id_video', true);

                    $esp = get_field('marquer_les_ages');

                    foreach ($esp as $ind) {
                        if ($ind == $_GET['age']) { ?>
                            <div class="swiper-slide">
                                <img src="https://vumbnail.com/<?php echo $id_video; ?>.jpg" alt="<?php the_title(); ?>" />
                                <div class="title"><?php the_title() ?></div>
                                <div class="sign"><a class="js-modal-btn d-flex just-center" data-video-id="<?php echo $id_video; ?>">Visionnez <img class="signlanguage" src="<?php echo get_template_directory_uri(); ?>/img/signlanguage.png" alt="Visionnez"></a></div>
                            </div>

                <?php
                        }
                    }
                }

                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper mySwiper_m">
    </section>
    <div class="swiper-wrapper">
        <?php

        while ($videos->have_posts()) {
            $videos->the_post();

            $id_video = get_post_meta($post->ID, 'id_video', true);

            $esp = get_field('marquer_les_ages');

            foreach ($esp as $ind) {
                if ($ind == $_GET['age']) { ?>
                    <div class="swiper-slide">
                        <iframe width="100%" height="200" src="https://player.vimeo.com/video/<?php echo $id_video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        <div class="title"> <?php the_title() ?></div>
                    </div>

        <?php
                }
            }
        }

        ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</section>

<div class="d-flex just-center button-back">
    <div>
        <a href="http://sigra.test/videotheque/" class="d-flex just-center"><img width="10%" src="<?php echo get_template_directory_uri(); ?>/img/back.svg" alt="Retourner"></a>
        <div class="text-center">Revenir</div>
    </div>
    <div>
        <a href="javascript:history.back()" class="d-flex just-center"><img width="10%" src="<?php echo get_template_directory_uri(); ?>/img/back_1.svg" alt="Retourner"></a>
        <div class="text-center">Retourner</div>
    </div>
</div>
</section>