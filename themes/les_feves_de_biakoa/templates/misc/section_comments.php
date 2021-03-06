<div class="comments container">

<h2 class="fatTitle">Commentaires :</h2>

    <?php

        $comments = get_comments(array(
            'post_id' => get_the_ID()
        ));

        foreach($comments as $k => $comment):

            get_template_part('templates/misc/comment');

        endforeach;

    ?>

    <h3 id="reply-title" class="comment-reply-title fatTitle">
        Laisser un commentaire
    </h3>

    <div id="commentform" class="comment-form">

        <?php

        $args = array(
            'id_form'           => 'commentform',
            'class_form'      => 'comment-form',
            'id_submit'         => 'submit',
            'class_submit'      => 'submit',
            'name_submit'       => 'submit',
            'title_reply'       => __( 'Leave a Reply' ),
            'title_reply_to'    => __( 'Leave a Reply to %s' ),
            'cancel_reply_link' => __( 'Cancel Reply' ),
            'label_submit'      => __( 'Post Comment' ),
            'format'            => 'xhtml',
            'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
                '</label><textarea id="comment" class="box" name="comment" cols="45" rows="8" aria-required="true">' .
                '</textarea></p>',
            'must_log_in' => '<p class="logged-in-as">' .
                sprintf(
                    __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                    wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                ) . '</p>',
            'logged_in_as' => '<p class="logged-in-as">' .
                sprintf(
                    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                    admin_url( 'profile.php' ),
                    $user_identity,
                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                ) . '</p>',
            'comment_notes_before' => '<p class="comment-notes">' .
                __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
                '</p>',
            'comment_notes_after' => '<p class="form-allowed-tags">' .
                sprintf(
                    __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
                    ' <code>' . allowed_tags() . '</code>'
                ) . '</p>',
            'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        );
        comment_form();
        ?>
    </div>
</div>
