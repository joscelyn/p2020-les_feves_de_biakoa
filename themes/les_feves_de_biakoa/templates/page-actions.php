<?php
/*
Template Name: Actions
*/

get_header();
?>



    <main>



        <div class="headTitles">
            <h2 class="headTitles__sub">Nos actions</h2>
            <h1 class="headTitles__main">Actions</h1>
        </div>

        <?php get_template_part( 'templates/misc/section_supportus' ); ?>
        <?php
        $args = get_posts(array(
            'post_type' => 'project'
        ));
        foreach ( $args as $post ) {
            setup_postdata ($post);
            get_template_part( 'templates/misc/project' );
        }
        ?>



    </main>
    </div>


<?php get_footer(); ?>