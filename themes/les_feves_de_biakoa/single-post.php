<?php get_header(); ?>

<?php

    if( have_posts() ): while( have_posts() ): the_post();

    $terms = get_the_terms(get_the_ID(), 'category');

?>

    <main>
        <div class="headTitles">
            <h2 class="headTitles__sub">
                <?php

                if ( !is_bool($terms) ) {
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
                    <?php get_template_part('templates/misc/section-comments'); ?>
                </div>
            </div>
        </div>

<?php
endwhile;
else:
    ?>

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


        <div class="supportUs">
            <div class="container">
                <div class="titleAndLink">
                    <h2 class="fatTitle">Nous soutenir</h2>
                </div>

                <div class="box green supportUs__box">
                    <div class="supportUs__text">
                        <h3 class="supportUs__title">Lorem ipsum dolor sit amet, consectetur.</h3>
                        <p class="supportUs__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet commodi cupiditate
                            dicta error esse et exercitationem fugit hic incidunt iusto laborum non numquam porro, rem sequi
                            soluta! Ab, deleniti.</p>
                        <div class="txt-center">
                            <a class="btn btn--dark" href="#">En savoir plus</a>
                        </div>
                    </div>
                    <div class="supportUs__img">
                        <img src="images/guy.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<?php get_footer(); ?>
