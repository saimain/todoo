$(document).ready(function () {

    $('.toggler').on('click', function () {
        $('.slide_nav_container').css('left', '0');
        $('.slide_bar_open_overlay').css('display', 'flex');
        $('body').css('overflow', 'hidden');

    });

    $('.slide_bar_open_overlay').on('click', function () {
        $('.slide_nav_container').css('left', '-70%');
        $('body').css('overflow', 'auto');
        $('.slide_bar_open_overlay').css('display', 'none');
    });


    // item on click
    $('.menu_item_div').on('click', function () {
        $('#logout_form').submit();
    })

});