
$(document).ready(function()
{
    $('#go_login').on('click', function(){
        var btn = $(this),
            usuario  = $('#form_usuario').val(),
            password = $('#form_password').val();

        $('input').prop('disabled', true);
        btn.prop('disabled', true);
        btn.find('i').attr('class', 'i-spin animate-spin');
        $('.is-invalid').removeClass('is-invalid');

        $.ajax({
            url: base_url + '/go/admin_login',
            type: 'POST',
            async: true,
            cache: false,
            dataType: "json",
            data: {
                usuario:  usuario,
                password: password
            },
            success: function(data)
            {
                if(data.error){
                    btn.prop('disabled', false);
                    $('input').prop('disabled', false);
                    $('#form_'+ data.error).addClass('is-invalid');
                    btn.find('i').attr('class', 'i-llave');
                }
                else
                    if(data.hash)
                        window.location.href = base_url + '/go/admin';
            },
            error: function(e){
                console.log(e);
            }
        });
    });
});
