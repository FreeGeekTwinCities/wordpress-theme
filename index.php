<?php
get_header();
?>

<!-- <header class="splash">

	<div class="splash-title">
		<span>
		Our mission at Free Geek Twin Cities is to reuse or recycle computers
		and to provide access to computers, the internet, education and job skills
		in exchange for community service.
		</span>
	</div>
	<div class="splash-panels">
		<div class="row">
			<div class="large-3 columns">
				<div class="panel">
					<h2>When</h2>
					Wed  Thur   Fri  Sat   Sun
					Noon till 5 pm
					Closed:   Mon &amp; Tues
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h2>Where</h2>
					2537 25th Ave S
					in Minneapolis
					W of Bowling Alley parking lot
					26th Ave S and E 26th St
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h2>Start</h2>
					Every Saturday at 2 is new volunteer orientation.
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h2>Grants</h2>
					We have hardware available to non-profits.  <a href="info@freegeektwincities.org">Contact us</a>
				</div>
			</div>
		</div>
	</div>
</header> -->
<ul class="large-block-grid-3 top-panels">
	<?php if ( have_posts() ) : ?>

		<?php query_posts('category_name=featured&numberposts=3'); ?>

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
		<h4>FGTC News</h4>
		<?php if ( have_posts() ) : ?>

			<?php query_posts('category_name=news&numberposts=3'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="panel-<?php echo $wp_query->current_post+1; ?>">
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
