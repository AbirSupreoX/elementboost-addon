<?php
/**
 * Plugin Name: ElementBoost Addon
 * Description: ElementBoost is a powerful Elementor addon that enhances your website-building experience with custom widgets, advanced styling options, and seamless integrations. Build stunning, high-performance websites effortlessly.
 * Version:     1.0.0
 * Author:      Rath Shahamat Abir
 * Author URI:  https://github.com/mdabir6789
 * Text Domain: elementboost

 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

function register_elementboost_widgets($widgets_manager)
{

    require_once(__DIR__ . '/widgets/elementboost-heading.php');

    $widgets_manager->register(new \Elementboost_Heading());

}
add_action('elementor/widgets/register', 'register_elementboost_widgets');


// Widget Category register 
function elementboost_add_elementor_widget_category($elements_manager)
{
    $elements_manager->add_category(
        'elementboost-category', // Category slug
        [
            'title' => __('ElementBoost Widgets', 'elementboost'),
            'icon' => 'fa fa-plug', // Optional icon (FontAwesome)
        ]
    );
}
add_action('elementor/elements/categories_registered', 'elementboost_add_elementor_widget_category', 20); // Lower number places it higher