$(document).ready(function() {
    $(document).on('click', '.register_btn', function(e) {
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
                        timer: 3000
                      });
                }
            }
        })
    })

    function showerr(errors) {
        $.each(errors, function(key, value){
            $('.'+key+'_err').text(value);
    })};
});