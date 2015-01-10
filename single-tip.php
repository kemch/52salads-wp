<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1>Salad Tips</h1>
			<h2>Tips for making, storing, and creating salads</h2>
		</div>
	</section>
	<section class="section-tips">
		<div class="tips-content">
			<ul>
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<h3><a href="<? the_permalink();?>"><? the_title();?></a></h3>
				<section class="section-content">
					<? the_content(); ?>
				</section>
			</li>
			<? endwhile; ?>
			<? endif; ?>
			</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
