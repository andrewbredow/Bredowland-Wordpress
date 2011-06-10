// remap jQuery to $
(function($){
    $('#about_site_trigger').click(function(e) {
        $('#about_site').show();
        $(this).remove();
        return false;
    });
})(window.jQuery);