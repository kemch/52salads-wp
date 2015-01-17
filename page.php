<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1><? the_title(); ?></h1>
		</div>
	</section>
	<section class="section-tips">
		<div class="tips-content">
				<section class="section-content">
					<? the_content(); ?>
				</section>
			</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
