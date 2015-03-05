</section>
<footer>
	<div class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
	</div>
	<div class="row">
		<div class="large-4 small-12 columns">
			<h4>Hours</h4>
			<table>
				<tbody>
					<tr>
						<td>Monday-Tuesday</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>12-5</td>
					</tr>
					<tr>
						<td>Thursday-Friday</td>
						<td>12-5 STORE ONLY</td>
					</tr>
					<tr>
						<td>Saturday-Sunday</td>
						<td>12-5</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="large-4 small-12 columns">
			<h4>Location</h4>
		</div>
		<div class="large-4 small-12 columns">
			<h4>Connect</h4>
			<ul>



				<li><i class="fi-social-facebook"></i></li>
				<li><i class="fi-social-twitter"></i></li>
				<li><i class="fi-social-google-plus"></i></li>
			</ul>
		</div>
	</div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
