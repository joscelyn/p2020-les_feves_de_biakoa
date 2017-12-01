<?php /*
Template Name: Association
*/
?>

<?php get_header(); ?>

    <main>
        <div class="headTitles">
            <h2 class="headTitles__sub"><?php echo the_field('header_titre'); ?></h2>
            <h1 class="headTitles__main"><?php echo the_field('header_sous_titre'); ?></h1>
        </div>

        <div class="mainContent">
            <div class="container">

                <div class="aboutUs">
                    <h2 class="fatTitle"><?php echo the_field('section_1_description_titre'); ?></h2>

                    <div class="box flexRow flexRow--middle">
                        <div class="box__text">
                            <p><?php echo the_field('section_2_descr'); ?></p>
                        </div>
                        <div class="box__img">
                            <img style="height: 240px;" src="<?php the_field('section_1_description_image'); ?>">
                        </div>
                    </div>
                </div>

                <div class="keyPoints">
                    <h2 class="fatTitle">Éléments clés</h2>
                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <div class="portrait box">
                                <img width="" src="<?php the_field('section_2_profil_image'); ?>">
                                <figcaption class="portrait__caption">
                                    <h5><?php the_field('section_2_profil_nom'); ?></h5>
                                    <p><?php the_field('section_2_profil_sous_titre'); ?></p>
                                    <p><?php the_field('section_2_profil_description'); ?></p>
                                </figcaption>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="box timeline">
                                <ul class="timeline__list">

                                    <?php

                                    if (have_rows('section_2_chrono')):

                                        while (have_rows('section_2_chrono')) : the_row();

                                            ?>
                                            <li>
                                                <div class="circle">
                                                    <span class="month"><?php the_sub_field('chrono_mois'); ?></span>
                                                    <span class="year"><?php the_sub_field('chrono_annee'); ?></span>
                                                </div>
                                                <p><?php the_sub_field('chrono_description'); ?></p>
                                            </li>

                                            <?php
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="container">
                <div class="story">

                    <h3 class="fatTitle underlineTitle"><?php the_field('section_3_histoire_titre'); ?></h3>

                    <div class="flexRow flexRow--middle">

                        <div class="col-2">
                            <div class="box">
                                <div class="box__text">
                                    <h4><?php the_field('section_3_creation_titre'); ?></h4>
                                    <p><?php the_field('section_3_creation_texte'); ?></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-3">
                            <figure class="image">
                                <div class="image__img box">
                                    <img src="<?php the_field('section_3_creation_image'); ?>" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption">
                                    <?php the_field('section_3_creation_image_legende'); ?>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <div class="box green">
                                <div class="box__text">
                                    <h4><?php the_field('section_4_decouverte_action_titre'); ?></h4>
                                    <p><?php the_field('section_4_decouverte_action_texte'); ?></p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box__text">
                                    <div>
                                        <p><?php the_field('section_4_decouverte_citation_texte'); ?></p>
                                        <p class="author"><?php the_field('section_4_decouverte_citation_auteur'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <figure class="image">
                                <div class="image__img box">
                                    <img src="<?php the_field('section_4_decouverte_action_image'); ?>" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption">
                                    <?php the_field('section_4_decouverte_action_image_descr'); ?>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <div class="portrait box">
                                <img src="<?php the_field('section_4_decouverte_profil_image'); ?>" alt="Image"/>
                                <figcaption class="portrait__caption">
                                    <h5><?php the_field('section_4_decouverte_profil_nom'); ?></h5>
                                    <p><?php the_field('section_4_decouverte_profil_sous_titre'); ?></p>
                                </figcaption>
                            </div>
                        </div>

                        <div class="col-1">
                            <div class="box">
                                <div class="box__text">
                                    <h4><?php the_field('section_4_decouverte_description_titre'); ?></h4>
                                    <p><?php the_field('section_4_decouverte_description_texte'); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-1">
                            <figure class="image image--captionSide">
                                <div class="image__img box">
                                    <img src="<?php the_field('section_5_objectif_image_1'); ?>" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption image__caption--big">
                                    <?php the_field('section_5_objectif_image_descr'); ?>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-3">
                            <div class="box">
                                <div class="box__text">
                                    <h4><?php the_field('section_5_objectif_titre'); ?></h4>
                                    <p><?php the_field('section_5_objectif_texte'); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-small">
                            <div class="box">
                                <div class="box__text">
                                    <h4 class="box__text__title"><?php the_field('section_5_objectif_picto_titre'); ?></h4>
                                    <ul class="iconList">
                                        <?php
                                        $images = get_field('section_5_objectif_picto_image');
                                        $size = 'small_icon'; // (thumbnail, medium, large, full or custom size)

                                        if( $images ): ?>
                                            <?php foreach( $images as $image ): ?>

                                            <li>
                                                <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                                <p><?php echo $image['caption']; ?></p>
                                            </li>

                                            <?php endforeach; ?>
                                        <?php endif; ?>
<!--                                        <li>-->
<!--                                            <img src="" alt="💦">-->
<!--                                            <p>Accès à l'eau potable</p>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </main>
    </div>

<?php get_footer(); ?>