<?php /*
Template Name: Village
*/
?>


<?php get_header(); ?>
<main>
    <div class="headTitles">
        <h2 class="headTitles__sub"><?php echo the_field('header_titre');?></h2>
        <h1 class="headTitles__main"><?php echo the_field('header_sous_titre');?></h1>
    </div>

    <div class="mainContent">
        <div class="container">

            <div class="abstract txtMaxWidth">

                <div class="box">
                    <div class="box__text">
                        <p><?php echo the_field('section_1_presentation_texte');?></p>
                    </div>
                </div>
            </div>
            section_1_presentation_image
        </div>

        <div class="story">
            <div class="container">

                <div class="flexRow">

                    <div class="col-2 negativeMargin">
                        <figure class="image">
                            <div class="image__img box">
                                <img src="<?php echo the_field('section_1_presentation_image');?>" alt="Image"/>
                            </div>
                        </figure>
                    </div>

                    <div class="col-1">
                        <div class="">
                            <ul class="keyFigures">
                                <?php
                                if (have_rows('section_1_presentation_chiffre')):

                                    while (have_rows('section_1_presentation_chiffre')) : the_row();

                                        ?>

                                        <li>
                                            <span class="keyFigures__figure"><?php the_sub_field('chiffre'); ?></span> <?php the_sub_field('chiffre_texte'); ?>
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

                <div class="flexRow">
                    <div class="col-1">
                        <figure class="image image--captionSide">
                            <div class="image__img box">
                                <img src="<?php echo the_field('section_2_image');?>" alt="Image"/>
                            </div>
                            <figcaption class="box image__caption image__caption--big">
                                <?php echo the_field('section_2_image_legende');?>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="flexRow">
                    <div class="col-1">
                        <div class="centerText txtMaxWidth">
                            <img src="<?php echo the_field('section_3_fin_logo');?>" alt="" class="centerText__icon"/>
                            <div class="centerText__text">
                                <p><?php echo the_field('section_3_fin_texte');?>.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flexRow">

                    <div class="col-1">
                        <div class="box extraPadding--right">
                            <div class="box__text box__text--txtRight">
                                <p><?php echo the_field('section_3_fin_image_legende');?></p>
                                <a href="index.html" class="btn">Faire un don</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-1 negativeMargin">
                        <figure class="image">
                            <div class="image__img box">
                                <img src="<?php echo the_field('section_3_fin_image');?>" alt="Image"/>
                            </div>
                        </figure>
                    </div>

                </div>

            </div>
        </div><!--END STORY-->

    </div>
</main>
</div>

<?php get_footer(); ?>