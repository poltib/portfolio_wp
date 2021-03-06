<?php
	get_header();
	// afficheBonjour();
?>
<section class="news blog">
	<h2 class="hidden">Liste des articles</h2>
					<?php 
					// the query
					$paged = (get_query_var( 'paged' ))?get_query_var( 'paged' ):1;

					$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'paged' => $paged )); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->

					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						   <a href="<?php the_permalink(); ?>">
						    	<article role="article" itemscope itemtype="http://schema.org/Article">
									<h3 class="post" role="heading" aria-level="3" itemprop="name"><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
									<span itemprop="author"><?php the_author() ?></span>
									<div itemprop="text"><?php the_excerpt(); ?></div>
									<span class="comm"><?php comments_number(); ?></span>
								</article>
							</a>
					  <?php endwhile; ?>
					  <!-- end of the loop -->

					  <!-- pagination here -->
					  <div class="pagination">
					  	<?php previous_posts_link( ) ?>
					  	<?php next_posts_link( ) ?>
					  	</div>

					  <?php wp_reset_postdata(); ?>

					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

</section>


<?php
	get_footer();
?>