<<<<<<< HEAD
<?php
/*
Template Name: Page Contact
=======
<?php /*
Template Name: Contact
>>>>>>> dev-etienne
*/
?>

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; endif; ?>
