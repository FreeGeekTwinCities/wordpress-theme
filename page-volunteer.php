<?php
/*
Template Name: Volunteer
*/
$imageArr = [];
for ($i = 1;$i < 4; $i++) {
	$itemArr = [];
	$itemArr[0] = get_field("image".$i);
	$itemArr[1] = get_field("caption".$i);
	$imageArr[$i] = $itemArr;
}

get_header(); ?>
<div class="row">
		<?php /* Start loop */ ?>
		<?php
		while (have_posts()) : the_post();
		?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<ul class="example-orbit" data-orbit data-options="slide_number: false; animation_speed:1500;">
				<?php for($j = 1; $j < count($imageArr)+1; $j++) { ?>
					<li>
				    <img src="<?php echo $imageArr[$j][0] ?>" alt="slide <?php echo $j ?>" />
				    <div class="orbit-caption">
							<?php echo $imageArr[$j][1] ?>
				    </div>
				  </li>
				<?php } ?>
			</ul>
		<div class="small-12 large-8 columns featured-item" role="main">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="large-4 columns">
			<ul class="pricing-table">
			  <li class="title">24 Hours Volunteering</li>
			  <li class="price">$40 Thrift Store Credit</li>
			  <li class="bullet-item">Enough for a Desktop Computer</li>
			  <li class="bullet-item">At least 2.5 Ghz Pentium 4</li>
			  <li class="bullet-item">At least 120 Gb Hard drive</li>
			  <li class="bullet-item">Internet Ready</li>
			  <li class="cta-button"><a class="button" href="#">New Volunteer Orientation Every Saturday@2pm!</a></li>
			</ul>
		</div>
	</article>
		<?php endwhile; // End the loop ?>
</div>
<div class="row">
	<div class="large-12 columns">
		<h3>Learning Opportunities</h3>
	</div>
</div>
<div class="row">
	<div class="large-4 columns">
		<ul class="pricing-table">
			<li class="title">Recycle</li>
			<li class="bullet-item">Get comfortable with tools</li>
			<li class="bullet-item">Identify the parts of electronics</li>
			<li class="bullet-item">Hands on with lots of technology</li>
		</ul>
	</div>
	<div class="large-4 columns">
		<ul class="pricing-table">
			<li class="title">Test</li>
			<li class="bullet-item">Practice common repair techniques</li>
			<li class="bullet-item">Build toolset to troubleshoot IT problems</li>
		</ul>
	</div>
	<div class="large-4 columns">
		<ul class="pricing-table">
			<li class="title">Build</li>
			<li class="bullet-item">Assemble working components into full computers!</li>
			<li class="bullet-item">Install operating systems</li>
			<li class="bullet-item">Install updates and software packages</li>
			<li class="bullet-item">Troubleshoot drivers and unique components</li>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
