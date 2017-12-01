<ul class="comments__list">
    <li class="comment">
        <div class="comment__profile box">
            <img src="<?php echo get_avatar_url($comment->user_id); ?>" alt="">
        </div>
        <div class="comment__text box">
            <h3 class="comment__text__name"><?php echo $comment->comment_author; ?></h3>
            <p class="comment__text__specs"><?php echo $comment->comment_date; ?></p>
            <p class="comment__text__content"><?php echo $comment->comment_content; ?></p>
        </div>
    </li>
</ul>