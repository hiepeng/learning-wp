<?php

/**
 * Single page template.
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="side-main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/post/content');

            if( comments_open() || get_comments_number()) : comments_template(); endif;

        endwhile;
        ?>
    </main>
    <?php get_sidebar() ?>
</div>

<?php
get_footer();
