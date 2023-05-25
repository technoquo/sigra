<?php
get_header();
?>

<pre>
<?php $title = get_field('titre');
$image = get_field('image');
$description = get_field('description');
$video = get_field('video');
?>
    
</pre>
<main class="container seccion boutique">
    <div class="d-flex just-center">
        <h1><?php echo $title; ?></h1>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>">

    </div>

    <?php
    get_template_part('templates-parts/page');
    ?>

    <div class="frame">
        <iframe width="100%" height="100%" title="Lula - promo" src="https://player.vimeo.com/video/<?php echo $video; ?>" frameborder="0" allowfullscreen="" style="position:absolute; top:0; left: 0">
        </iframe>
    </div>


</main>
<?php
get_footer();
?>