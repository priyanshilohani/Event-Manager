<?php
function em_filter_events() {
    $args = [
        'post_type' => 'event',
        'posts_per_page' => -1,
        'tax_query' => [],
    ];

    if (!empty($_POST['category'])) {
        $args['tax_query'][] = [
            'taxonomy' => 'event_category',
            'field' => 'slug',
            'terms' => sanitize_text_field($_POST['category']),
        ];
    }

    $query = new WP_Query($args);

    ob_start();
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            include EM_DIR . 'templates/event-card.php';
        endwhile;
    else :
        echo '<p>No events found.</p>';
    endif;
    wp_reset_postdata();

    echo ob_get_clean();
    wp_die();
}
add_action('wp_ajax_em_filter', 'em_filter_events');
add_action('wp_ajax_nopriv_em_filter', 'em_filter_events');
