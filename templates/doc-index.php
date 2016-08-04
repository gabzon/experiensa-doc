<?php
/**
* Template Name: Index
*/
?>
<br>
<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-3">Documentation</h1>
        <p class="lead">This website intends to create a solid documentation for the development the Experiensa App.</p>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-xs">
            <h2>Purpose</h2>
        </div>
        <div class="col-xs-10">
            Experiensa is a web/mobile solution that helps travel agencies transform their business culture to adapt to new markets. Experiensa provides travel agencies with the tools and technologies needed to increase business efficiency and customer satisfaction.
        </div>
    </div>
</div>
<br>
<br>
<div class="container">

    <h2>Business Goals</h2>
    <div class="card-deck">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Increase travel agency efficiency</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Reduce operational costs</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Improve business/customer communication</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Improve customer service</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

</div>
<br>
<section class="technical-goals">
    <div class="container">
        <hr>
        <h2>Technical goals</h2>
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Usability</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Attractiveness</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Performance</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Responsiveness</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Robutsness</h4>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">SEO</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Simplicity</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Security</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Integration</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Flexibility (API)</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section>
    <div class="container">
        <div class="ui three column grid stackable">
            <div class="column">
                <h3>Business Needs</h3>
                <ul>
                    <li>Create Offers/packages</li>
                    <li>Manage Requests and estimates</li>
                    <li>Manage Travel inconvinients</li>
                    <li>Negociate deals and prices with partners</li>
                </ul>
            </div>
            <div class="column">
                <h3>Business Goals</h3>
            </div>
            <div class="column">
                <h3>Solutions</h3>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<?php get_template_part('partials/page-header'); ?>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
