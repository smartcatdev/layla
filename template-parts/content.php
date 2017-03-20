<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Layla
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (get_post_thumbnail_id($post->ID)) : ?>
        <div id="layla-posts-image">

            <a href="<?php echo esc_url( get_the_permalink() ); ?>"> 
                <?php echo the_post_thumbnail('large'); ?>
            </a> 

        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <div class="meta-detail">

                    <span><span class="fa fa-calendar"></span> <?php echo layla_posted_on(); ?></span>

                    <span class="author"><?php echo get_the_author() ? '<span class="fa fa-user"></span> ' . esc_html( get_the_author() ) : ' '; ?></span>

                    <span><?php layla_entry_footer(); ?></span>

                </div>

            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'layla'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
    
    <?php if ('post' === get_post_type()) : ?>
    <div class="continue-reading">
        <a class="layla-button primary" href="<?php echo esc_url( get_the_permalink() ); ?>"><?php _e( 'Continue Reading', 'layla' ); ?></a>
    </div>
    <?php endif; ?>

    <footer class="entry-footer">
        <?php //layla_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
