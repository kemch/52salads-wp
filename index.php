<? get_header(); ?>
<body>
	<header>
		<? get_template_part( 'nav' ); ?>
	</header>
	<section class="section-hero">
		<div class="hero-content">
			<h1><small><span class="fa-stack">
			  <i class="fa fa-circle fa-stack-2x"></i>
			  <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
			</span></small> 52 salads</h1>
			<h2>One salad per week for a year.</h2>
				<!-- <ul class="nav">
					<li>
						<a href="">
							<span class="fa-stack">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="">
							<span class="fa-stack">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="">
							<span class="fa-stack">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x"></i>
							</span>
						</a>
					</li>
				</ul> -->
				<div class="search-container">
					<div class="search">
						<i class="fa fa-search"></i>
						Search for an ingredient...
					</div>
				</div>
		</div>
	</section>
	<section class="section-salads">
		<ul class="salad-list">
			<? query_posts('showposts=52&order=ASC'); ?>
			<? $num_posts = $wp_query->post_count; ?>
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="salad">
					<a class="salad-link-wrap" href="<?php the_permalink();?>">
						<span class="salad-list-number">
							<span><span><span class="circle">
								<span class="number">#<? the_field('salad_number'); ?></span>
							</span></span></span>
						</span>
						<span class="salad-list-content">
							<span class="salad-list-date"><?php the_date('m/d/Y');?></span>
							<span class="salad-list-ingredients"><? the_title(); ?></span>
						</span>
						<? $image = get_field('image'); if( !empty($image) ): ?>
						<?php endif; ?>
						<span class="salad-list-thumbnail" style="background-image:url(<?php echo $image['url']; ?>);">
						<!-- <span class="salad-list-thumbnail" style="background-image:url('http://52salads.kurtemch.com/img/salad-01.jpg');"> -->
						</span>
						<img src="http://52salads.kurtemch.com/img/blank.png" alt="blank">
						<!-- <img src="http://placehold.it/500" alt=""> -->
					</a>
				</li>
			<? endwhile; ?>
			<? $i = $num_posts; ?>
			<? while ( $i < 52 ) : $i++ ?>
				<li class="pending">
					<div class="salad-link-wrap">
						<span class="salad-list-number">
							<span><span><span class="circle">
								<span class="number">#<? echo $i; ?> </span>
							</span></span></span>
						</span>
						<span class="salad-list-content">
							<span class="salad-list-date"><i class="fa fa-clock-o"></i></span>
						</span>
						<!-- <span class="salad-list-thumbnail" style="background-image:url('http://52salads.kurtemch.com/img/salad-0<? echo $i; ?>.jpg');"></span> -->
						<img src="http://52salads.kurtemch.com/img/blank.png" alt="">
					</div>
				</li>
			<? endwhile; ?>
			<? else : ?>
			<? endif; ?>
		</ul>
	</section>
	<? get_footer(); ?>
</body>
