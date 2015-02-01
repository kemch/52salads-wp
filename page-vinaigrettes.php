<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<section class="page-wrap">
		<div class="hero-content">
			<h1>Vinaigrettes</h1>
			<div class="page-intro">
				<? the_content(); ?>
			</div>
		</div>
		<div class="page-list">

			<? //query_posts('category__in=4'); ?>
			<? query_posts('category_name=vinaigrette'); ?>
			<ul>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<div class="left">
						<h2><a href="<? the_permalink();?>"><? the_title();?></a></h2>
						<div class="small-intro"><? the_content(); ?></div>
					</div>
				<?
    			$args = array(
					    'category_name' => $post->post_name
					);
					$category_query = new WP_Query($args);
					$num_posts = $category_query->post_count;
					if ($category_query->have_posts()) {
							?>
							<div class="right">
			        	<div class="post-count"><? echo $num_posts; ?></div>
			       	</div>
							<?
					    while ($category_query->have_posts()) {
					        $category_query->the_post();
					        ?>
					        	var post = '<? the_permalink(); ?>';
					       	 <script>
					       	 	console.log(post);
					       	 </script>
					        <?
					    }
					} else {
					    ?>
					    <div class="right">
					    	<div class="post-count">0</div>
					    </div>
					    <?php
					}
					wp_reset_postdata();
    		?>
    		</li>
				<? endwhile; ?>
				<? endif; ?>
			</ul>
			<? wp_reset_query(); ?>
		</div>
	</section>
	<section class="panel-wrap">

	</section>
	<? get_footer(); ?>
</body>
