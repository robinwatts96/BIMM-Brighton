<?php 

    while (have_posts()) {
        the_post(); ?>
        <h1>Page, not post.</h1>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <hr>
        <?php
    }

?>