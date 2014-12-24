<? get_header(); ?>

<body>
	<header>
		<? get_template_part( 'nav' ); ?>

	</header>
	<section class="section-hero">
		<div class="hero-content">
			<h1>One salad per week for a year.</h1>
		</div>
	</section>
	<section class="section-salads">
		<ul class="salad-list">
			<? query_posts('showposts=52&order=ASC'); ?>
			<? $num_posts = $wp_query->post_count; ?>
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<a class="salad-link-wrap" href="<?php the_permalink();?>">
						<span class="salad-list-number">
							<span><span><span class="circle">
								<span class="number">#<? the_field('salad_number'); ?></span>
							</span></span></span>
						</span>
						<span class="salad-list-content">
							<span class="salad-list-date"><?php the_date('m/d/Y');?></span>
							<span class="salad-list-ingredients"><? the_field('ingredient_list'); ?></span>
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
				<li>
					<div class="salad-link-wrap">
						<span class="salad-list-number">
							<span><span><span class="circle">
								<span class="number">#<? echo $i; ?> </span>
							</span></span></span>
						</span>
						<span class="salad-list-content">
							<span class="salad-list-date"><i class="fa fa-clock-o"></i></span>
						</span>
						<span class="salad-list-thumbnail" style="background-image:url('http://52salads.kurtemch.com/img/salad-0<? echo $i; ?>.jpg');"></span>
						<img src="http://52salads.kurtemch.com/img/blank.png" alt="">
					</div>
				</li>
			<? endwhile; ?>
			<? else : ?>
			<? endif; ?>
		</ul>
	</section>
</body>


<? /*
	<body>
		<header>
			<? get_template_part( 'nav' ); ?>
			<h1 class="site-title"><span class="fa-stack">
			  <i class="fa fa-circle fa-stack-2x"></i>
			  <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
			</span> 52 Salads</h1>
			<p>One salad a week for a year. Don&rsquo;t miss a salad:
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-envelope"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
			</p>
		</header>
		<section class="section-hero">

		</section>
		<section class="section-salads">
			<ul class="posts" style="display:none;">
				<? query_posts('showposts=52&order=ASC'); ?>
				<? $num_posts = $wp_query->post_count; ?>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li class="salad">
						<div class="salad-wrap">
							<div class="salad-layout-block">
								<img src="http://52salads.kurtemch.com/img/blank.png" alt="blank">
							</div>
							<? $image = get_field('image'); if( !empty($image) ): ?>
							<div class="salad-thm">
								<div class="salad-bg" style="background-image:url(<?php echo $image['url']; ?>);"></div>
							</div>
							<?php endif; ?>
							<div class="salad-info">
								<div class="salad-number">#<? the_field('salad_number'); ?></div>
								<div class="salad-date"><? the_date('m/d/Y'); ?></div>
							</div>
							<div class="salad-summary">
								<a href="<? the_permalink(); ?>">Link</a>
								<? the_field('ingredient_list'); ?>
							</div>
						</div>
					</li>
				<? endwhile; ?>
				<? $i = $num_posts; ?>
				<? while ( $i < 52 ) : $i++ ?>
					<li class="salad">
						<div class="salad-wrap">
							<div class="salad-layout-block">
								<img src="http://52salads.kurtemch.com/img/blank.png" alt="blank">
							</div>
							<div class="salad-info not-yet">
								<h2>#<? echo $i; ?></h2>
							</div>
						</div>
					</li>
				<? endwhile; ?>
				<? else : ?>
				<? endif; ?>
			</ul>
		</section>
		<? get_footer(); ?>
	</body>
</html>
*/ ?>
