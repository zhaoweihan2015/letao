define(['nprogress', 'jquery'], function(NProgress, $) {

    NProgress.start();

    NProgress.done();

    $('.navs ul').prev('a').on('click', function() {
        $(this).next().slideToggle();
    });
})