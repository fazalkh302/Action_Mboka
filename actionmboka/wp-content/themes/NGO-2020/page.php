<?php
/*
Template Name: main-template
 */
get_header();
?>

<main class="page_main">
    <section class="content py-5">
        <div class="container">
            <?php 
                while (have_posts()): 
                    the_post(); 
                    the_content(); 
                endwhile; // End of the loop. 
            ?>
        </div>
    <section>
</main>

<?php get_footer(); ?>
