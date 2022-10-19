<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
    echo ' 

 <section class="guests">
        <h2 class="guests__title">Nos invités</h2>
        <div class="artists">
';
    $args = array('category_name' => 'Artistes', 'orderby'=>'rand');
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

    </section>


<?php endwhile; else: ?>
<p><?php _e('Rien à afficher'); ?></p>
<?php endif; ?>
<?php get_footer() ?>
