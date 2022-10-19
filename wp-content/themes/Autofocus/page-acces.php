<?php get_header(); ?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="hero accespage">
        <div class="hero__content"><h1 class="hero__title"></h1></div>
    </div>
    <section class="hero">
        <div class="hero__content">
            <div class="hero__section">
                <h1 class="hero__title">Informations</h1>
            </div>
        </div>
    </section>
    <div class="acces">
        <div class="acces__content">
            <?php the_content(); ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6996366485455!2d3.0757555160881633!3d50.632696379501006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5edf53303cd%3A0xa21c4b7809284f55!2sLille%20Grand%20Palais!5e0!3m2!1sfr!2sfr!4v1655709628385!5m2!1sfr!2sfr"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>


<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p><?php endif; ?><?php get_footer() ?>