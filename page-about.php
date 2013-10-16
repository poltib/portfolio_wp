<?php
/*
Template Name: About
*/
?>

<?php
	get_header();
?>

	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
		<section class="hi">
			<div class="text">
				<h2 class="post-title" role="heading" aria-level="2" title="about">
					<?php the_title() ?>
				</h2>
				<p><?php the_content() ?></p>
			</div>
		</section>
		<section>
		
			<h2 role="heading" aria-level="2">
				<?php the_field('titre_presentation') ?>
			</h2>
			<p><?php the_field('presentation') ?></p>
		
		</section>
	<?php endwhile; ?>
	<?php endif; ?>
		<section>
			<h2>Compétences</h2>
			<?php 
			// the query
			$the_query = new WP_Query( array( 'post_type' => 'projets', 'posts_per_page' => '2')); ?>

			<?php if ( $the_query->have_posts() ) : ?>

			  <!-- pagination here -->

			  <!-- the loop -->
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div><?php the_terms( $post->ID, 'Tag', 'Technologies: ', ' / ' ); ?>

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