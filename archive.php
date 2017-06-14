<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Layla
 */

get_header();
?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        
        
        <div class="row">
            <div class="col-sm-12">
                <h1 class="entry-title"><?php the_archive_title(); ?></h1>
            </div>
            
            <div class="frontpage-blog homepage-page-content col-sm-12">
                
                <?php if (have_posts()) : ?>

                    <?php if (is_home() && !is_front_page()) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php the_archive_title(); ?></h1>
                        </header>
                    <?php endif; ?>

                    <div class="layla-blog-content">
                        
                        <?php if ( get_theme_mod( 'layla_blog_style', 'default' ) == 'masonry' && defined( 'LAYLA_PRO_PATH' ) ) : ?>
                
                            <div id="masonry-wrapper">

                                <div class="grid-sizer"></div>
                                <div class="gutter-sizer"></div>

                                <?php while (have_posts()) : the_post(); ?>

                                    <?php include LAYLA_PRO_PATH . '/template-parts/alternate-blog.php';; ?>

                                <?php endwhile; ?>
                        
                            </div>
                            
                        <?php else : ?>
                                
                            <?php while (have_posts()) : the_post(); ?>

                                <?php get_template_part('template-parts/content-blog', get_post_format()); ?>

                            <?php endwhile; ?>
                                
                        <?php endif; ?>
                        
                    </div>
                
                    <div class="layla-pagination">
                        <?php the_posts_navigation(); ?>
                    </div>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </div>


        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer();