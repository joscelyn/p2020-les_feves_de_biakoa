<article>
    <h2><?php the_title(); ?></h2>
    <div><?php the_excerpt(); ?></div>
    <?php
    $terms = get_the_terms(get_the_ID(), 'projectcategory');
    $count = count( $terms );

    if ( $count > 0 ):

        foreach ( $terms as $term ):

            echo '<li><a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a></li>';

        endforeach;

    endif;
    ?>

    <br>
    <a href="<?php the_permalink(); ?>">Lire l'article</a>

</article>
