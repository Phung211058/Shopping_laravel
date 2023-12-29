<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('css/create_product.css') }}">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="registration-form">
                <form action="/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-icon">
                        <span><i class="icon icon-user"></i></span>        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" name="name" placeholder="Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" name="category" placeholder="Cateogry" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control item" name="description" placeholder="Description" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control item" name="price" placeholder="Price" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <select class="form-control item" name="discount" placeholder="Price">
                            @foreach ($discounts as $discount)
                                <option value="{{ $discount->id }}">{{ $discount->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control item" name="quantity" placeholder="Quantity" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control item" name="Image">
                        <picture>

                        </picture>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-block create-account">Create Account</button>
                    </div>
                </form>
                {{-- <div class="social-media">
                    <h5>Sign up with social media</h5>
                    <div class="social-icons">
                        <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                        <a href="#"><i class="icon-social-google" title="Google"></i></a>
                        <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                    </div>
                </div> --}}
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
