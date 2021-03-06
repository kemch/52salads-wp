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
			<? query_posts('category_name=tip&order=ASC&'); ?>
				<ul>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<h2><a href="<? the_permalink(); ?>"><? the_title();?></a></h2>
				</li>
				<? endwhile; ?>
				<? endif; ?>
				<? wp_reset_query(); ?>
				</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
