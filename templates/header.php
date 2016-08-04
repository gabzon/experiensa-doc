<?php
use Roots\Sage\Nav;
use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';
?>

<header class="navbar navbar-fixed-top navbar-light bg-faded">
    <?php if (is_admin_bar_showing()): ?>
        <?= '<div style="min-height: 28px;"></div>'; ?>
    <?php endif; ?>
    <div class="container">
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <nav class="nav-primary" role="navigation" style="text-transform:uppercase">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav nav-inline pull-xs-right']);
            endif;
            ?>
        </nav>
    </div>
</header>
