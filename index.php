<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Layla
 */
get_header();
die('this is index.php');
?>

<div id="primary" class="content-area">

    <main id="main" class="site-main layla-blog-page" role="main">


        <div class="row">

            <?php get_sidebar('left'); ?>

            <div class="layla-blog-content col-sm-<?php echo esc_attr( layla_main_width() ); ?>">
                <?php if (have_posts()) : ?>



                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/content-blog', get_post_format()); ?>

                    <?php endwhile; ?>



                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
        <div class="clear"></div>
        <div class="layla-pagination">
            <?php echo paginate_links(); ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
