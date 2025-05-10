<?php
function em_register_taxonomies() {
    register_taxonomy('event_category', 'event', [
        'label' => 'Event Categories',
        'hierarchical' => true,
        'rewrite' => ['slug' => 'event-category'],
    ]);
}
add_action('init', 'em_register_taxonomies');
