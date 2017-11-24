<html>
    <body>
        <?php
        // GET IFRAME MAP
        get_template_part( 'templates/misc/map' );

        post_function('project');

        ?>
        <script type="text/javascript">
            console.log("ok");
            var current_page = <?= $paged; ?>;
            var max_paged = <?= $the_query->max_num_pages; ?>;
        </script>
    <?php get_footer(); ?>
