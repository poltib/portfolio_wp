

	<?php 
	// the query
	$the_query = new WP_Query( array( 'tag' => 'html'  ) ); ?>

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