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
			<iframe width="100%"
							frameborder="0"
							scrolling="no"
							marginheight="0"
							marginwidth="0"
							src="http://www.openstreetmap.org/export/embed.html?bbox=-93.2358893752098%2C44.955469617299556%2C-93.23406547307968%2C44.95669576495031&amp;layer=mapnik&amp;marker=44.956082694399896%2C-93.23497742414474"
							style="border: 1px solid black; min-height: 150px;"></iframe>
							<br/>
			<a href="http://www.openstreetmap.org/?mlat=44.95608&amp;mlon=-93.23498#map=19/44.95608/-93.23498">
				View Larger Map
			</a>
		</div>
		<div class="large-4 small-12 columns">
			<h4>Connect</h4>
			<ul>
				<li>
					<a href="http://facebook.com/FreeGeekTwinCities" target="_blank">
						<i class="fi-social-facebook"></i>
					</a>
				</li>
				<li>
					<a href="http://twitter.com/FreeGeek_TC" target="_blank">
						<i class="fi-social-twitter"></i>
					</a>
				</li>
				<li>
					<a href="https://plus.google.com/114843610522514233551" target="_blank">
						<i class="fi-social-google-plus"></i>
					</a>
				</li>
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
