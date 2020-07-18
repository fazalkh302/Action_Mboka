<?php
/**
* Template Name: News_Blog_Template
*
* @package WordPress
* @subpackage NGO-2020
* @since JULY 2020 @Muneebkh2
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
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'News & Media',
                    'posts_per_page' => 5,
                );
                $arr_posts = new WP_Query( $args );
            
                if ( $arr_posts->have_posts() ) :
                
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                    ?>
                        <div class="card w-100 news_card mb-2 shadow" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                            ?>

                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                            </div>
                        </div>

                        <?php endwhile;
		else: ?>
		<p>Sorry, there are no posts to display</p>

	<?php endif; ?>
        </div>
    <section>
</main>

<?php get_footer(); ?>