define(['jquery'], function($) {
    //AJAX
    $.ajax({
        url: '/api/employee/checkRootLogin',
        type: 'get',
        success: function(data) {
            console.log(data);
            if (data.error) {
                location.href = '/login.html'
            }
        }
    });
})