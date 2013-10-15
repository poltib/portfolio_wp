<?php/*

	Template Name: Contact

*/?>

<?php
	get_header();
?>
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<section class="hi">
		<div class="text">
			<h2 title="contact" role="heading" aria-level="2">
			<?php the_title() ?>
			</h2>
			<p><?php the_content() ?></p>
		</div>
	</section>
<?php endwhile; ?>
<?php endif; ?>

<?php
	get_footer();
?>