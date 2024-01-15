(function($){
"use strict";
$(document).ready(function () {
    function initializeDropdown(dropdownId){
        $(document).on('click', dropdownId, function () {
            $(this).toggleClass('show');
        });
    
        $(document).on('click', function (event) {
            if (!$(event.target).closest(dropdownId).length) {
                $(dropdownId).removeClass('show');
            }
        });
    }
    initializeDropdown('#navbar_profile');

    $(document).on('click', '.mpos-single-media-box-content > .mpos-single-media-actions', function (e) {
        e.preventDefault();
        $('.mpos-single-media-box-content .media-actions-dropdown').removeClass('active');
        $(this).parent().find('.media-actions-dropdown').addClass('active');
    });

    $(document).on('click', '.mpos-single-media-box-content-img', function (e){
        e.preventDefault();
       $(this).parent().find(".select-image > input[type='checkbox']").attr('checked', !$(this).parent().find(".select-image > input[type='checkbox']").attr('checked'));
       alert($(this).parent().data('id'));
    });
});


})(jQuery);