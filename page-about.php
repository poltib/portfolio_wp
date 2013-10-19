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
				<h2 class="post" role="heading" aria-level="2" title="about">
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
			<h2 class="post" role="heading" aria-level="2">Compétences</h2>
				<div><?php the_terms( 'Competence', 'Technologies: ', ' / ' ); ?></div>
		</section>




<?php
	get_footer();
?>