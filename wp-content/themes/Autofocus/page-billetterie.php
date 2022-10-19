<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="hero billetteriepage">
        <div class="hero__content">
            <div class="hero__section">
                <h1 class="hero__title">Billetterie</h1>
                <img src="<?php echo get_template_directory_uri() . '/img/Billetpng.png' ?>">
            </div>
        </div>
    </section>
    <section class="billetterie">
        <div class="billetterie__content">
            <div class="billetterie__cards">
                <div class="billetterie__card">
                    <h2 class="billetterie__title">Offre étudiant</h2>
                    <p class="billetterie__desc"> Format standard à prix étudiant.</p>
                    <p class="billetterie__price">20 €</p>
                </div>
                <div class="billetterie__card">
                    <h2 class="billetterie__title">Offre Standard</h2>
                    <p class="billetterie__desc">
                        Format standard, ayez accès à de nombreux stands et conférences.
                    </p>
                    <p class="billetterie__price">30 €</p>
                </div>
                <div class="billetterie__card">
                    <h2 class="billetterie__title">Offre - 12 ans</h2>
                    <p class="billetterie__desc">Pour les moins de 12 ans le salon est gratuit !</p>
                    <p class="billetterie__price">Gratuit</p>
                </div>
            </div>
            <p class="billetterie__information">Vous allez être redirigé vers TicketMaster</p>
            <a href="#" class="billetterie__cta cta">Je commande !</a>
        </div>
    </section>
    </main>


    <?php
    the_content();
    ?>


<?php endwhile; else: ?>
    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>