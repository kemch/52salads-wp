<? get_header(); ?>
<body>
	<? get_template_part( 'nav' ); ?>
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="page-wrap">
		<div class="page-panel">
			<div class="page-heading">
				<h1>Vinaigrettes</h1>
			</div>
			<div class="page-intro">
				<? the_content(); ?>
			</div>
			<hr class="divider">
			<div class="instructions">
				<div class="row">
					<div class="col-md-4">
						<h3>Ingredients</h3>
						<div class="ingredients">
							<? the_field('ingredients'); ?>
						</div>
					</div>
					<div class="col-md-8">
						<h3>Recipe</h3>
						<? the_field('recipe'); ?>

						<div class="used-in row">
							<?
			    			$args = array(
								    'category_name' => $post->post_name
								);
								$category_query = new WP_Query($args);
								$num_posts = $category_query->post_count;
								if ($category_query->have_posts()) {
								    while ($category_query->have_posts()) {
								        $category_query->the_post();
								        ?>

								        	<div class="col-md-12">
							        			<h3>Used in these salads </h3>
								        		<ul class="salad-list">
											       	<li class="salad">
																<a class="salad-link-wrap" href="<?php the_permalink();?>">
																	<span class="salad-list-number">
																		<span><span><span class="circle">
																			<span class="number"><small>#</small><? the_field('salad_number'); ?></span>
																		</span></span></span>
																	</span>
																	<span class="salad-list-content">
																		<span class="salad-list-date"><span><?php the_date('m/d/Y');?></span></span>
																		<span class="salad-list-ingredients"><span><? the_title(); ?></span></span>
																	</span>
																	<? $image = get_field('content_image'); if( !empty($image) ): ?>
																	<?php endif; ?>
																	<span class="salad-list-thumbnail" style="background-image:url(<?php echo $image['url']; ?>);">
																	</span>
																	<img src="<? bloginfo('stylesheet_directory'); ?>/img/blank.png" alt="blank">
																</a>
															</div>
									        	</li>
								        	</ul>
								        </div>
								        <?
								    }
								}
								wp_reset_postdata();
			    		?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="section-tips" style="display:none;">
		<div class="tips-content">
			<ul>
			<li>
				<h3><a href="<? the_permalink();?>"><? the_title();?></a></h3>
				<section class="section-content">
							<? the_field('ingredients'); ?>
							<? the_field('recipe'); ?>
				</section>
			</li>
			</ul>
		</div>
	</section>
	<? endwhile; ?>
	<? endif; ?>
	<? get_footer(); ?>
</body>
