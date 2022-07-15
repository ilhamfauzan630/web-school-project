$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    $("img").css({
        'transform' : 'translate(0px, '+ wScroll +' px)',
    });
});
