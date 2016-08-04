<footer class="navbar navbar-fixed-bottom navbar-light bg-faded">
    <div class="container">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
</footer>
