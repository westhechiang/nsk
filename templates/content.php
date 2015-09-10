<article <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('thumbnail' ); ?>
  <?php } else { ?>
    <div class="nsk-no-image">
      <p>No Image Available :(</p>
    </div>
  <?php }; ?>
  <div class="nsk-post-content">
    <!-- post header -->
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <!-- post meta -->
      <?php get_template_part('templates/entry-meta'); ?>

    <!-- post summary -->
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
