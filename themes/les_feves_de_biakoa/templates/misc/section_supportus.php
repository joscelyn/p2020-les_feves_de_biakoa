<div class="supportUs">
    <div class="container">
        <div class="titleAndLink">
            <h2 class="fatTitle"><?php echo the_field('section_1_don_titre'); ?></h2>
        </div>

        <div class="box green supportUs__box">
            <div class="supportUs__text">
                <h3 class="supportUs__title"><?php echo the_field('section_1_don_sous_titre'); ?></h3>
                <p class="supportUs__paragraph"><?php echo the_field('section_1_don_texte'); ?></p>
                <div class="txt-center">
                    <a class="btn btn--dark" href="#">Faire un don</a>
                </div>
            </div>
            <div class="supportUs__img">
                <img src="<?php the_field('section_1_don_action_image'); ?>">
            </div>
        </div>
    </div>
</div>