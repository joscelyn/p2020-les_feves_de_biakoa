<?php
$category = get_queried_object();
get_header(); ?>

<main>
    <div class="headTitles">
        <h2 class="headTitles__sub">
            Actualités
        </h2>
        <h1 class="headTitles__main"><?php echo $category->name; ?></h1>
    </div>

    <div class="posts">
        <div class="container">

            <div class="posts__cards">
                <?php

                $args = get_posts(array(
                    'category' => $category->term_id
                ));

                foreach ( $args as $post ): setup_postdata ($post);

                    get_template_part( 'templates/misc/article' );

                endforeach;

                ?>
            </div>
        </div>
    </div>

    <?php get_template_part( 'templates/misc/section-supportus' ); ?>
</main>
</div>


<?php get_footer(); ?>
