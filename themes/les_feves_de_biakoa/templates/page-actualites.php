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
                <?php
                    post_function('post');
                    wp_reset_query();
                ?>
            </div>
            <div class="container">
                <div class="row button_more">
                    <a href="#" class="button">Charger plus</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var max_paged = <?= $max_paged; ?>;
    </script>


    <?php get_template_part( 'templates/misc/section-supportus' ); ?>
</main>


<?php get_footer(); ?>
