<?php
	get_header();
?>
<?php the_terms(); ?>
<section class="projet">
	<h2></h2>
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="text">
        <h3 class="project-name"><?php the_title(); ?></h3>
        <p class="project-description"><?php the_excerpt(); ?></p>
        <?php the_post_thumbnail('thumbnail'); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

</section>


<?php
	get_footer();
?>