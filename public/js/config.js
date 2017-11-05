require.config({
    baseUrl: '/public',
    paths: {
        jquery: 'assets/jquery/jquery.min',
        bootstrap: 'assets/bootstrap/js/bootstrap.min',
        nprogress: 'assets/nprogress/nprogress',
        common: 'js/common',
        echarts: 'assets/echarts/echarts.min'
    },
    shim: {
        bootstrap: {
            deps: ['jquery']
        }
    }
});