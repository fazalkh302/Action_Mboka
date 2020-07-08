<?php
/*
Template Name: main-template
 */
get_header();
?>

<header class="inner-page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2> <?php wp_title(''); ?> </h2>
            </div>
        </div>
    </div>
</header>

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