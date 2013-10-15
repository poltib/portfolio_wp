<?php
	get_header();
	// afficheBonjour();
?>

<section class="news blog">
	<h2 class="hidden">Liste des articles</h2>
					<?php 
					// the query
					$the_query = new WP_Query( 'post_type=post&posts_per_page=4' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->

					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					   <a href="<?php the_permalink(); ?>">
					    	<article>
								<h3 class="post"><?php the_title(); ?> <span><?php the_date(); ?></span></h3>
								<span><?php the_author() ?></span>
								<p><?php the_excerpt(); ?></p>
								<span class="comm"><?php comments_number(); ?></span>
							</article>
						</a>
					  <?php endwhile; ?>
					  <!-- end of the loop -->

					  <!-- pagination here -->

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

</section>


<?php
	get_footer();
?>