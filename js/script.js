//JavaScript file

"use strict";

$(document).ready(function () {
    /* Mobile navigation */
    $('.js--mainNav-icon').click(function () {
        var nav = $('.js--mainNav');
        var icon = $('.js--mainNav-icon i');

        nav.slideToggle(200, function () {
            if (nav.is(":hidden")) {
                nav.removeAttr("style");
            }
        });

        if (icon.hasClass('fa-bars')) {
            icon.addClass('fa-window-close');
            icon.removeClass('fa-bars');
        } else {
            icon.addClass('fa-bars');
            icon.removeClass('fa-window-close');
        }
    });
});