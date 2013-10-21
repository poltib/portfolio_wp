<?php
	get_header();
?>

<section class="projet">
	<h2 class="hidden">Projets</h2>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>

	    	<article role="article">
	    		<div class="text">
				<h3 role="heading" aria-level="3"><?php the_title(); ?></h3>
				<span><?php the_terms( $post->ID, 'Competence', 'Technologies : ', ' / ' ); ?></span>

				<h4 role="heading" aria-level="4"><?php the_field('titre_section_une'); ?></h4>
				<figure><img src="<?php the_field('image_section_une'); ?>" alt=""></figure>
				<div><?php the_field('texte_section_une'); ?></div>

				<h4 role="heading" aria-level="4"><?php the_field('titre_section_deux'); ?></h4>
				<figure><img src="<?php the_field('image_section_deux'); ?>" alt=""></figure>
				<div><?php the_field('texte_section_deux'); ?></div>
				</div>
			</article>

	  <?php endwhile; ?>
	<?php endif; ?>

</section>


<?php
	get_footer();
?>