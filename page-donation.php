<?php
/*
Template Name: Donation
*/
$imageArr = [];
for ($i = 1;$i < 4; $i++) {
	$itemArr = [];
	$itemArr[0] = get_field("image".$i);
	$itemArr[1] = get_field("caption".$i);
	$imageArr[$i] = $itemArr;
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
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<?php while (have_posts()) : the_post(); ?>
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
				<div class="entry-content">
					<div class="row">
						<div class="large-4 columns">
							<h3>What Can I Donate?</h3>
							<div class="panel secondary-color">
								<div style="max-height: 350px; overflow-y: scroll;">
									<table class="table full-width">
										<tbody>
										<?php echo get_donation_table(get_field("donation_list"))?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="large-4 columns">
							<h3>When Can I Donate?</h3>
							<div class="panel secondary-color">
								<table class="table full-width">
									<tbody>
										<tr>
											<td>Monday-Tuesday</td>
											<td>Closed</td>
										</tr>
										<tr>
											<td>Wednesday</td>
											<td>12 - 5</td>
										</tr>
										<tr>
											<td>Thursday</td>
											<td>12 - 5</td>
										</tr>
										<tr>
											<td>Friday</td>
											<td>12 - 5</td>
										</tr>
										<tr>
											<td>Saturday</td>
											<td>12 - 5</td>
										</tr>
										<tr>
											<td>Sunday</td>
											<td>12 - 5</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="large-4 columns">
							<h3>What Happens to my Donation?</h3>
							<div class="panel secondary-color">
								Staff will separate material for recycling or reuse.  All hard drives are removed and locked before wiping data securely.
								<ul>
									<li>
										Learn more about our recycling program.
									</li>
									<li>
										Learn more about our reuse program.
									</li>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<h3>What if I have a lot to donate?</h3>
							<div class="panel secondary-color">
								Please call us at <a href="tel:111-111-1111">number</a> and schedule a time to have pallets waiting to receive your material.
							</div>
						</div>
						<div class="large-4 columns">
							<h3>What items have a fee?</h3>
							<div class="panel secondary-color">
								<table class="table">
									<tbody>
										<tr>
											<td>Small inkjets</td>
											<td>$15</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="large-4 columns">
							<h3>Do I get a receipt?</h3>
							<div class="panel secondary-color">
									Yes!  We are a 501c3 organization and under Statute xx.xxx you can donate items and declare their material value as a contribution.
							</div>
						</div>
					</div>
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
