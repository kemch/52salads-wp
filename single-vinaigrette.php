<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="section-content post-vinaigrettes single-vinaigrettes">
		<div class="content-ingredients">
			<h2 class="ingredients-header">Ingredients</h2>
			<div class="ingredients">
				<? the_field('ingredients'); ?>
			</div>
		</div>
		<section class="section-recipe">
			<div class="content-recipe">
				<h2>Recipe</h2>
				<? the_field('recipe'); ?>
			</div>
		</section>
	</section>
<? endwhile; endif; ?>

