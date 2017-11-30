<?php get_header(); ?>



    <main>
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
        <div class="headTitles">
            <h2 class="headTitles__sub">
                <?php
                $terms = get_the_terms(get_the_ID(), 'projectcategory');
                $count = count( $terms );

                if ( $count != 0 ):

                    foreach ( $terms as $term ):

                        echo '<a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a>';

                    endforeach;

                endif;
                ?>
            </h2>
            <h1 class="headTitles__main"><?php the_title(); ?></h1>
        </div>

        <div class="singleAction__live container box">
            <?php

                if(get_field('statut')):

            ?>

                <h2 class="singleAction__live__title">Projets en cours</h2>

            <?php endif; ?>

            <div class="singleAction__live__infos">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                <div class="singleAction__live__text">
                    <h3 class="singleAction__live__subTitle"><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>


        <div class="story story--bg actions__story">
            <div class="container">
                <h2 class="subTitle">Comment sont répartis les <?php echo get_field( "budget"); ?> €</h2>

                <div class="flexRow flexRow--middle">
                    <?php
                        $youtubeLink = get_field('youtube_link');
                        if($youtubeLink){

                            echo '<div class="col-1">';

                        }else echo '<div class="col-12">';
                    ?>

                        <figure class="image">
                            <div class="image__img box">
                                <img src="
                                <?php

                                    $image = get_field('how-image');
                                    echo $image['url'];

                                ?>" alt="Image"/>
                            </div>
                            <figcaption class="box image__caption">
                                <?php echo get_field('how'); ?>
                            </figcaption>
                        </figure>
                    </div>
                    <?php if($youtubeLink): ?>

                        <div class="col-1">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?php echo apply_filters('youtube_url_filter', $youtubeLink); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>

            <div class="singleAction__live container box">
                <?php get_template_part('templates/misc/section-comments'); ?>
            </div>

        <?php
            endwhile;
            else:
        ?>

            <p>Pas d'article</p>

        <?php endif; ?>


        <?php get_template_part( 'templates/misc/section-supportus' ); ?>
    </main>
</div>


<?php get_footer(); ?>
