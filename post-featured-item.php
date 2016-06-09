<div class="row">
  <article class="large-12 columns featured-item">
    <?php
    if ( has_post_thumbnail( $post->ID ) ) :
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0];
      ?>
    <header style="background-image: url('<?php echo $image ?>');">
      <h4 class="entry-title"><?php the_title(); ?></h4>
    </header>
    <?php endif; ?>
    <div class="entry-content large-12 columns">
      <?php the_content(); ?>
    </div>
  </article>
</div>
