<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    the_content();
    ?>


<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>