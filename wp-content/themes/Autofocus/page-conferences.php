<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php

/// part conf
    echo ' 

      <section class="conferences">
        <div class="conferences__content">
          <h2 class="conferences__title">Des conférences</h2>
';
    $args = array('category_name' => 'Conférences');
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


            </div>
        </div>

    <?php endforeach; ?>
    </div>
    </section>
<?php endwhile; else: ?>

    <p><?php _e('Pas de pages à afficher'); ?></p>
<?php endif; ?>

<?php get_footer() ?>