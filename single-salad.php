<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<? $image_bg = get_field('content_image');?>
			<? $image_main = get_field('image'); ?>
			<section vocab="http://schema.org/" typeof="Recipe" class="section-hero-salad" style="background-image:url('<?php echo $image_bg['url']; ?>');">
				<div class="salad-panel">
					<div class="salad-heading">
						<div class="date">
							<time property="datePublished" datetime="<? the_date('d-Y');?>">
								<? the_date(); ?>
							</time>
						</div>
						<h1 class="salad-title" property="name"><span class="salad-number"><small>#</small><? the_field("salad_number"); ?></span> <? the_title(); ?></h1>
					</div>
					<div property="description" class="salad-intro">
						<? the_content(); ?>
					</div>
					<figure class="js-figure" style="height:200px;">
						<div class="pin-button">
							<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
						</div>
						<img property="image" src="<?php echo $image_main['url']; ?>" alt="<? the_title(); ?>">
					</figure>
					<hr class="divider">
					<div class="instructions">
						<div class="row">
							<div class="col-md-4">
								<h3>Ingredients</h3>
								<div property="ingredients" class="ingredients">
									<? the_field('ingredients'); ?>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Recipe</h3>
								<div property="recipeInstructions">
									<? the_field('recipe'); ?>
								</div>
							</div>
						</div>
					</div>

					<? get_template_part( 'share' ); ?>

					<div class="post-nav">
							<div class="previous"><?php next_post_link( '%link', '<i class="fa fa-arrow-left"></i> Last Week', TRUE); ?></div>
							<div class="next"><?php previous_post_link( '%link', 'Next Week <i class="fa fa-arrow-right"></i>', TRUE); ?></div>
						</div>

				</div>
			</section>
	<? endwhile; endif; ?>
	<? get_footer(); ?>
</body>
