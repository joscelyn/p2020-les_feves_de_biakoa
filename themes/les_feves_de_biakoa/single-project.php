<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <p>Budget : <?php echo get_field( "budget"); ?></p>

    <?php
    $terms = get_the_terms(get_the_ID(), 'projectcategory');
    $count = count( $terms );

    if ( $count > 0 ):

        foreach ( $terms as $term ):

            echo '<li><a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a></li>';

        endforeach;

    endif;
    ?>

<?php
    endwhile;
    else:
?>

    <p>Pas d'article</p>

<?php endif; ?>