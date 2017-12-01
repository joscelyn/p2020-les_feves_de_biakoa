<?php

    if( have_posts() ): while( have_posts() ): the_post();

        get_template_part( 'templates/misc/article' );


    endwhile;
    else:
?>

    <p>Pas d'article</p>

<?php endif; ?>