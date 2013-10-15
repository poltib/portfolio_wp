<?php
/*
Template Name: About
*/
?>

<?php
	get_header();
?>

<div id="articles" role="main">
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
	<?php endwhile; ?>
	<?php endif; ?>
</div>



<?php
	get_footer();
?>