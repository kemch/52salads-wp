<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<? if ( in_category('vinaigrette')): ?>
		<? /* include vinaigrettes nav */ ?>
		<? include 'vinaigrettes-header.php'; ?>
	<? endif; ?>

	<? /* For salad only */ ?>
	<? if ( in_category('salad')): ?>
		<?// query_posts('category_name=salad'); ?>
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="section-hero">
				<div class="salad-hero">
					<div class="salad-list-number as-heading">
						<span><span><span class="circle">
							<span class="number"><small>#</small>2</span>
						</span></span></span>
					</div>
				</div>
			</section>
			<section class="section-content">
				<div class="date"><? the_date(); ?></div>
				<h3><? the_title(); ?></h3>
				<h2 class="ingredients-header">Ingredients</h2>
				<div class="content-ingredients">
					<? $image = get_field('image'); if( !empty($image) ): ?>
						<img class="salad-photo" src="<?php echo $image['url']; ?>" alt="image">
						<div class="ingredients">
							<? the_field('ingredients'); ?>
						</div>
					<?php endif; ?>
				</div>
				<section class="section-recipe">
					<div class="content-recipe">
						<h2>Recipe</h2>
						<? the_field('recipe'); ?>
					</div>
				</section>
				<div class="content-share" style="display:none;">
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
			</section>
	<? endwhile; endif; ?>
	<? wp_reset_query(); ?>

	<? elseif ( in_category('vinaigrette')): ?>
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="section-content post-vinaigrettes">
				<div class="content-ingredients">
					<div class="bottle-image">
						<img src="<? bloginfo('stylesheet_directory');?>/img/blank.png" alt="blank">
					</div>
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
		<? wp_reset_query(); ?>
	<? endif; ?>
	<? get_footer(); ?>
</body>
