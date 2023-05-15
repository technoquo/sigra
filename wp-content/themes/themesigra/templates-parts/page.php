<?php
while (have_posts()) :
    the_post();

    if (has_post_thumbnail()) {
        //  the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        // the_post_thumbnail();
    }


    the_content();

endwhile;
