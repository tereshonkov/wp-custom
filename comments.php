<section class="comments-blog">
    <h4>Comments(3)</h4>
    <div class="item-single">
      <div class="comment-img">
        <img src="<?php echo get_template_directory_uri()?>/img/blog/single//image.png" alt="logo">
      </div>
      <div class="comment-text">
        <div class="coment-title">
          <h4>Nora Martin</h4>
          <p>Reply</p>
        </div>
        <p>01-12-2020</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut eu morbi tincidunt erat egestas quisque ultrices ut. Vel elementum blandit et tellus sit tincidunt nulla non tincidunt.</p>
      </div>
    </div>
    <div class="item-single">
      <div class="comment-img">
        <img src="<?php echo get_template_directory_uri()?>/img/blog/single//image.png" alt="logo">
      </div>
      <div class="comment-text">
        <div class="coment-title">
          <h4>Nora Martin</h4>
          <p>Reply</p>
        </div>
        <p>01-12-2020</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut eu morbi tincidunt erat egestas quisque ultrices ut. Vel elementum blandit et tellus sit tincidunt nulla non tincidunt.</p>
      </div>
    </div>
    <div class="item-single">
      <div class="comment-img">
        <img src="<?php echo get_template_directory_uri()?>/img/blog/single//image.png" alt="logo">
      </div>
      <div class="comment-text">
        <div class="coment-title">
          <h4>Nora Martin</h4>
          <p>Reply</p>
        </div>
        <p>01-12-2020</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut eu morbi tincidunt erat egestas quisque ultrices ut. Vel elementum blandit et tellus sit tincidunt nulla non tincidunt.</p>
      </div>
    </div>

    <?php 
    $defaults = [
	'fields'               => [
		'author' => '

			<input class="name" placeholder="name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' />
',
		'email'  => '
			<input placeholder="email" class="email" id="email" name="email" ' . ( 'type="email"'  ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . ' />
',
	],
	'comment_field'        => '
		<textarea placeholder="message" id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>',
	'must_log_in'          => '<p class="must-log-in">' .
		 sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post -> ID) ) ) ) . '
	 </p>',
	'logged_in_as'         => '<p class="logged-in-as">' .
		 sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink($post -> ID ) ) ) ) . '
	 </p>',
	'comment_notes_before' => '<p class="comment-notes">
		<span id="email-notes">' . __( 'Your email address will not be published.' ) . '
	</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'class_container'      => 'comment-respond',
	'class_form'           => 'comment-form',
	'class_submit'         => 'submit-single',
	'name_submit'          => 'submit',
	'title_reply'          => __( 'Leave a Reply' ),
	'title_reply_to'       => __( 'Leave a Reply to %s' ),
	'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
	'title_reply_after'    => '</h3>',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => __( 'Post Comment' ),
	'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">"%4$s"</button>',
	'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
	'format'               => 'xhtml',
];
comment_form( $defaults );
  ?>
  </section>