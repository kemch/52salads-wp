<? get_header(); ?>
<body>
	<header>
		<? get_template_part( 'nav' ); ?>
	</header>
	<? query_posts('category_name=salad'); ?>
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1>#<? the_field('salad_number'); ?></h1>
			<h2><? the_title(); ?></h2>
			<div class="date"><? the_date(); ?></div>
		</div>
	</section>
	<section class="section-content">
		<div class="content-ingredients">
			<? $image = get_field('image'); if( !empty($image) ): ?>
				<img class="salad-photo" src="<?php echo $image['url']; ?>" alt="image">
				<div class="ingredients">
					<? the_field('ingredients'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="content-recipe">
			<h2>Recipe</h2>
			<? the_field('recipe'); ?>
		</div>
		<div class="content-share">
			<h2>Share</h2>
			<ul class="share-links">
				<li>
					<a href="">
						<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="">
						<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x"></i>
						</span>
					</a>
				</li>
				<li>
					<a href="">
						<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x"></i>
						</span>
					</a>
				</li>
			</ul>
		</div>




		<div class="container" style="display:none;">
			<h1><small>#<? the_field('salad_number'); ?></small> <?php the_title(); ?></h1>
			<div class="image">
				<? $image = get_field('image'); if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="image">
				<?php endif; ?>
			</div>
			<div class="content">
				<div class="post-content">
					<h3><? the_date(); ?></h3>
					<? the_content(); ?>
				</div>
				<div class="ingredients-content">
					<h3>Ingredients</h3>
					<? the_field('ingredients'); ?>
				</div>
				<div class="recipe-content">
					<h3>Recipe</h3>
					<? the_field('recipe'); ?>
				</div>
			</div>
		</div>
	</section>
	<? endwhile; ?>
	<? else : ?>
	<? endif; ?>
	<? wp_reset_query(); ?>
	<? get_footer(); ?>
</body>
