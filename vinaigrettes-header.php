<section class="section-hero">
	<div class="hero-content">
		<h1>Vinaigrettes</h1>
		<h2>Bases for Vinaigrettes</h2>
	</div>
</section>
<section class="section-vinaigrettes">
	<ul class="vin-list">
		<? query_posts('category_name=vinaigrette'); ?>
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<a href="<? the_permalink(); ?>">
					<span class="vin-list-content">
						<h3 class="vin-list-name"><? the_title(); ?></h3>
						<!-- <img class="vin-bottle" src="<? bloginfo('stylesheet_directory'); ?>/img/bottle.svg" alt="bottle"> -->
						<span class="vin-list-used">
							<!-- hi -->
						</span>
					</span>
					<span class="vin-list-thumbnail" style="background-image:url(<? bloginfo('stylesheet_directory'); ?>/img/bottle.svg);">
					</span>
					<img src="<? bloginfo('stylesheet_directory'); ?>/img/blank.png" alt="blank">
				</a>

			</li>
		<? endwhile; ?>
		<? endif; ?>
		<? wp_reset_query(); ?>
	</ul>
</section>
