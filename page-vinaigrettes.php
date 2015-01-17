<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1>Vinaigrettes</h1>
			<? the_content(); ?>
		</div>
	</section>
	<section class="section-tips">
		<div class="tips-content">
			<? query_posts('category_name=vinaigrette'); ?>
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
