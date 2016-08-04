<?php

function do_query($title, $post_type = 'page'){
    // WP_Query arguments
    $args = [
        'category_name'     => $title,
        'post_type'	        => $post_type,
        'posts_per_page'    =>  -1
    ];
    // The Query
    $query = new WP_Query( $args );
    return $query;
}


function display_results($query, $title, $color){ ?>
    <section>
        <h3><?= $title; ?></h3>
        <br>
        <?php if ( $query->have_posts() ): ?>
            <div class="card-columns">
                <?php while (  $query->have_posts() ) :?>
                    <?php $query->the_post(); ?>

                    <div class="card">
                        <?php if (has_post_thumbnail()): ?>
                            <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="Card image cap">
                        <?php endif; ?>
                        <div class="card-block">
                            <h4 class="card-title"><?= the_title(); ?></h4>
                            <p class="card-text"><?= the_content(); ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="<?= get_permalink() ?>" class="btn btn-primary">More Info</a>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <br>
    </section>
    <!-- Restore original Post Data -->
    <?php
    wp_reset_postdata();
} ?>
