<?php
/**
 * Template Name: Home
 * Description: Static home page for New School Kitchen
 *              with editable slider, quote, home text,
 *              home images
 */

/**
 *
 *  TODO:
 *  - Social Media Icon links
 *
 */

?>

<?php get_template_part( 'templates/page', 'header' ); ?>
<!-- slider -->
<?php echo do_shortcode( "[metaslider id=5]" ); ?>
<div class="content home-content">
  <div class="home-quote">
    <p>
      <?php the_field( 'home_quote' ); ?>
    </p>
  </div>

  <div class="home-content-left">
    <p>
      <?php the_field( 'home_text' ); ?>
    </p>
  </div>

  <div class="home-content-right">
    <img src="<?php the_field( 'home_image' ); ?>" alt="new school kitchen">
  </div>
</div>