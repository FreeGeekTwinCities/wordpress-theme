<?php get_header(); ?>
<header class="splash">
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
					Closed:   Mon & Tues
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
					<h2>Starting</h2>
					Every Saturday at 2 is new volunteer orientation.
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h2>Grants</h2>
					We have hardware available to non-profits.  Contact us @ info@freegeektwincities.org
				</div>
			</div>
		</div>
	</div>
</header>
<br/>


<div class="row">
	<div class="large-12 columns" role="main">
		<h1>Educate</h1>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<h1>Equip</h1>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<h1>E-cycle</h1>
	</div>
</div>

<div class="row">
	<div class="large-6 medium-12 columns">
		<h4>News </h4>
		<?php if ( have_posts() ) : ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action('foundationPress_before_pagination'); ?>

		<?php endif;?>

	</div>
	<div class="large-6 medium-12 columns">
		<h4>@FreeGeek_TC</h4>
	</div>
	<?php do_action('foundationPress_after_content'); ?>
</div>

<?php get_footer(); ?>
