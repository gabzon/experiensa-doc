<?php
/**
* Template Name: Architecture
*/
?>

<div class="container-fluid">
    <h2 class="text-center uppercase"><?php the_title(); ?></h2>
    <hr>
    <div class="ui blue segments">
        <!-- Travel module ------------------------------------------------------------>
        <?php $query = do_query('Module') ?>
        <?php display_results($query, 'Modules', 'blue'); ?>

        <!-- Templates ---------------------------------------------------------------->
        <hr>
        <?php $query = do_query('Template') ?>
        <?php display_results($query, 'Templates', 'orange'); ?>

        <!-- Partials ----------------------------------------------------------------->
        <hr>
        <?php $query = do_query('Partial') ?>
        <?php display_results($query, 'Partials', 'red'); ?>

        <!-- Partials ----------------------------------------------------------------->
        <hr>
        <?php $query = do_query('Component') ?>
        <?php display_results($query, 'Web components', 'purple'); ?>
    </div>
</div>
<br>
<br>
