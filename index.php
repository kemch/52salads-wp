<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<? get_header(); ?>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a class="js-nav-salads" href="/salads">Salads</a></li>
					<li>/</li>
					<li><a class="js-nav-vinaigrette" href="#">Vinaigrette</a></li>
					<li>/</li>
					<li><a class="js-nav-season" href="#">In Season</a></li>
					<li>/</li>
					<li><a class="js-nav-hacks" href="#">Salad Hacks</a></li>
				</ul>
			</nav>
			<h1><span class="fa-stack">
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
		<ul class="posts">
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
							<h2>#<? the_field('salad_number'); ?></h2>
							<h3><? the_date('m/d/Y'); ?></h3>
						</div>
						<div class="salad-summary">
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
		<? get_footer(); ?>
	</body>
</html>
