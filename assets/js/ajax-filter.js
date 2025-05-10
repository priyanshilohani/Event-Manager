jQuery(document).ready(function ($) {
    $('#em-category').on('change', function () {
        let category = $(this).val();

        $.ajax({
            url: em_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'em_filter',
                category: category
            },
            success: function (response) {
                $('#em-results').html(response);
            }
        });
    });
});
