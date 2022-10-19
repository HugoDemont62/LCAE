</main>
<section class="sponsors">
    <div class="sponsors__content">
        <h2 class="sponsors__title">Nos sponsors</h2>
        <div class="sponsors__list">
            <div class="sponsor">
                <img class="sponsor__img"
                     src="<?php echo get_template_directory_uri() . '/img/1280px-Fujifilm_logo.svg.png' ?>"
                     alt="Logo canon">
            </div>
            <div class="sponsor">
                <img class="sponsor__img"
                     src="<?php echo get_template_directory_uri() . '/img/580b57fcd9996e24bc43c533.png' ?>"
                     alt="Logo canon">
            </div>

            <div class="sponsor">
                <img class="sponsor__img"
                     src="<?php echo get_template_directory_uri() . '/img/sigma-corporation.svg' ?>" alt="Logo canon">
            </div>
            <div class="sponsor">
                <img class="sponsor__img"
                     src="<?php echo get_template_directory_uri() . '/img/canon-inc.-logo-black-and-white.png' ?>"
                     alt="Logo canon">
            </div>
            <div class="sponsor">
                <img class="sponsor__img" src="<?php echo get_template_directory_uri() . '/img/Panasonic-Logo.png' ?>"
                     alt="Logo canon">
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer__content">
        <div class="footer__section">
            <h2 class="footer__title">Les pages</h2>
            <div class="footer__links">
                <?php
                $pages = get_pages();
                foreach ($pages as $page) {
                    $option = '<a href="' . get_page_link($page->ID) . '" class="footer__link">' . $page->post_title . '</a>';

                    echo $option;
                }
                ?>
            </div>
            <a href=""></a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">À propos</h2>
            <div class="footer__links">
                <a href="<?php echo site_url(); ?>/acces" class="footer__link">Qui sommmes-nous ?</a>
                <a href="<?php echo site_url();  ?>/acces" class="footer__link">Exposant</a>
                <a href="<?php echo site_url(); ?>/acces" class="footer__link">Grand Palais Lille</a>
            </div>
            <a href=""></a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Contact</h2>
            <div class="footer__links">
                <a href="https://www.youtube.com/channel/UC-dAFP1v4BE2Kap68-nBzbg" class="footer__link">Youtube</a>
                <a href="https://www.instagram.com/salon_autofocus/" class="footer__link">Instagram</a>
                <a href="https://www.facebook.com/profile.php?id=100082239441141" class="footer__link">Facebook</a>
                <a href="tel:07-82-83-58-84" class="footer__link">07-82-83-58-84</a>
                <a href="<?php echo site_url();?>/contact" class="footer__link">E-mail</a>
            </div>
            <a href=""></a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">À propos</h2>
            <div class="footer__links">
                <a href="<?php echo get_template_directory_uri() ?>/mentions-legales" class="footer__link">Mentions
                    légales</a>
                <a href="<?php echo get_template_directory_uri() ?>/mentions-legales" class="footer__link">Conditions
                    générale du marché</a>
                <a href="<?php echo get_template_directory_uri() ?>/mentions-legales" class="footer__link">Données
                    personnelles</a>
                <a href="<?php echo get_template_directory_uri() ?>/mentions-legales" class="footer__link">Cookies</a>
            </div>
            <a href=""></a>
        </div>
    </div>
    <div>
        <p>©<?php echo date("Y") ?> | Tous droits réservés | Projet étudiant de fin d'études MMI </p>
    </div>
</footer>

</body>


</html>