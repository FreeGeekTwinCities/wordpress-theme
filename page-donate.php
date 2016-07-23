<?php
/*
Template Name: Donate
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<div class="how">
			<?php get_how(); ?>
		</div>
		<ul class="tabs vertical" data-tab>
		  <li class="tab-title active">
				<a href="#what">What Can I Donate</a>
			</li>
			<li class="tab-title">
				<a href="#cant">What Can't I Donate</a>
			</li>
		  <li class="tab-title">
				<a href="#when">When Can I Donate</a>
			</li>
		  <li class="tab-title">
				<a href="#happens">What Happens to My Donation</a>
			</li>
		</ul>
		<div class="tabs-content" data-equalizer>
		  <div class="content active"
					 id="what">
				<table style="width: 80%;">
					<thead>
						<tr>
							<th>Item</th>
							<th>Reusable</th>
							<th>Recyclable Material</th>
							<th>Fee</th>
						</tr>
					</thead>
					<tbody>
							<?php get_donation_table(get_field("donation_list")); ?>
					</tbody>
				</table>
		  </div>
			<div class="content" id="cant">
				<table style="width: 80%;">
					<thead>
						<tr>
							<th>
								Item
							</th>
						</tr>
					</thead>
					<tbody>
						<?php get_cant() ?>
					</tbody>
				</table>
			</div>
		  <div class="content" id="when">
				<table>
					<tbody>
						<?php get_hours() ?>
					</tbody>
				</table>
		  </div>
		  <div class="content" id="happens">
				<?php get_process() ?>
		  </div>
		</div>
		<div class="clear-fix"></div>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</article>
		<?php endwhile; // End the loop ?>
  </div>
</div>
<?php get_footer(); ?>
<?php

function get_cant() {
	echo "";
}

function get_how() {
	echo "<h4>HOW TO DONATE</h4><p>Please bring as little packaging and boxes as possible. Please recycle the boxes for your equipment through your curb-side recycling program. We do not accept Styrofoam.</p>
<p>We accept all software, manuals, and cables for donation. While we can’t promise we’ll use them all, we do recycle them responsibly if we can’t make use of them.</p>

<p>Recycling computers is labor intensive. Doing any of the following to prepare your equipment for donation will help us speed the processing and recycling of your equipment.</p>

<ol>
<li>Untangle all cords and cables. Coil them up with a rubber band or twist tie.</li>
<li>Attach power adapters (AC adaptors, transformers) to their associated equipment (such as powered speakers, printers or routers) as best you can.</li></ol>";
}

function get_process() {
	echo "";
}

function get_hours() {
	$table_rows = "";
	$configured_hours = [
		["Mon-Tues", "Closed"],
		["Wed.", "12 - 5"],
		["Thurs.", "12 - 5"],
		["Fri.", "12 - 5"],
		["Sat.", "12 - 5"],
		["Sun.", "12 - 5"]
	];
	foreach($configured_hours as &$hour_row) {
		$table_rows = "{$table_rows}<tr><td>{$hour_row[0]}</td><td>{$hour_row[1]}</td></tr>";
	}
	echo $table_rows;
}
function get_donation_table($recyclables) {
	$table_rows = "";
	$donation_table = str_getcsv($recyclables, "\n"); //parse the rows
	foreach($donation_table as &$donation_row) {
		$donation_row = str_getcsv($donation_row, ",");
		$formatted_row = "<tr><td>{$donation_row[0]}</td>";
		if (count($donation_row) > 1) {
			$formatted_row = "{$formatted_row}<td>{$donation_row[1]}</td>";
		} else {
			$formatted_row = "{$formatted_row}<td></td><td></td><td></td>";
		}
		$formatted_row = "$formatted_row</tr>";
		$table_rows = "{$table_rows}{$formatted_row}";
	}
	echo $table_rows;
}
?>
