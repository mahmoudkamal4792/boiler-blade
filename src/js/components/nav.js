$(".nav-btn").on('click', () => {
    $('body').addClass('active-navbar');
});

$(".nav-close-btn, .nav-overlay").on('click', () => {
    $('body').removeClass('active-navbar');
});