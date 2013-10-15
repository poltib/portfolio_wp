<?php
	get_header();
?>



<?php $args = array( 'post_type' => 'Designers', 'posts_per_page' => 3 ); ?>
<?php $loop = new WP_Query( $args ); ?>
	<?php ( $loop->have_posts() ) : $loop->the_post(); ?>
	<section class="hi">
		<div class="text">
			<h2 class="post-title" role="heading" aria-level="2">
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h2>
			<p><?php the_content() ?></p>
		</div>
	</section>
<?php endwhile; ?>




<?php
	get_footer();
?>