// $(document).ready(function() {

// })
$(document).ready(function () {
    // CLICK ON THE OPTION PRODUCT IN THE COLLECTION
    $(document).on('click', '#product', function (e) {
        e.preventDefault();
        // CHANGE THE LINK OF THE BUTTION TO CREATE PRODUCT
        var link = $('#create');
        // link.href ="/create";

        // CALL THE MODAL TO CREATE PRODUCT BY DATA-BS-TARGET ATTRIBUTE
        link.attr('data-bs-target', '#createModal');
        fetch_products();
        // FUNCTION TO SHOW ALL PRODUCTS
        function fetch_products() {
            $.ajax({
                type: 'GET',
                url: 'fetch_products',
                dataType: 'json',
                success: function (response) {
                    $('tbody').html('');
                    $('thead').html('');
                    $('thead').append('<tr>\
                        <th scope="col">Image</th>\
                        <th scope="col">Name</th>\
                        <th scope="col">Category</th>\
                        <th scope="col">Price</th>\
                        <th scope="col">Discount</th>\
                        <th scope="col">Sale price</th>\
                        <th scope="col">Quantity</th>\
                        <th scope="col">Action</th>\
                        <th></th>\
                    </tr>');
                    $.each(response.products, function (key, val) {
                        $('tbody').append('<tr>\
                                <td><img alt="" src="/images/' + val.image + ' " class="avatar avatar-sm rounded-circle me-2"></td>\
                                <td>' + val.name + '</td>\
                                <td>' + val.category + '</td>\
                                <td class="text-warning">' + val.formatted_price + '<span class="text-danger"> VND</span> </td>\
                                <td>' + val.discount_name + '</td>\
                                <td class="text-warning">' + val.formatted_sale_price + '<span class="text-danger"> VND</span></td>\
                                <td>' + val.quantity + '</td>\
                                <td>\
                                    <a type="submit" value="' + val.id + '" class="btn btn-sm btn-neutral" id="edit_btn">Edit</a>\
                                    <button type="submit" value="' + val.id + '"class="btn btn-sm btn-square btn-neutral text-danger-hover" id="delete_product_btn"> <i class="bi bi-trash"></i></button>\
                                </td>\
                            </tr>');
                    })
                }
            })
        }
        // DELETE BUTTION
        $(document).on('click', '#delete_product_btn', function (e) {
            e.preventDefault();
            // GET ID VALUE FROM DELETE BUTTON
            var product_id = $(this).val();
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
                        url: "/delete-product/" + product_id,
                        dataType: 'json',
                        success: function (response) {
                            console.log(response);
                            fetch_products();
                        }
                    });
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        })
    })


});
