<?php
get_header();
?>
  <?php
  $url = str_replace('/', "", $_SERVER['REDIRECT_URL']);
  $cat = str_replace('categorie', "", $url);
  if ($cat == 'ado') {
    get_template_part('templates-parts/groupe_ado');
  } else {
    get_template_part('templates-parts/video');
  }

  ?>
<?php
get_footer();
?>