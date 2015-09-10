<?php
/**
 * Template Name: Press
 * Description: NSK Press Template
 */
?>

<?php get_template_part( 'templates/page', 'header' ); ?>

<div class="nsk-press-container">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
    <?php endwhile; ?>
</div>

<?php get_template_part( 'templates/page', 'footer' ); ?>