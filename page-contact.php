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
			<ul class="vcard">
				<li class="fn"><?php the_field('prenom') ?>&nbsp;<?php the_field('nom') ?></li>
				<li class="email"><a href="mailto:<?php the_field('adresse_e-mail') ?>"><?php the_field('adresse_e-mail') ?></a></li>
				<li class="tel"><?php the_field('numero_de_telephone') ?></li>
				<li class="adr"><?php the_field('adresse') ?></li>
			</ul>
		</div>
	</section>
<?php endwhile; ?>
<?php endif; ?>

<?php
	get_footer();
?>