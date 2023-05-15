<?php
get_header();
?>
<main>
    <?php
    $args = array(
        'post_type' => 'abonnements',
        'order' => 'ASC'
    );

    $abonnements = new WP_Query($args);

    ?>

    <section class="container seccion">
        <h3 class="text-center text-primary">NOS ABONNEMENTS</h3>
        <div class="container d-flex just-center">
            <ul class="listado-grid-abonnement">
                <?php
                while ($abonnements->have_posts()) {
                    $abonnements->the_post();
                ?>
                    <li class="card card_abonnements" style="background-color: <?php echo the_field('color'); ?>">
                        <div class="text-center">
                            <div class="title">
                                <?php the_field('text'); ?>
                            </div>
                            <div class="price">
                                <?php the_field('text_prix'); ?>
                            </div>
                            <div class="button">
                                <a href="<?php echo esc_url(the_field('url')); ?>" target="_blank">
                                    <?php the_field('bouton_de_texte'); ?>
                                </a>
                            </div>
                        </div>

                    </li>

                <?php


                }
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </section>

</main>
<?php
get_footer();
?>