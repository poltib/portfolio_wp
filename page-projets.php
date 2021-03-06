<?php/*

	Template Name: Projets

*/?>
<?php acf_form_head();?>
<?php
	get_header();
?>
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<section class="hi">
		<div class="text">
			<h2 title="projets" role="heading" aria-level="2">
			<?php the_title() ?>
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
	$the_query = new WP_Query( 'post_type=projets' ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	  <!-- pagination here -->

	  <!-- the loop -->
	  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	    	<article>
	    		<a href="<?php the_permalink(); ?>">Détails sur ce projet</a>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
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