define(['jquery'], function($) {
    $('form').on('submit', function() {
        var _this = $(this);
        $.ajax({
            url: '/api/employee/employeeLogin',
            type: 'post',
            data: _this.serialize(),
            success: function(data) {
                if (data.error) {
                    return alert(data.message);
                }
                location.href = '/';
            }
        })
        return false;
    })
});