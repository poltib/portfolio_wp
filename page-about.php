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
				<h2 role="heading" aria-level="2" title="about">
					<?php the_title() ?>
				</h2>
				<div><?php the_content() ?></div>
			</div>
		</section>
		<section>
			<div class="presentation">
			<h2 role="heading" aria-level="2">
				<?php the_field('titre_presentation') ?>
			</h2>
			<div><img src="<?php the_field('image') ?>" alt=""></div>
			<?php the_field('presentation') ?>
			</div>
		
		</section>
	<?php endwhile; ?>
	<?php endif; ?>
		<section>
			<h2 role="heading" aria-level="2">Compétences</h2>
				<div><?php wp_tag_cloud( array( 'largest' => 1, 'smallest' => 1, 'unit' => 'em', 'taxonomy' => 'Competence', format => 'list' ) ); ?></div>
		</section>




<?php
	get_footer();
?>