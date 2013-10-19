

<?php
	get_header();
?>
<section class="news blog">
	<h2 class="hidden">Article</h2>
<article>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<h3 class="post" role="heading" aria-level="3">
				<?php the_title() ?>
			</h3>
			<time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time>
			<div class="post-content"><?php the_content() ?></div>

	<?php endwhile; ?>
	<?php endif; ?>
	<div class="comment">
		<h4 class="comm">Commentaires</h4>
		<?php comments_template() ?>
	</div>
</article>
<a id="position" href="blog/">Retourner à la section blog</a>
</section>


<?php
	get_footer();
?>