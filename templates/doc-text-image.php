<?php
/**
* Template Name: Text Image Element
*/
?>

The <b><em>Text Image element</em></b> is a code that allows you to configure different settings for a text over an image. Among the setting we find : the typography, the order, the visibility and the position of the text over an image. The <em>Text Image Element</em> can be used with the following components:
<br>
<br>
<ul>
    <li>Carousel</li>
    <li>Grid</li>
    <li>Cards</li>
    <li>Masonry</li>
    <li>Windows style</li>
    <li>Pinterest style</li>
    <li>Flex layout</li>
    <li>Image layout</li>
</ul>
<br>
<h2>Settings</h2>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#typograhy" role="tab" data-toggle="tab">Typograhy</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#order" role="tab" data-toggle="tab">Order</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#position" role="tab" data-toggle="tab">Position</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#visibility" role="tab" data-toggle="tab">Visibility</a>
    </li>
</ul>
<br>
<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="typograhy">
        <?php get_template_part('templates/element/text-image-typography'); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="order">
        <?php get_template_part('templates/element/text-image-order'); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="position">
        <?php get_template_part('templates/element/text-image-position'); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="visibility">
        <?php get_template_part('templates/element/text-image-visibility'); ?>
    </div>
</div>
<br>
<br>
