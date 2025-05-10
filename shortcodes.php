<?php
function em_event_list_shortcode($atts) {
    ob_start();
    include EM_DIR . 'templates/event-list.php';
    return ob_get_clean();
}
add_shortcode('event_list', 'em_event_list_shortcode');

function em_event_calendar_shortcode($atts) {
    ob_start();
    include EM_DIR . 'templates/event-calendar.php';
    return ob_get_clean();
}
add_shortcode('event_calendar', 'em_event_calendar_shortcode');
