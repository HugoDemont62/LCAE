<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="hero">
        <div class="hero__content">
            <div class="hero__section">
                <p class="hero__date">Du 19 au 21 mai 2023</p>
                <h1 class="hero__title">Autofocus</h1>
                <div class="hero__decoration"></div>
                <p class="hero__subtitle">Le salon de la photographie de Lille</p>
                    <a href="<?php echo site_url('/billetterie/');?>" class="hero__cta cta">Je réserve maintenant</a>
            </div>
            <div class="hero__section">
                <img class="hero__img" src="<?php echo get_template_directory_uri() . '/img/hero.jpg' ?>"
                     alt="image de fond">
                <img class="hero__img" src="<?php echo get_template_directory_uri() . '/img/hero.jpg' ?>"
                     alt="image de fond">
                <img class="hero__img" src="<?php echo get_template_directory_uri() . '/img/hero.jpg' ?>"
                     alt="image de fond">
            </div>
        </div>
    </section>
    <?php


////// Part artistes
    echo ' 

 <section class="guests">
        <h2 class="guests__title">Nos invités</h2>
        <div class="artists">
';
    $args = array('category_name' => 'Artistes', 'posts_per_page' => 4);
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post); ?>
        <div class="artist">

            <?php
            echo "<div class='tags'>";
            the_tags("", "");
            echo "</div>";

            ?>
            <div class="miniatures">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
            </div>
            <h3>
                <?php the_title(); ?>
            </h3>
        </div>


    <?php endforeach; ?>

    </div>
    <a class="guests__cta cta" href="<?php get_template_directory_uri(); ?>./artistes">
        Voir plus
    </a>
    </section>


    <?php
//// part stand
    echo ' 

      <section class="stands">
        <div class="stands__content">
          <h2 class="stands__title">Des stands dédiés à la découverte</h2>
          <div class="stands__grid">
';
    $args = array('category_name' => 'Activités', 'posts_per_page' => 3);
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post); ?>
        <div class="stand">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail(); //img de l'activité
            } ?>
            <h3>
                <?php the_title(); //le titre?>
            </h3>
            <?php
            the_content();//le texte de l'activité lors du Hover
            ?>
        </div>

    <?php endforeach; ?>
    </div>
    <a class="guests__cta cta" href="<?php get_template_directory_uri(); ?>./activites">
        Voir plus
    </a>
    </section>


    <?php

/// part conf
    echo ' 

      <section class="conferences">
        <div class="conferences__content">
          <h2 class="conferences__title">Des conférences</h2>
';
    $args = array('category_name' => 'Conférences', 'posts_per_page' => 1);
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post); ?>
        <div class="conferences__section">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail(); //img de l'activité
                } ?>

        <div class="conferences__text">
            <h3 class="conferences__name">
                <?php the_title(); //le titre?>
            </h3>
                <?php
                the_content();//le texte de l'activité lors du Hover
                ?>
            <a class="conferences__cta cta" href="<?php get_template_directory_uri(); ?>./conferences">
                Voir plus
            </a>

        </div>

    </div>

    <?php endforeach; ?>
    </div>

    </section>
<?php endwhile; else: ?>
    <p><?php _e('Rien à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>



