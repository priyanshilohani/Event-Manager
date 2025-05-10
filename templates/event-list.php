<div class="em-filter">
    <select id="em-category">
        <option value="">All Categories</option>
        <?php
        $terms = get_terms(['taxonomy' => 'event_category', 'hide_empty' => false]);
        foreach ($terms as $term) {
            echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
        }
        ?>
    </select>
</div>

<div id="em-results">
    <?php
    $query = new WP_Query(['post_type' => 'event', 'posts_per_page' => -1]);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            include EM_DIR . 'templates/event-card.php';
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
