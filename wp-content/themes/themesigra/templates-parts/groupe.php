<section class="container seccion">
    <?php
    $args = array(
        'post_type' => 'categorie',
        'order' => 'ASC'
    );

    $categories = new WP_Query($args);

    ?>
    <section class="container seccion">
        <h2 class="text-center text-primary">Categories</h2>
        <div class="container d-flex just-center">
            <ul class="listado-grid">
                <?php
                $url = str_replace('/', "", $_SERVER['REQUEST_URI']);

                $age = str_replace('age', "", $url);

                while ($categories->have_posts()) {
                    $categories->the_post();
                    $esp = get_field('selectionner_lage');



                    foreach ($esp as $p) {

                        if ($age == $p) {

                ?>
                            <li class="card_age">
                                <div class="text-center">
                                    <?php the_title(); ?>
                                    <a href="<?php echo esc_url(get_permalink()); ?>?age=<?php echo $age; ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                            </li>

                <?php
                        }
                    }
                }
                wp_reset_postdata();

                ?>
            </ul>
        </div>

    </section>
    <div class="button-back">
        <a href="javascript:history.back()" class="d-flex just-center"><img width="10%" src="<?php echo get_template_directory_uri(); ?>/img/back_1.svg" alt="Retourner"></a>
        <div class="text-center">Retourner</div>
    </div>
</section>