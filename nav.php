<header>
<nav>
	<ul class="nav">
		<li><a class="js-nav-salads" href="/"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;&nbsp;Salads</a></li>
		<li><a class="js-nav-vinaigrettes" href="/vinaigrettes">Vinaigrettes</a></li>
		<li><a class="js-details" data-target=".js-in-season" href="#">In Season</a></li>
		<!-- <li><a class="js-nav-hacks" href="#">Salad Tips</a></li> -->
	</ul>
</nav>
</header>
<div class="js-in-season" style="display:none;">
<section class="section-season">
	<div class="in-season">
		<? query_posts('category_name=season'); ?>
		<ul>
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<div class="season-name">In Season: <? the_title(); ?></div>
					<div class="season-content"><? the_content(); ?></div>
				</li>
			<? endwhile; ?>
			<? else : ?>
			<? endif; ?>
		</ul>
		<? wp_reset_query(); ?>
	</div>
</section>
</div>
