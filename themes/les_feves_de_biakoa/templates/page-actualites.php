<?php get_header(); ?>

<main>
    <div class="headTitles">
        <h1 class="headTitles__main">Actualités</h1>
    </div>
    <div class="posts">
        <div class="container">

            <div class="posts__cards">
                <?php

                $args = get_posts();

                foreach ( $args as $post ): setup_postdata ($post);

                    get_template_part( 'templates/misc/article' );

                    ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php get_template_part( 'templates/misc/section_supportus' ); ?>
</main>
</div>


<?php get_footer(); ?>
