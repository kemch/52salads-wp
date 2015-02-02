<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="page-wrap">
		<div class="hero-content">
			<h1>Salad Tips</h1>
		</div>
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="page-panel">
			<div class="panel-heading">
				<h2><? the_title(); ?></h2>
			</div>
			<hr class="divider">
			<div class="page-body">
				<? the_content(); ?>
			</div>
		</div>
		<? endwhile; ?>
			<? endif; ?>
	</section>
	<? get_footer(); ?>
</body>
