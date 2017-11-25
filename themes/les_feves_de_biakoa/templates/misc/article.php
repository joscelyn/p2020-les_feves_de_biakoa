<article class="posts__card box">
    <?php the_post_thumbnail(); ?>
    <?php

        $terms = get_the_terms(get_the_ID(), 'category');
        $count = count( $terms );

    ?>
    <div class="posts__card__text">
        <h3 class="posts__card__title"><?php the_title(); ?></h3>
        <?php

            if ( $count > 0 ):

                foreach ( $terms as $term ):

                    echo '<li><a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a></li>';

                endforeach;

            endif;

        ?>
        <p><?php the_excerpt(); ?></p>
        <div class="txt-center">
            <a class="btn" href="<?php the_permalink(); ?>">En savoir plus</a>
        </div>
    </div>
</article>
