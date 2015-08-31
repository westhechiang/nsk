<?php
  /**
   * Template Name: Menu
   * Description: Creates a gallery of menu items
   * Notes: Make sure you have support for thumbnails enabled
   */

  get_template_part( 'templates/page', 'header' );

  // query the custom post type to display
  $args = array( 'post_type' => 'dimsum' );
  $query_dimsum = new WP_Query( $args );

  $args = array();
  $args = array( 'post_type' => 'bbq' );
  $query_bbq = new WP_Query( $args );
?>

<!-- menu container -->
<div class="nsk-menu-container">
  <div class="nsk-menu-section">
    <!-- title for Old School Dimsum -->
    <div class="nsk-menu-title">
      <!-- using an image for part of the title -->
      <img src="<?php the_field( 'menu:_dimsum_title' ); ?>" />
        <!-- custom editable field for setting dim sum pricing -->
      <p><?php the_field( 'menu:_dimsum_pricing' ); ?></p>
    </div>

    <?php if ( $query_dimsum->have_posts() ) : ?>
      <?php while ( $query_dimsum->have_posts() ) : ?>
        <?php $query_dimsum->the_post(); ?>

        <div class="nsk-menu-item">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
          <?php endif; ?>
          <p class="nsk-item title">
            <?php echo get_the_title( $post->ID ); ?>
          </p>
          <p class="nsk-item description">
            <?php echo get_post_meta( $post->ID, "Description", true ); ?>
          </p>
          <p class="nsk-item description">
            <?php echo get_post_meta( $post->ID, "Description 2", true ); ?>
          </p>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    <?php endif; ?>
  </div>

  <div class="nsk-menu-section">
    <!-- title for New School BBQ -->
    <div class="nsk-menu-title">
      <!-- using an image for part of the title -->
      <img src="<?php the_field( 'menu:_bbq_title' ); ?>" />
    </div>

    <?php if ( $query_bbq->have_posts() ) : ?>
      <?php while ( $query_bbq->have_posts() ) : ?>
        <?php $query_bbq->the_post(); ?>

        <div class="nsk-menu-item">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
          <?php endif; ?>
          <p class="nsk-item title">
            <?php echo get_the_title( $post->ID ); ?>
          </p>
          <p class="nsk-item description">
            <?php echo get_post_meta( $post->ID, "Description", true ); ?>
          </p>
          <p class="nsk-item description">
            <?php echo get_post_meta( $post->ID, "Description 2", true ); ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_template_part( 'templates/page', 'footer' ); ?>

