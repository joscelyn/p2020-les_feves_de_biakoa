<article class="posts__card box">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <?php

        $postType = get_post_type(get_the_ID());

        if($postType == "post")
        {
            $taxonomyType = "category";
        }else if($postType == "project")
        {
            $taxonomyType = "projectcategory";
        }

        $terms = get_the_terms(get_the_ID(), $taxonomyType);
    ?>
    <div class="posts__card__text">
        <h3 class="posts__card__title"><?php the_title(); ?> - <?php echo $postType; ?></h3>
        <?php

            if ($terms):

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
