<?php
	get_header();
?>

<section class="projet">
	<h2 class="hidden">Projets</h2>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>

	    	<article>
	    		<div class="text">
				<h3><?php the_title(); ?></h3>
				<figure><img src="<?php the_field('image'); ?>" alt=""></figure>
				<p><?php the_content(); ?></p>
				</div>
			</article>

	  <?php endwhile; ?>
	<?php endif; ?>

</section>


<?php
	get_footer();
?>