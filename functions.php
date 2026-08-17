<?php
/**
 * Beplus Test Theme functions.
 */
function bm_test_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'bm_test_theme_setup' );
