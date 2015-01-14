<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1>Salad Tips</h1>
			<h2><? the_content(); ?></h2>
		</div>
	</section>
	<section class="section-tips">
		<div class="tips-content">
			<? query_posts('category_name=tip'); ?>
			<ul>
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<h3><a href="<? the_permalink();?>"><? the_title();?></a></h3>
			</li>
			<? endwhile; ?>
			<? endif; ?>
			<? wp_reset_query(); ?>
			</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
