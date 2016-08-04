<?php
/**
* Template Name: Requirements
*/
?>

Experiensa is a web application based on different technologies and WordPress is at its core. Here is a list of other technologies and dependencies which are being used:
<br><br>
<h4><?php _e('Programming languages','sage'); ?></h4>
<div class="card-group">
    <div class="card card-block">
        <h4 class="card-title">PHP</h4>
        <p class="card-text">
            PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language
        </p>
        <p class="card-text"><small class="text-muted">Version used: 7</small></p>
        <a href="http://php.net/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">Javascript</h4>
        <p class="card-text">
            JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification.
        </p>
        <p class="card-text"><small class="text-muted">Version used: ES 6</small></p>
        <a href="https://www.javascript.com/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">CSS</h4>
        <p class="card-text">
            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.
        </p>
        <p class="card-text"><small class="text-muted">Version used: CSS 3</small></p>
        <a href="https://www.w3.org/Style/CSS/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">SASS</h4>
        <p class="card-text">
            Sass is a scripting language that is interpreted into Cascading Style Sheets (CSS). SassScript is the scripting language itself.
        </p>
        <p class="card-text"><small class="text-muted">Version used: 3.4.22</small></p>
        <a href="http://sass-lang.com/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">Typescript</h4>
        <p class="card-text">
            TypeScript is a free and open source programming language developed and maintained by Microsoft. It is a strict superset of JavaScript.
        </p>
        <p class="card-text"><small class="text-muted">Version used: To be used soon with angular</small></p>
        <a href="https://www.typescriptlang.org/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
</div>
<br>


<!-- Technologies ------------------------------------------------------------->
<h4><?php _e('Technologies','sage'); ?></h4>
<div class="card-group">
    <div class="card card-block">
        <h4 class="card-title">Wordpress</h4>
        <p class="card-text">
            Is web software you can use to create a beautiful website, blog, or app.
        </p>
        <p class="card-text"><small class="text-muted">Minimum version required: 4.5.3</small></p>
        <a href="https://wordpress.org/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">MySQL</h4>
        <p class="card-text">
            un système de gestion de base de données relationnelle, ainsi que des produits tels que MySQL Cluster.
        </p>
        <p class="card-text"><small class="text-muted">Minimum version required: 5.6.x</small></p>
        <a href="http://www.mysql.com/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">WordPress Bedrock</h4>
        <p class="card-text">
            WordPress boilerplate with modern development tools, easier configuration, and an improved folder structure
        </p>
        <p class="card-text"><small class="text-muted">Version used: 1.7.0</small></p>
        <a href="https://roots.io/bedrock/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
    <div class="card card-block">
        <h4 class="card-title">Theme Sage</h4>
        <div class="card-text">
            WordPress starter theme with a modern front-end development workflow.
        </div>
        <p class="card-text"><small class="text-muted">current version: 8.4.4</small></p>
        <a href="https://roots.io/sage/" target="_blank" class="btn btn-primary"><?php _e('More info','sage'); ?></a>
    </div>
</div>


<br>
<h4><?php _e('Wordpress Plugins','sage'); ?></h4>
<p>This plugins should be located in the <span class="tag tag-primary">web/app/mu-plugins</span> folder</p>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-default">
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Version</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><a href="https://piklist.com/" target="_blank">Piklist</a></th>
                <td>Framework</td>
                <td>Piklist is a fast and concise plugin that encourages WordPress rapid development. It simplifies many of the more difficult tasks in WordPress and adds functionality not presently common in WordPress core.</td>
                <td>0.9.9.9</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://wpml.org/" target="_blank">WPML</a></th>
                <td>Multilingual</td>
                <td>WPML makes it easy to build multilingual sites and run them. It’s powerful enough for corporate sites, yet simple for blogs. <i><u>WPML Multilingual CMS & WPML String Translation</u></i> should be installed, they are two separated plugins</td>
                <td> 3.4.1<br>2.3.9</td>
            </tr>
            <tr>
                <th scope="row"><a href="http://v2.wp-api.org/" target="_blank">WP-API</a></th>
                <td>Wordpress API</td>
                <td>Access your WordPress site’s data through an easy-to-use HTTP REST API</td>
                <td>v2.beta12</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://www.wpuxsolutions.com/plugins/enhanced-media-library/" target="_blank">Enhanced Media Library</a></th>
                <td>Media</td>
                <td>The best way to categorize media library</td>
                <td>2.3</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://wppusher.com/" target="_blank">WP-Pusher</a></th>
                <td>Development</td>
                <td>Deploy WordPress themes and plugins directly from GitHub</td>
                <td>2.1.1</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://jetpack.com/" target="_blank">JetPack</a></th>
                <td>Multi-use</td>
                <td>Jetpack is a free WordPress plugin that allows you to focus on what you do best. Create and publish great content. We’ll take care of the rest</td>
                <td>4.1.1</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://auth0.com/wordpress" target="_blank">Auth0</a></th>
                <td>JetPack</td>
                <td>WordPress Login Plugin – Pain Free. Connect WordPress to every login system on Earth. Really.</td>
                <td>3.1.4</td>
            </tr>
            <tr>
                <th scope="row"><a href="http://bestwebsoft.com/products/google-captcha/" target="_blank">Google Captcha</a></th>
                <td>Captcha</td>
                <td>Google Captcha (reCAPTCHA)	Allows implement security Captcha into web forms.</td>
                <td>1.25</td>
            </tr>
            <tr>
                <th scope="row"><a href="https://theseoframework.com/" target="_blank">SEO Framework</a></th>
                <td>SEO</td>
                <td>An accessible, unbranded and extremely fast SEO solution for any WordPress website</td>
                <td>2.6.6</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<br>
