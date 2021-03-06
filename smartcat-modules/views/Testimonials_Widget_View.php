<?php

$args = array (
    'posts_per_page'    => ( !empty( $instance['scmod_testimonials_limit'] ) ? (int)$instance['scmod_testimonials_limit'] : -1 ),
    'post_status'       => 'publish',
    'post_type'         => 'testimonial'
);

$testimonials = wp_get_recent_posts($args); ?>
    
<script type="text/javascript">

    jQuery(document).ready( function( $ ) {
        $("#layla-testimonials").owlCarousel({

            slideSpeed : 1000,
            paginationSpeed : 1000,
            singleItem: true,
            autoPlay : true

        });    
    });

</script>

<div class="layla-testimonials <?php echo isset( $instance['scmod_testimonials_widget_width'] ) ? 'col-sm-' . $instance['scmod_testimonials_widget_width'] : 'col-sm-12'; ?>">

    <div class="widget">
    
            <h2 class="widget-title cpt-widget-title">
                <?php echo !empty( $instance['scmod_testimonials_title'] ) ? esc_html( $instance['scmod_testimonials_title'] ) : ''; ?>
            </h2>

        <div class="row">

            <div class="col-sm-12">

                <ul id="layla-testimonials" class="owl-carousel owl-theme">

                    <?php foreach( $testimonials as $testimonial ) : ?>

                        <li>
                            <div class="testimonial-content">
                           
                                    <i class="fa fa-quote-left"></i>
                                        <?php echo $testimonial['post_content']; ?>
                                    <i class="fa fa-quote-right"></i>
                              
                                <div class="clear"></div>
                            </div>

                            <div class="testimonial-author">
                                <h4>
                                    <?php echo $testimonial['post_title']; ?>
                                </h4>
                            </div>
                        </li>

                    <?php endforeach; ?>

                    <?php wp_reset_postdata(); ?>

                </ul>

            </div>

        </div>
        
    </div>

</div>