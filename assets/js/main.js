$(document).ready(function () {
    $('form').validate({
        rules: {
            date_from: {
                required: true
            },
            date_to: {
                required: true
            },
            liters: {
                required: true,
                number: true
            },
            km: {
                required: true,
                number: true
            },
            money: {
                required: true,
                number: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
});
