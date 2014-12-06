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
			<h1>52 Salads</h1>
		</header>
		<div class="container">
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="entry">
				  <? the_content(); ?>
				  <? the_field('recipe'); ?>
				  <?
						$image = get_field('image');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			<? endwhile; else : ?>
					<p><? _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<? endif; ?>
		</div>
		<? get_footer(); ?>
	</body>
</html>
