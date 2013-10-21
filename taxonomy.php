<?php
	get_header();
?>


<section class="news blog">
	<?php if (have_posts()) : ?>
	<h2 class="taxonomyHeading" role="heading" aria-level="3"><?php _e( 'Projets réalisés utilisant ', 'portfolio' ); ?><?php single_term_title(); ?></h2>
    <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink()?>"><article role="article">
        <h3 role="heading" aria-level="3"><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
        <div><?php the_excerpt(); ?></div>
      </article></a>
    <?php endwhile; ?>
  <?php endif; ?>

</section>


<?php
	get_footer();
?>