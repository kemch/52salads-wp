<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="section-hero">
		<div class="hero-content">
			<h1>Stay Updated</h1>
		</div>
	</section>
	<section class="section-tips">
		<div class="tips-content">
				<section class="section-content">
					<? the_content(); ?>
					<? get_template_part('mailchimp'); ?>
				</section>
			</ul>
		</div>
	</section>
	<? get_footer(); ?>
</body>
