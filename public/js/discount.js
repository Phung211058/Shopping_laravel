$(document).ready(function () {
    $(document).on('click', '#discount_option', function (e) {
        e.preventDefault();
        $('.crt_button').html('');
        $('.crt_button').append('<a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1" id="create"\
            <span class=" pe-2">\
                <i class="bi bi-plus"></i>\
            </span>\
            <span>Create</span>\
        </a>')
        // GET THE BUTTION TO CREATE PRODUCT
        var button_create = $('#create');
        // CALL THE MODAL TO CREATE PRODUCT BY DATA-BS-TARGET ATTRIBUTE
        button_create.attr('data-bs-toggle', 'modal');
        button_create.attr('data-bs-target', '#createDiscountModal');


        // CHANGE THE HEAD TABLE NAME
        $('.table_head').text('Discounts');
        // CHANGE ID OF THE SEARCH INPUT
        var search_discount = document.getElementById('search');
        search_discount.classList.remove('search_product');
        search_discount.classList.add('search_discount');

        //_______________________________________________________________________________
        fetch_discounts();

        // FUNCTION TO SHOW ALL PRODUCTS
        function fetch_discounts() {
            $.ajax({
                type: 'GET',
                url: 'fetch-discounts',
                dataType: 'json',
                success: function (response) {
                    $('tbody').html('');
                    $('thead').html('');
                    $('thead').append('<tr>\
                                <th scope="col">Name</th>\
                                <th scope="col">Percent</th>\
                                <th scope="col">Action</th>\
                            </tr>');
                    $.each(response.discounts, function (key, val) {
                        $('tbody').append('<tr>\
                             <td>' + val.name + '</td>\
                            <td class="text-primary">' + val.discount_percent + '%</td>\
                            <td>\
                            <button type="submit" value=" ' +val.id+ ' " class="btn btn-sm btn-neutral" id="edit_discount_btn" data-bs-toggle="modal" data-bs-target="#updateDiscountModal">Edit</button>\
                            <button type="submit" value=" ' +val.id+ ' "class="btn btn-sm btn-square btn-neutral text-danger-hover" id="delete_discount_btn"> <i class="bi bi-trash"></i></button>\
                        </td>\
                        </tr>');
                    })
                }
            })
        }
        //_______________________________________________________________________________

        $(document).on('submit', '#add_discount_form', function(e) {
            e.preventDefault();
            // GET DATA FROM FORM
            var data = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/discount-create',
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        $('#add_discount_form')[0].reset();
                        $('#createDiscountModal').modal('hide');
                        fetch_discounts();
                        Swal.fire({
                            title: "Successfully",
                            text: "You have inserted a new discount",
                            icon: "success",
                        })
                    }
                }
            });
        })

        $(document).on('click', '#delete_discount_btn', function (e) {
            e.preventDefault();
            // GET ID VALUE FROM DELETE BUTTON
            let discount_id = $(this).val();
            console.log(discount_id);
            // SEND AN ALERT TO ASK USER CONFIRM 
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                // DELETE PRODUCT IF USER AGREE
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: "/delete-discount/" + discount_id,
                        dataType: 'json',
                        success: function (response) {
                            fetch_discounts();
                            Swal.fire({
                                title: "Deleted!",
                                text: response.discount.name+" has been deleted.",
                                icon: "success"
                            });
                        }
                    });

                }
            });
        })

        $(document).on('click', '#edit_discount_btn', function(e){
            e.preventDefault();
            let discount_id = $(this).val();
            console.log(discount_id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: '/edit-discount/'+discount_id,
                success: function(response){
                    $('.update_discount_id').val(discount_id);
                    $('.update_discount_name').val(response.discount.name);
                    $('.update_discount_percent').val(response.discount.discount_percent);
                }
            })
        })

        $(document).on('submit', '#update_discount_form', function(e) {
            e.preventDefault();
            // GET DATA FROM FORM
            var data = new FormData(this);
            var discount_id = $('.update_discount_id').val();
            var discount_name = $('.update_discount_name').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/update-discount/'+discount_id,
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        $('#update_discount_form')[0].reset();
                        $('#updateDiscountModal').modal('hide');
                        fetch_discounts();
                        Swal.fire({
                            title: "Successfully",
                            text: 'You have updated " ' +discount_name+ ' "',
                            icon: "success",
                        })
                    }
                }
            });
        })

    })
});
