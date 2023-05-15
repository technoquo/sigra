<?php
get_header();



?>

<main>
    <section class="bienvenue seccion container text-center">
        <h2 class="text-primary"><?php the_field('bienvenue_titre'); ?></h2>
        <?php the_field('bienvenue_texte'); ?>
    </section>
    <section class="mission">
        <?php
        $image_one = get_field('image_un');
        $imagen_one = $image_one['sizes']['medium_large'];
        $text_un = get_field('text_un');
        $text_deux = get_field('text_deux');
        $text_trois = get_field('text_trois');

        $url_one = get_field('url_one');
        ?>
        <div class="objetive">

            <img src="<?php echo esc_attr($imagen_one); ?>" alt="Imagen <?php echo esc_attr($text); ?>">
            <p><a href="<?php echo esc_url($url_one); ?>"><?php echo esc_html($text_un); ?></a></p>


        </div>
        <div class="objetive">
            <?php
            $image_deux = get_field('image_deux');
            $imagen_deux = $image_deux['sizes']['medium_large'];
            $text = $image_deux['title'];
            $url_deux = get_field('url_deux');
            ?>
            <img src="<?php echo esc_attr($imagen_deux); ?>" alt="Imagen <?php echo esc_attr($text); ?>">
            <p><a href="<?php echo esc_url($url_deux); ?>"><?php echo esc_html($text_deux); ?></a></p>


        </div>
        <div class="objetive">
            <?php
            $image_trois = get_field('image_trois');
            $imagen_trois = $image_trois['sizes']['medium_large'];
            $text = $image_trois['title'];
            $url_trois = get_field('url_trois');
            ?>
            <img src="<?php echo esc_attr($imagen_trois); ?>" alt="Imagen <?php echo esc_attr($text); ?>">
            <p><a href="<?php echo esc_url($url_trois); ?>"><?php echo esc_html($text_trois); ?></a></p>

        </div>
    </section>
    <section class="container seccion seccion-instagram">
        <?php
        $first_instagram = get_field('premier_instagram');
        $deuxieme_instagram = get_field('deuxieme_instagram');
        $troisieme_instragramme = get_field('troisieme_instragramme');
        ?>
        <div class="d-flex container just-center instagram">
            <div>
                <?php echo $first_instagram; ?>
            </div>
            <div>
                <?php echo $deuxieme_instagram; ?>
            </div>
            <div>
                <?php echo $troisieme_instragramme; ?>
            </div>
            <script async src="https://www.instagram.com/embed.js"></script>
        </div>
    </section>
    <section class="subsidess">
        <h2 class="text-center text-primary">Subsides</h2>
        <div class="contenedor-subsides swiper swiper_subsides">
            <?php sigra_subsides(); ?>
        </div>
    </section>
</main>


<?php
get_footer();
?>