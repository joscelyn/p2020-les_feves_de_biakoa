<?php

/*
Template Name: News
*/

get_header(); ?>

<main>
    <div class="headTitles">
        <h2 class="headTitles__sub">Nos actualités</h2>
        <h1 class="headTitles__main">Actualités</h1>
    </div>
    <div class="posts">
        <div class="container">
            <div class="posts__cards">
                <?php post_function('post'); ?>
            </div>
            <div class="container">
                <div class="row button_more">
                    <a href="#" class="button">Charger plus</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var max_paged = <?= $the_query->max_num_pages; ?>;
    </script>


    <?php get_template_part( 'templates/misc/section_supportus' ); ?>
</main>


<?php get_footer(); ?>
