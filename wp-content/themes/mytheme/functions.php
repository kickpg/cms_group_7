<?php
/**
@ Thiết lập hàm hiển thị logo
@ mytheme_logo()
**/
if ( ! function_exists( 'mytheme_logo' ) ) {
    function mytheme_logo() {?>
    <div class="logo">
    <div class="site-name">
    <?php
    printf(
    '<h1><a href="%s" title="%s">%s</a></h1>',
    get_bloginfo( 'url' ),
    get_bloginfo( 'description' ),
    get_bloginfo( 'sitename' )
    );
    } // endif ?>
    </div>
    <div class="site-description"><?php bloginfo( 'description' ); ?></div>
    </div>
    <?php }

    /**
    @ Thiết lập hàm hiển thị menu
    @ mytheme_menu( $slug )
    **/
    if ( ! function_exists( 'mytheme_menu' ) ) {
    function mytheme_menu( $slug ) {
    $menu = array(
    'theme_location' => $slug,
    'container' => 'nav',
    'container_class' => $slug,
    );
    wp_nav_menu( $menu );
    }
}