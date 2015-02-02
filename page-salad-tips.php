<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="page-wrap">
		<div class="hero-content">
			<h1>Salad Tips</h1>
			<div class="page-intro">
				<? the_content(); ?>
			</div>
		</div>
		<div class="page-list">
			<? query_posts('category_name=tip'); ?>
				<ul>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<h2><a><? the_title();?></a></h2>
					<? the_content(); ?>
				</li>
				<? endwhile; ?>
				<? endif; ?>
				<? wp_reset_query(); ?>
				</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
