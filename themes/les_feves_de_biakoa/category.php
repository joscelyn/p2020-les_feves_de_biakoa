<?php get_header(); ?>

<main>
    <div class="headTitles">
        <h2 class="headTitles__sub">
            Actualités
        </h2>
        <h1 class="headTitles__main"><?php single_cat_title(); ?></h1>
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
