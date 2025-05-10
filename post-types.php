<?php
function em_register_post_types() {
    register_post_type('event', [
        'label' => 'Events',
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'rewrite' => ['slug' => 'events'],
        'has_archive' => true,
    ]);

    register_post_type('venue', [
        'label' => 'Venues',
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'venues'],
    ]);
}
add_action('init', 'em_register_post_types');
