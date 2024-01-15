<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/LogRegis.css') }}">
</head>

<body>
    <main>
        <h3 class="text-center mt-3 title">ĐĂNG NHẬP</h3>
        <div class="cover">
            <form action="" method="POST" id="login_form">
                @csrf
                <p class="ps-2 mb-2">Email</p>
                <div class="surname_box mb-3">
                    <input type="text" class="in_surname" placeholder=" " name="email" required>
                    <label for="surname" class="surname_label">Email</label>
                </div>
                <p class="ps-2 mb-2">Mật khẩu</p>
                <div class="surname_box mb-3">
                    <input type="password" class="in_surname" placeholder=" " name="password" required>
                    <label for="surname" class="surname_label">Password</label>
                </div>
                <p class="d-flex justify-content-center text-danger error"></p>
                <div class="d-flex justify-content-between">
                    <label for="">
                        <a href="/admin/register">
                            <!-- <i class="bi bi-arrow-left"></i> -->
                            <span>Tạo tài khoản mới</span>
                        </a>
                    </label>
                    <button type="submit" class="register_btn">Đăng nhập </button>
                </div>
            </form>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/admin/account.js') }}"></script>
</body>

</html>
