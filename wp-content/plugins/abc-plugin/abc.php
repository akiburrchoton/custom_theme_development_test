<?php
/**
 * Plugin Name: ABC Plugin
 * Plugin URI: https://github.com/akiburrchoton/custom_theme_development_test
 * Description: This plugin is to show Company and Employee Post Types
 * Version: 1.0
 * Author: Akibur Rahman
 * Author URI: https://www.linkedin.com/in/akiburrchoton
 * @package ACF Guten Blocks
 */

 // Define Constants.
define( 'ACFB_BLOCK_TEMPLATE_PATH', plugin_dir_path( __FILE__ ) . '/block-templates/' );

function mcqa_register_block_related_quiz() {
    if ( ! function_exists( 'register_block_type' ) ) {
        // Block editor is not available.
        return;
    }
 
    register_block_type( 'mcqac/related-quiz', array(
        'editor_script' => 'mcqac-related-quiz-block-script',
        'editor_style'  => 'mcqac-related-quiz-block-editor-style',
        'style'         => 'mcqac-related-quiz-block-frontend-style',
    ) );
}
 
// Hook: Editor assets.
add_action( 'init', 'mcqa_register_block_related_quiz' );