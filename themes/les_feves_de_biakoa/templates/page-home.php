<?php /*
Template Name: Home
*/
?>

<?php get_header(); ?>

        <main>
            <div class="headTitles">
                <h2 class="headTitles__sub"><?php echo the_field('header_titre');?><br/></h2>
                <h1 class="headTitles__main"><?php echo the_field('header_sous_titre');?></h1>
            </div>

            <div class="mainContent container">
                <div class="aboutUs">
                    <h2 class="fatTitle">Qui sommes-nous ?</h2>

                    <div class="box">
                        <div class="aboutUs__text">
                            <h4><?php echo the_field('section_1_description_sous_titre');?></h4>
                            <p><?php echo the_field('section_1_description_texte');?></p>
                            <div class="txt-center">
                                <a href="http://localhost/_projets/biakoa/association/" class="btn">En savoir plus</a>
                            </div>
                        </div>
                        <div class="aboutUs__img">
                            <img style="height: 400px;" src="<?php  the_field('section_1_description_image'); ?>">
                        </div>
                    </div>
                </div>

                <div class="donate">
                    <h2 class="fatTitle"><?php echo the_field('section_1_don_titre');?></h2>
                    <div class="box green">
                        <h4><?php echo the_field('section_1_don_sous_titre');?></h4>
                        <p><?php echo the_field('section_1_don_texte');?></p>
                        <div class="txt-center">
                            <a href="#" class="btn">Faire un don</a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="story story--bg">
                    <div class="container">
<!--                        <h3 class="fatTitle underlineTitle">--><?php //echo the_field('section_2_village_titre');?><!--</h3>-->
<!--                        <h2 class="subTitle">--><?php //echo the_field('section_2_village_sous_titre');?><!--</h2>-->

                        <div class="flexRow flexRow--middle">

                            <div class="col-1">
                                <h3 class="fatTitle underlineTitle"><?php echo the_field('section_2_village_titre');?></h3>
                                <h2 class="subTitle"><?php echo the_field('section_2_village_sous_titre');?></h2>
                                <div class="box">
                                    <div class="box__text">
                                        <h4>Le village de Biakoa est un petit village du Cameroun, au nord de Yaoundé.</h4>
                                        <p><?php echo the_field('section_2_village_desc_texte');?></p>
                                        <a href="village.html" class="btn">Visiter le village</a>
                                    </div>
                                </div>
                                <figure class="image">
                                    <div class="image__img box">


                                        <img style="height:auto;" src="<?php the_field('section_2_village_image_1'); ?>">
                                    </div>
                                </figure>
                                <figure class="image">
                                    <div class="image__img box">
                                        <img style="height:auto;" src="<?php the_field('section_2_village_image_3'); ?>">
                                    </div>
                                    <figcaption class="box image__caption">
                                        <?php echo the_field('section_2_village_image_3_legende'); ?>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-1">
                                <figure class="image">
                                    <div class="image__img box">
                                        <img style="height:auto;" src="<?php the_field('section_2_village_image_2'); ?>">
                                    </div>
                                    <figcaption class="box image__caption">
                                        <?php echo the_field('section_2_village_image_2_legende'); ?>
                                    </figcaption>
                                </figure>

                                <figure class="map box green">
                                    <div class="googleMap">

                                    </div>
                                    <figcaption class="map__caption">
                                        <p>Le village est situé dans la région du Centre, dans le département du Mbam-et-Kim. Il fait partie de la commune de Mbangassina.</p>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>

                        <div class="flexRow flexRow--middle">

<!--                            <div class="col-1">-->
<!--                                <figure class="image">-->
<!--                                    <div class="image__img box">-->
<!--                                        <img style="height:auto;" src="--><?php //the_field('section_2_village_image_3'); ?><!--">-->
<!--                                    </div>-->
<!--                                    <figcaption class="box image__caption">-->
<!--                                        --><?php //echo the_field('section_2_village_image_3_legende'); ?>
<!--                                    </figcaption>-->
<!--                                </figure>-->
<!--                            </div>-->

<!--                            <div class="col-1">-->
<!--                                <figure class="map box green">-->
<!--                                    <div class="googleMap">-->
<!---->
<!--                                    </div>-->
<!--                                    <figcaption class="map__caption">-->
<!--                                        <p>Le village est situé dans la région du Centre, dans le département du Mbam-et-Kim. Il fait partie de la commune de Mbangassina.</p>-->
<!--                                    </figcaption>-->
<!--                                </figure>-->
<!--                            </div>-->

                        </div>

                    </div>
                </div>

                    <div class="posts">
                        <div class="container">
                            <div class="titleAndLink">
                                <h2 class="fatTitle">Actualités</h2>
                                <a href="#">Toutes les actualités <img class="titleAndLink__arrow" src="<?= THEME_URL ?>/dist/img/arrow.svg"></a>
                            </div>

                            <div class="posts__cards">

                                <?php
                                    $args=array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'orderby' => 'date',
                                        'order'   => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <div class="posts__card box">
                                    <?php the_post_thumbnail(); ?>

                                    <div class="posts__card__text">
                                        <h3 class="posts__card__title"><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="txt-center">
                                            <a class="btn" href="<?php the_permalink(); ?>">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>


                    <div class="projects">
                        <div class="container">
                            <div class="titleAndLink">
                                <h2 class="fatTitle">Nos actions</h2>
                                <a href="#">Tous les projets <img class="titleAndLink__arrow" src="<?= THEME_URL ?>/dist/img/arrow.svg"></a>
                            </div>

                            <div class="projects__cards">

                                <?php
                                $args=array(
                                    'post_type' => 'project',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order'   => 'DESC',
                                );
                                $the_query = new WP_Query( $args );
                                ?>

                                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <div class="projects__card">
                                    <?php the_post_thumbnail(); ?>

                                    <h3 class="projects__card__title"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="btn" href="<?php the_permalink(); ?>">Découvrir</a>
                                </div>

                                <?php endwhile; else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div class="partners">
                        <div class="container">
                            <div class="titleAndLink">
                                <h2 class="fatTitle">Nos partenaires</h2>

                                <div class="partners__controls">
                                    <span class="partners__controls__prev"><img src="<?= THEME_URL ?>/dist/img/arrow.svg"></span>
                                    <span class="partners__controls__next"><img src="<?= THEME_URL ?>/dist/img/arrow.svg"></span>
                                </div>
                            </div>

                            <div class="partners__slider">

                                <?php
                            $args=array(
                                'post_type' => 'partenaire',
                                'orderby' => 'date',
                                'order'   => 'DESC',
                            );
                            $the_query = new WP_Query( $args );
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="partners__slider__item">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                            <?php endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
        </main>
    </div>





<?php get_footer(); ?>