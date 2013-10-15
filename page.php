<?php
	get_header();
?>

<div id="articles" role="main">
	<?php if(have_posts()): ?>
		<p>Voici la liste des posts de ce site</p>
		<?php while(have_posts()): the_post(); ?>
		<article class="post" id="post-<?php the_ID() ?>">
			<h2 class="post-title" role="heading" aria-level="2">
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h2>
			<time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time>
			<div class="post-content"><?php the_content() ?></div>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
</div>


<?php comments_template() ?>

<?php
	get_footer();
?>

