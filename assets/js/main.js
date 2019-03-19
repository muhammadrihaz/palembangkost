var loc = window.location.pathname;

$('#pkostnavbar').find('a').each(function () {
    $(this).toggleClass('active', $(this).attr('href') == loc);
});