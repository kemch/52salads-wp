<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="page-wrap">
		<div class="page-panel">
			<div class="page-heading">
				<h1>Vinaigrettes</h1>
			</div>
			<div class="page-intro">
				<? the_content(); ?>
			</div>
			<hr class="divider">
			<div class="instructions">
				<div class="row">
					<div class="col-md-4">
						<h3>Ingredients</h3>
						<div class="ingredients">
							<? the_field('ingredients'); ?>
						</div>
					</div>
					<div class="col-md-8">
						<h3>Recipe</h3>
						<? the_field('recipe'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="section-tips" style="display:none;">
		<div class="tips-content">
			<ul>
			<li>
				<h3><a href="<? the_permalink();?>"><? the_title();?></a></h3>
				<section class="section-content">
							<? the_field('ingredients'); ?>
							<? the_field('recipe'); ?>
				</section>
			</li>
			</ul>
		</div>
	</section>
	<? endwhile; ?>
	<? endif; ?>
	<? get_footer(); ?>
</body>
