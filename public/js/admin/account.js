$(document).ready(function() {
    $(document).on('submit', '#register_form', function(e) {
        e.preventDefault();
        var data = new FormData(this);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/admin/register',
            data:data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response){
                clearerr();
                if(response.status == 400){
                    showerr(response.errors);
                }
                else{
                    $('form')[0].reset();
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Your account has been saved",
                        showConfirmButton: false,
                        timer: 3000,
                        onClose: () => {
                            window.location.href = '/admin/login';
                          }
                      });
                }
            }
        })
    })

    function showerr(errors) {
        $.each(errors, function(key, value){
            $('.'+key+'_err').text(value);
    })};
    function clearerr() {
            $('.email_err').text('');
            $('.phone_err').text('');
            $('.cfpassword_err').text('');
    };

    $(document).on('submit', '#login_form', function(e){
        e.preventDefault();
        var data = new FormData(this);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/admin/login',
            data:data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response){
                $('error').text('');
                if(response.status == 404){
                    $('.error').text('Email or password is incorrect');
                }
                else(
                    window.location.href = "/"
                )
            }
        });
    })
});