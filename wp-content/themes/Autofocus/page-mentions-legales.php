<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="hero mentions-legalespage">
            <div class="hero__content">
                <h1 class="hero__title">Mentions légales</h1>
            </div>
        </div>
        <div class="mentions-legales">
            <div class="mentions-legales__content">

                <?php the_content(); ?>
            </div>
        </div>


<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>