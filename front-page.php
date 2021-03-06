<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Layla
 */
get_header();
$front = get_option('show_on_front');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main frontpage-main" role="main">
        
        <?php if( $front != 'posts' ) : //frontpage ?>
            <?php do_action('layla_homepage'); ?>
        <?php endif; ?>
        
        <div class="row">
            
            <?php //get_sidebar('left'); ?>

            <div class="<?php echo $front == 'posts' ? 'frontpage-blog' : ''; ?> homepage-page-content col-sm-12">
                
                <?php if (have_posts()) : ?>

                    <?php if (is_home() && !is_front_page()) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
                    <?php endif; ?>

                    <?php echo $front == 'posts' ? '<div class="layla-blog-content">' : ''; ?>

                        <?php if ( $front == 'posts' && get_theme_mod( 'layla_blog_style', 'default' ) == 'masonry' && defined( 'LAYLA_PRO_PATH' ) ) : ?>
                
                            <div id="masonry-wrapper">

                                <div class="grid-sizer"></div>
                                <div class="gutter-sizer"></div>

                                <?php while ( have_posts() ) : the_post();

                                    include LAYLA_PRO_PATH . '/template-parts/alternate-blog.php';

                                endwhile; ?>
                        
                            </div>
                            
                        <?php elseif ( $front == 'posts' ) :
                                
                            while ( have_posts() ) : the_post();

                                get_template_part('template-parts/content-blog', get_post_format());

                            endwhile; ?>
                
                        <?php else :
                                
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content-page-home', get_post_format() );

                            endwhile; ?>
                
                        <?php endif; ?>
                
                    <?php echo $front == 'posts' ? '</div>' : ''; ?>
                
                    <div class="layla-pagination">
                        <?php the_posts_pagination(); ?>
                    </div>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </div>

            <?php //get_sidebar(); ?>

        </div>
        
    </main><!-- #main -->
    
    <?php do_action( 'layla_feature_section' ); ?>
    
</div><!-- #primary -->

<?php get_footer(); ?>        