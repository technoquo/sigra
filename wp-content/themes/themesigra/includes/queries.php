<?php

function sigra_subsides()
{
?>
    <ul class="listado-subsides swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'subsides'
        );

        $subsides = new WP_Query($args);


        while ($subsides->have_posts()) {
            $subsides->the_post();
        ?>
            <li class="subside center swiper-slide">
                <div class="subside-footer">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php }
function videos()
{
    global $post;

    $url = str_replace('/', "", $_SERVER['REDIRECT_URL']);
    $cat = str_replace('categorie', "", $url);

    $terminos = array(
        array(
            'taxonomy' => 'category',
            'field'     => 'slug',
            'terms'  =>  $cat

        )
    );

    $args = array(
        'post_type' => 'video',
        'post_type'           => 'video',
        'post_status'         => 'publish',
        'tax_query'            => $terminos
    );

    $videos = new WP_Query($args);
?>

    <div class="swiper-wrapper">
        <?php



        while ($videos->have_posts()) {
            $videos->the_post();

            $id_video = get_post_meta($post->ID, 'id_video', true);

            $esp = get_field('marquer_les_ages');

            foreach ($esp as $ind) {
                if ($ind == $_GET['age']) { ?>
                    <div class="swiper-slide">
                        <?php echo the_title() . '-' . $id_video; ?>
                    </div>
        <?php

                }
            }
        }
        wp_reset_postdata();
        ?>
        <div class="swiper-pagination"></div>
    </div>
<?php } ?>