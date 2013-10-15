<?php/*

	Template Name: Blog

*/?>

<?php
	get_header();
?>
je suis dans tb
<section class="	blog">
	<h2 class="hidden">Liste des articles</h2>
<?php 
					// the query
					$the_query = new WP_Query( 'post_type=post' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					  <!-- pagination here -->

					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  
					    <a href="<?php the_permalink(); ?>">
					    	<article>
								<h3 class="post"><?php the_title(); ?></h3>
								<p><?php the_post(); ?></p>
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