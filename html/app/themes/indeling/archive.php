<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vacancy
 */
use \Kviron\CE\CE;

get_header();
?>
    <main id="archive">
        <?php
        if (get_post_type()) {
            CE::theTemplate('template-parts/archive/archive-' . get_post_type());
        } else {
            CE::theTemplate('template-parts/content/content-none');
        }
        ?>
    </main>
<?php
get_footer();
