
<?php if(have_comments()): ?>
	<ul>
<?php while(have_comments()):the_comment(); ?>

	<li class="comment">
		
		<article>
			<h5><a href="<?php comment_author_email() ?>"><?php comment_author() ?></a> a dit&nbsp;:</h5>
			<span><?php comment_date() ?></span>
			<p><?php comment_text() ?></p>
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
	      '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	      '" size="30"' . $aria_req . ' /></p>',

	    'url' =>
	      '<p class="comment-form-url"><label for="url">' .
	      __( 'Website', 'domainreference' ) . '</label>' .
	      '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
	      '" size="30" /></p>');?>

<?php comment_form($comments_args) ?>
