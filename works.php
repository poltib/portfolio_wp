<?php/*

	Template Name: Works

*/?>

<?php
	get_header();
?>
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<section class="hi">
		<div class="text">
			<h2 title="projets" role="heading" aria-level="2">
			<?php the_field('titre') ?>
			</h2>
			<p><?php the_content() ?></p>
		</div>
	</section>
<?php endwhile; ?>
<?php endif; ?>
<section class="projets">
	<h2 class="hidden">Projets</h2>
	<?php 
	// the query
	$the_query = new WP_Query( array( 'post_type' => 'projets' , 'Genre' => 'projets')); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	  <!-- pagination here -->

	  <!-- the loop -->
	  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	    	<article role="article">
	    		<a class="detail" href="<?php the_permalink(); ?>">Détails sur ce projet</a>
				<h3 role="heading" aria-level="3"><?php the_title(); ?></h3>
				<figure><img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>"></figure>
				<p><?php the_content(); ?></p>
				<div><?php the_terms( $post->ID, 'Competence', 'Technologies: ', ' / ' ); ?></div>
				
			</article>

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