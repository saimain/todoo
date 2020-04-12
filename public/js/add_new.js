$(document).ready(function () {

    $('.floating_action_btn').on('click', function () {
        $('.add_new_div_overlay').css('display', 'flex');
        $('body').css('overflow', 'hidden');
    });

    $('.close_div').on('click', function () {
        $('.add_new_div_overlay').css('display', 'none');
        $('body').css('overflow', 'auto');
    });
});