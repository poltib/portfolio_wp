
<?php if(have_comments()): ?>
	<ul>
<?php while(have_comments()):the_comment(); ?>

	<li class="comment">
		
		<article role="article" itemscope itemtype="http://schema.org/Article">
			<h5 role="heading" aria-level="5" itemprop="author"><a href="<?php comment_author_email() ?>"><?php comment_author() ?></a> a dit&nbsp;:</h5>
			<span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span>
			<div itemprop="text"><?php comment_text() ?></div>
		</article>

	</li>

<?php endwhile; ?>
	</ul>
<?php else:  ?>
	<p>Pas de commentaire</p>
<?php endif; ?>

<?php $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Envoyer',
        // change the title of the reply section
        'title_reply'=>'Commenter',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        'email' =>
	      '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
	      ( $req ? '<span class="required">*</span>' : '' ) .
	      '<input aria-required="true" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	      '" size="30"' . $aria_req . ' /></p>',

	    'url' =>
	      '<p class="comment-form-url"><label for="url">' .
	      __( 'Website', 'domainreference' ) . '</label>' .
	      '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
	      '" size="30" /></p>');?>

<?php comment_form($comments_args) ?>
