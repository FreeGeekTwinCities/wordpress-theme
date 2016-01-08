<?php
get_header();
?>
<?php if (have_posts()) : ?>
<?php query_posts('category_name=topbar&posts_per_page=1'); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'post-topbar', get_post_format() ); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>
<ul class="large-block-grid-3 top-panels">
	<?php if ( have_posts() ) : ?>

		<?php query_posts('category_name=homepage&numberposts=3'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php $position = $wp_query->current_post+1; ?>
			<!-- <?php if ( $position == 2) : ?>
				<li>
					<ul class="large-block-grid-2">
			<?php endif; ?> -->
		<li class="panel-<?php echo $wp_query->current_post+1; ?>">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</li>
			<!-- <?php if ( $position == 3) : ?>
				</ul>
			</li>
			<?php endif; ?> -->
		<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>
</ul>
<?php wp_reset_query(); ?>
<div class="row">
	<div class="large-8 columns">
		<h4 class="news-header">FGTC News</h4>
		<?php if ( have_posts() ) : ?>

			<?php query_posts('category_name=news&numberposts=3'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="news-post panel-<?php echo $wp_query->current_post+1; ?>">
				<?php get_template_part( 'content', get_post_format() ); ?>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action('foundationPress_before_pagination'); ?>

		<?php endif;?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
