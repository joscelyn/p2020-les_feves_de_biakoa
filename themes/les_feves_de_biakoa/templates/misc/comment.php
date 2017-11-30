<table>
    <tr>
        <td><img src="<?php echo get_avatar_url($comment->user_id); ?>" alt=""></td>
        <td>
            <h3><?php echo $comment->comment_author; ?></h3>
            <p><?php echo $comment->comment_date; ?></p>
            <p><?php echo $comment->comment_content; ?></p>
        </td>
    </tr>
</table>