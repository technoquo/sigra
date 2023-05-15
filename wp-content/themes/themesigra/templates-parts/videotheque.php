<section class="container seccion">
    <section class="container seccion">
        <h2 class="text-center text-primary">Sélectionnez le rang entre votre âge</h2>
        <div class="container d-flex just-center">
            <ul class="listado-grid">
                <?php
                $args = array(
                    'post_type' => 'age',
                    'order' => 'ASC'
                );

                $ages = new WP_Query($args);

                while ($ages->have_posts()) {
                    $ages->the_post();
                    $link = get_field('link');
                ?>
                    <li class="card_age">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </li>

                <?php
                }
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </section>
</section>