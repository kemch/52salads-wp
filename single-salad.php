<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<? $image_bg = get_field('content_image');?>
			<? $image_main = get_field('image'); ?>

			<section class="section-hero-salad" style="background-image:url('<?php echo $image_bg['url']; ?>');">
				<div class="salad-panel">
					<div class="salad-heading">
						<div class="date"><? the_date(); ?></div>
						<h1 class="salad-title"><span class="salad-number"><small>#</small><? the_field("salad_number"); ?></span> <? the_title(); ?></h1>
					</div>
					<div class="salad-intro">
						<? the_content(); ?>
					</div>
					<figure class="js-figure" style="height:200px;">
						<img src="<?php echo $image_main['url']; ?>" alt="<? the_title(); ?>">
					</figure>
					<hr class="divider">
					<div class="instructions">
						<div class="row">
							<div class="col-md-4">
								<h3>Ingredients</h3>
								<? the_field('ingredients'); ?>
							</div>
							<div class="col-md-8">
								<h3>Recipe</h3>
								<? the_field('recipe'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
	<? endwhile; endif; ?>
	<? get_footer(); ?>
</body>