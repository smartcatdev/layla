<div class="layla-pricing-table 
    <?php echo isset( $instance['scmod_pricing_table_width'] ) ? 'col-sm-' . $instance['scmod_pricing_table_width'] : 'col-sm-4'; ?> 
    <?php echo !empty( $instance['scmod_pricing_table_is_special'] ) ? 'special' : ''; ?> 
    ">
    
    <?php if ( !empty( $instance['scmod_pricing_table_is_special'] ) ) : ?>
        <div class="special-header">

            <div class="special-inner">
            
                <h2 class="title">
                    <?php echo !empty( $instance['scmod_pricing_table_title'] ) ? esc_html( $instance['scmod_pricing_table_title'] ) : ''; ?>
                </h2>
                
                <div class="subtitle">
                    <?php echo !empty( $instance['scmod_pricing_table_detail'] ) ? esc_html( $instance['scmod_pricing_table_detail'] ) : ''; ?>
                </div>
                
            </div>
    
        </div>
    <?php endif; ?>
    
    <div class="widget">
        
        <div class="inner">

            <?php if ( empty( $instance['scmod_pricing_table_is_special'] ) ) : ?>
            
                <h2 class="title">
                    <?php echo !empty( $instance['scmod_pricing_table_title'] ) ? esc_html( $instance['scmod_pricing_table_title'] ) : ''; ?>
                </h2>
            
                <div class="subtitle">
                    <?php echo !empty( $instance['scmod_pricing_table_detail'] ) ? esc_html( $instance['scmod_pricing_table_detail'] ) : ''; ?>
                </div>
            
            <?php endif; ?>

            <div class="price">
                <?php echo !empty( $instance['scmod_pricing_table_price'] ) ? esc_html( $instance['scmod_pricing_table_price'] ) : ''; ?>
            </div>
            
            <div class="description">
                <?php echo !empty( $instance['scmod_pricing_table_description'] ) ? esc_html( $instance['scmod_pricing_table_description'] ) : ''; ?>
            </div>

            <?php if ( !empty( $instance['scmod_pricing_table_url'] ) && !empty( $instance['scmod_pricing_table_button_label'] ) ) : ?>
                <a class="layla-button primary" href="<?php echo esc_url( $instance['scmod_pricing_table_url'] ); ?>">
                    <?php echo esc_html( $instance['scmod_pricing_table_button_label'] ); ?>
                </a>
            <?php endif;?>
                
        </div>
        
    </div>

</div>