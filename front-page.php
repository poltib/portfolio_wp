<?php
	get_header();
?>

	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
		<section class="hi">
			<div class="text">
				<h2 class="post-title" role="heading" aria-level="2">
					<?php the_title() ?>
				</h2>
				<p><?php the_content() ?></p>
			</div>
		</section>
	<?php endwhile; ?>
	<?php endif; ?>

			<section class="projects">
				<div class="text">
					<?php 
					// the query
					$the_query = new WP_Query( array( 'post_type' => 'projets' , 'Genre' => 'intro')  ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->

					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						 	<h2><?php the_title() ?></h2>
							<div><?php the_content() ?></div>
					  <?php endwhile; ?>
					  <!-- end of the loop -->

					  <!-- pagination here -->

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>

					<?php 
					// the query
					$the_query = new WP_Query( array( 'post_type' => 'projets' , 'Genre' => 'important')  ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->
						<div class="photos-right">
					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						 	<a href="<?php the_permalink(); ?>"><figure>
							<img src="<?php the_field('image')?>" alt="">
							<figcaption>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
							</figcaption>
							</figure></a>
					  <?php endwhile; ?>
					  <!-- end of the loop -->
						</div>
					  <!-- pagination here -->

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>


					<?php 
					// the query
					$the_query = new WP_Query( array( 'post_type' => 'projets' , 'Genre' => 'moins')  ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->
						<div class="photos-left">
					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						 	<a href="<?php the_permalink(); ?>"><figure>
							<img src="<?php the_field('image')?>" alt="">
							<figcaption>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
							</figcaption>
							</figure></a>
						
					  <?php endwhile; ?>
					  <!-- end of the loop -->
						</div>	
					  <!-- pagination here -->

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			</section>
			<section class="news">
				<?php 
				// the query
				$the_query = new WP_Query( 'post_type=post&posts_per_page=2'); ?>

				<?php if ( $the_query->have_posts() ) : ?>

				  <!-- pagination here -->
					<div class="newPosts">				  
					<h2 class="newsPosts">Derniers articles du blog</h2>
				<!-- the loop -->
				  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				  
				    <a href="<?php the_permalink(); ?>">
				    	<article>
							<h3><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
							<span>Posté par <?php the_author() ?></span>
							<p><?php the_excerpt(); ?></p>
							<span class="more">Lire la suite</span>
						</article>
					</a>
				  <?php endwhile; ?>
				  <!-- end of the loop -->
					</div>

				  <!-- pagination here -->

				  <?php wp_reset_postdata(); ?>

				<?php else:  ?>
				  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				<div class="interrest">


					<h2>Interrests</h2>
						<?php 
					// the query
					$the_query = new WP_Query( 'post_type=interrests'); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->
					<!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  
					    	<article>
								<h3><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
								<p><?php the_excerpt(); ?></p>
							</article>
					  <?php endwhile; ?>
					  <!-- end of the loop -->
					  <!-- pagination here -->

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>


				</div>
			</section>

<?php
	get_footer();
?>