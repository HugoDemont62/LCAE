<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="hero contactpage">
        <div class="hero__content">
            <h1 class="hero__title">Contact</h1>
        </div>
    </div>
    <div class="contact">
    <div class="contact__content">
    <div class="contact__medias">
        <div class="contact__media">
            <a href="https://www.instagram.com/salon_autofocus/">
                <i class="ri-instagram-fill"></i>
                Instagram
            </a>
        </div>
        <div class="contact__media">
            <a href="#">
                <i class="ri-facebook-circle-fill"></i>
                Facebook
            </a>
        </div>
        <div class="contact__media">
            <a href="#">
                <i class="ri-youtube-fill"></i>
                Youtube
            </a>
        </div>
    </div>
    <div class="form">
    <h2 class="form__title">Par email</h2>

    <?php
    the_content();
    ?>

    </div>
    </div>
    </div>
<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>