<div class="action__item container">
    <?php if(get_field('statut')): ?>

        <h2 class="action__item__title">Projet en cours</h2>

    <?php endif; ?>

    <div class="action__item__infos box">

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'icon'); ?>" alt="">

        <div class="action__item__text">

            <h3 class="action__item__subTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt(); ?></p>

            <div class="txt-center">

                <a class="btn" href="<?php the_permalink(); ?>">En savoir plus</a>

            </div>

        </div>
    </div>
</div>