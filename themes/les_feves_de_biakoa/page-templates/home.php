<?php /*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php the_field('header_titre');?><br/>
<?php the_field('header_sous_titre');?>

<div style="background-image: url(<?php the_field('header_image') ?>); width: 100%; height: 500px;" ></div>

<?php the_field('section_1_description_titre');?><br/>
<?php the_field('section_1_description_sous_titre');?><br/>
<?php the_field('section_1_description_texte');?><br/>

<?php var_dump(the_field('section_1_description_image')); ?>

<!--<img src="--><?php //the_field('section_1_description_image'); ?><!--" />-->

<?php the_field('section_1_don_titre');?><br/>
<?php the_field('section_1_don_sous_titre');?><br/>
<?php the_field('section_1_don_texte');?><br/>

<?php

$args=array(
    'post_type' => 'partenaire',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order'   => 'DESC',
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        ?>

        <article class="col-sm-12 col-md-4">
            <?php
            if(has_post_thumbnail())
            {
                echo '<div class="thumbnail">';
                the_post_thumbnail("hub_film_thumbnail");
                echo '</div>';
            }
            ?>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_excerpt(); ?></p>
        </article>

        <?php
    }
}
/* Restore original Post Data */
wp_reset_postdata();
?>

<?php get_footer(); ?>