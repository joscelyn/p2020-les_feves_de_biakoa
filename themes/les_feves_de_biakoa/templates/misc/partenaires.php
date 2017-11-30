<div class="partners__slider">

    <?php
    $args = array(
        'post_type' => 'partenaire',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="partners__slider__item">
            <?php the_post_thumbnail(); ?>
        </div>

    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

</div>