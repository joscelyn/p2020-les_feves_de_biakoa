<?php get_header(); ?>

<?php

if( have_posts() ): while( have_posts() ): the_post();
    $terms = get_the_terms(get_the_ID(), 'category');
    $count = count( $terms );
    ?>

    <main>
    <div class="headTitles">
        <h2 class="headTitles__sub">
            <?php
            if ( $count > 0 ) {
                foreach ( $terms as $term ) {
                    echo '<a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a> ';
                }
            }
            ?>
        </h2>
        <h1 class="headTitles__main"><?php the_title(); ?></h1>
    </div>

    <div class="mainContent">
        <div class="container">
            <div class="singleActu box">
                <div class="singleActu__infos">
                    <h2 class="singleActu__infos__text">Par <?php echo get_the_author(); ?> le <?php the_date(); ?></h2>
                </div>
                <div class="singleActu__content">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('templates/misc/section_comments'); ?>

    <?php endwhile; else: ?>

    <p>Pas d'article</p>

<?php endif; ?>
        <div class="posts">
            <div class="container">
                <div class="titleAndLink">
                    <h2 class="fatTitle">Actualités</h2>
                    <a href="<?php echo get_permalink( get_page_by_path( 'nos-actualites' ) ); ?>">Toutes les actualités <img class="titleAndLink__arrow" src="img/arrow.svg"></a>
                </div>

                <div class="posts__cards">
                    <?php

                        $args = get_posts(array(
                            'numberposts' => 3
                        ));

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