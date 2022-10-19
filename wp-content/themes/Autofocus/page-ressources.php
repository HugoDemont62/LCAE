<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="ressources">
        <div class="ressources__content">
            <?php the_content(); ?>
        </div>
    </div>


<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>