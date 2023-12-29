<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
            id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <h3 class="text-success"><img src="https://bytewebster.com/img/logo.png" width="40"><span
                            class="text-info">Phoenix</span>Nguyen</h3>
                </a>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-parent-child">
                                <img alt="Image Placeholder"
                                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                    class="avatar avatar- rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span>
                            </div>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Billing</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bar-chart"></i> Analitycs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-chat"></i> Messages
                                <span
                                    class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-bookmarks"></i> Collections
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="navbar-nav">
                                    {{-- ______________________PRODUCTS OPTIONS__________________ --}}
                                    <li class="nav-item">
                                        <button class="nav-link ms-6" id="product">
                                            <i class="bi bi-basket-fill"></i>
                                            <span>Products</span>
                                        </button>
                                    </li>
                                    {{-- ___________________________!!!!!!!_____________________________ --}}

                                    {{-- ______________________DISCOUNTS OPTIONS__________________ --}}
                                    <li class="nav-item">
                                        <button class="nav-link ms-6">
                                            <i class="bi bi-gift-fill"></i>
                                            <span>Discounts</span>
                                        </button>
                                    </li>
                                    {{-- ___________________________!!!!!!!_____________________________ --}}

                                    {{-- ______________________PRODUCTS OPTIONS__________________ --}}
                                    <li class="nav-item">
                                        <button class="nav-link ms-6">
                                            <i class="bi bi-person-badge"></i>
                                            <span>Clients</span>
                                        </button>
                                    </li>
                                    {{-- ___________________________!!!!!!!_____________________________ --}}

                                    {{-- ___________________________!!!!!!!_____________________________ --}}
                                    <li class="nav-item">
                                        <button class="nav-link ms-6">
                                            <i class="bi bi-stripe"></i>
                                            <span>Payments</span>
                                        </button>
                                    </li>
                                    {{-- ___________________________!!!!!!!_____________________________ --}}
                                </ul>
                            </div>
                            {{-- <a class="nav-link" href="#">
                                <i class="bi bi-bookmarks"></i> Collections
                            </a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-globe-americas"></i> Ranking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-file-text"></i> Posts
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">
                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">
                                    <img src="https://bytewebster.com/img/logo.png" width="40"> ByteWebster
                                    Application
                                </h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">
                                    <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-pencil"></i>
                                        </span>
                                        <span>Edit</span>
                                    </a>

                                    <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-gear-wide-connected"></i>
                                        </span>
                                        <span>Manage</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">All files</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link font-regular">Shared</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link font-regular">File requests</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col me-0 pe-0">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2 me-0 pe-0">Budget</span>
                                            <span class="h3 font-bold mb-0">$1157</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                <i class="bi bi-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>37%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">New
                                                projects</span>
                                            <span class="h3 font-bold mb-0">3205</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>80%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total
                                                hours</span>
                                            <span class="h3 font-bold mb-0">4.100</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                <i class="bi bi-clock-history"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                            <i class="bi bi-arrow-down me-1"></i>-5%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work
                                                load</span>
                                            <span class="h3 font-bold mb-0">88%</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                                <i class="bi bi-minecart-loaded"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>10%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="mb-0 table_head">Applications</h5>
                            {{-- <div class="input-group rounded-pill">
                                <input type="text" class="form-control rounded-start-circle" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary rounded-end-circle" type="button" id="button-addon2">Button</button>
                             </div> --}}
                             {{-- $$$$_____________SEARCH DATA____________$$$$ --}}
                            <div class=" form-group search_item_contatiner">
                                <input type="text" class="form-control item rounded-pill search_item"
                                    placeholder="Search">
                            </div>
                            {{-- $$$$_______________________________________$$$$ --}}

                            {{-- __________________CREATE BUTTON________________ --}}
                            <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1" id="create"
                                data-bs-toggle="modal">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Create</span>
                            </a>
                            {{-- __________________________________________________ --}}
                        </div>
                        {{-- <<<<<<<<<<<<<<<<< CREATE PRODUCT MODAL >>>>>>>>>>>>>>>>>>> --}}
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-4 text-success d-flex justify-content-center"
                                            id="exampleModalLabel">Create product</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <<<<<<<<<<<<<<<<<<<< FORM TO ADD PRODUCT >>>>>>>>>>>>>>>>>>>>>> --}}
                                        <form action="#" method="POST" enctype="multipart/form-data"
                                            id="add_product_form">
                                            @csrf
                                            <div class="form-icon">
                                                <span><i class="icon icon-user"></i></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control item rounded-pill"
                                                    name="name" placeholder="Name" autocomplete="off" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control item rounded-pill"
                                                    name="category" placeholder="Cateogry" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <textarea type="text" class="form-control item" name="description" placeholder="Description" autocomplete="off"
                                                    required></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control item rounded-pill"
                                                    name="price" placeholder="Price" autocomplete="off" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <select class="form-control item rounded-pill" name="discount"
                                                    placeholder="Price">
                                                    @foreach ($discounts as $discount)
                                                        <option value="{{ $discount->id }}">{{ $discount->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control item rounded-pill"
                                                    name="quantity" placeholder="Quantity" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="file" class="form-control item rounded-pill"
                                                    name="Image">
                                            </div>
                                            <div class="form-group d-flex justify-content-center mt-3">
                                                <button type="submit"
                                                    class="btn btn-info rounded-pill text-white create-accoun mt-3t" id="create_product">Create</button>
                                            </div>
                                        </form>
                                        {{-- <<<<<<<<<<<<<<<<<<<<<<<<<<< (*!*) >>>>>>>>>>>>>>>>>>>>>>>>>>>> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <<<<<<<<<<<<<<<<<<<<<<<< (*!*) >>>>>>>>>>>>>>>>>>>>>>>>>>>>> --}}

                        {{-- <<<<<<<<<<<<<<<<< UPDATE PRODUCT MODAL >>>>>>>>>>>>>>>>>>> --}}
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Modal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <<<<<<<<<<<<<<< UPDATE PRODUCT FORM >>>>>>>>>>>>>>>>> --}}
                                        <form action="#" method="POST" enctype="multipart/form-data"
                                            id="update_product_form">
                                            @csrf
                                            <div class="form-icon">
                                                <span><i class="icon icon-user"></i></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control item rounded-pill"
                                                    name="id" id="id" autocomplete="off" required hidden>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control item rounded-pill"
                                                    name="name"  id="name" autocomplete="off" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control item rounded-pill"
                                                    name="category" id="category" placeholder="Cateogry" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <textarea type="text" class="form-control item" name="description" id="description" placeholder="Description" autocomplete="off"
                                                    required></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control item rounded-pill" id="price"
                                                    name="price" placeholder="Price" autocomplete="off" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <select class="form-control item rounded-pill" name="discount" id="discount"
                                                    placeholder="Price">
                                                    @foreach ($discounts as $discount)
                                                        <option value="{{ $discount->id }}">{{ $discount->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control item rounded-pill" id="quantity"
                                                    name="quantity" placeholder="Quantity" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="file" class="form-control item rounded-pill" id="Image"
                                                    name="Image">
                                            </div>
                                            <div class="form-group d-flex justify-content-center mt-3">
                                                <button type="submit"
                                                    class="btn btn-info rounded-pill text-white create-accoun mt-3t" id="create_product">Update</button>
                                            </div>
                                        </form>
                                        {{-- <<<<<<<<<<<<<<<<<<<< (^-^) >>>>>>>>>>>>>>>>>>>>>> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <<<<<<<<<<<<<<<<<<<<<<<<< (!*-*!) >>>>>>>>>>>>>>>>>>>>>>> --}}
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap text-center">
                                <thead class="thead-light">
                                    {{-- <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Sale price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Action</th>
                                        <th></th>
                                    </tr> --}}
                                </thead>
                                <tbody>
                                    {{-- @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <img alt="" src="/images/{{ $product->image }}"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                            </td>
                                            <td> {{ $product->name }} </td>
                                            <td>
                                                {{ $product->category }}
                                            </td>
                                            <td class="text-warning">
                                                {{ $product->formatted_price }} <span class="text-danger">VND</span>
                                            </td>
                                            <td>
                                                {{ $product->discount->name }}
                                            </td>
                                            <td class="text-warning">
                                                {{ $product->formatted_sale_price }} <span
                                                    class="text-danger">VND</span>
                                            </td>
                                            <td>{{ $product->quantity }}</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-neutral">View</a>
                                                <form action="/delete-product/{{ $product->id }}" method="POST"
                                                    style="display: inline">
                                                    @csrf @method('delete')
                                                    <button type="submit" value="delete"
                                                        onclick="return confirm('Do you want to delete')" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5">
                            <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link disabled" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-info text-white"
                                            href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/product.js') }}"></script>
</body>


</html>
