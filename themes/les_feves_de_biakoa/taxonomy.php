<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<h1><?php echo $term->name; ?></h1>

<?php
    if( have_posts() ): while( have_posts() ): the_post();

        get_template_part( 'templates/misc/article' );

    endwhile;
    else:
    ?>

    <p>Pas d'article</p>

<?php endif; ?>