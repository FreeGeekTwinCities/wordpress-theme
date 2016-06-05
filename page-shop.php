<?php
/*
Template Name: Shop
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="row">
				<?php
					// If a feature image is set, get the id, so it can be injected as a css background property
					if ( has_post_thumbnail( $post->ID ) ) :
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						$image = $image[0];
						?>
					<div class="large-12 columns">
						<header id="featured-hero"
										role="banner"
										style="background-image: url('<?php echo $image ?>');">
							<h3 class="post-title small-3 medium-3 large-3 columns">
								<?php echo get_the_title(); ?>
							</h3>
						</header>
					</div>
				<?php
					endif;
				?>

				<!-- <header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header> -->
					<div class="entry-content large-6 columns">
						<?php the_content(); ?>
					</div>
					<div class="entry-content large-6 columns">
						<h3>Currently in Stock</h3>
						<div class="store-embed">
							<?php echo get_field("store_stock"); ?>
							<iframe src="https://docs.google.com/spreadsheets/d/1uW4onVv6rOp3WPN_MhwR8agiDk2gAHGvwNAwrBWrg9Y/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
						</div>
					</div>
				</div>
				<footer>
				</footer>
			</article>
		<?php endwhile; // End the loop ?>
  </div>
</div>
<?php get_footer(); ?>
