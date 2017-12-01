<<<<<<< HEAD
<?php
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    get_header();
?>



    <main>
        <div class="headTitles">
            <h2 class="headTitles__sub">Actions</h2>
            <h1 class="headTitles__main"><?php echo $term->name; ?></h1>
        </div>


        <?php if( have_posts() ): while( have_posts() ): the_post();

            get_template_part( 'templates/misc/project' );

            endwhile;
            else:

        ?>

            <p>Pas d'article</p>

        <?php endif; ?>


        <?php get_template_part( 'templates/misc/section-supportus' ); ?>
    </main>
</div>


<?php get_footer(); ?>

=======
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<h1><?php echo $term->name; ?></h1>

<?php
    if( have_posts() ): while( have_posts() ): the_post();

        get_template_part( 'templates/misc/article' );

    endwhile;
    else:
    ?>

    <p>Pas d'article</p>

<?php endif; ?>
>>>>>>> dev-etienne
