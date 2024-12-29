<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title', 'Trang Chủ')</title>
    <style>
        /* Global styles */
        body {
            background-color: #f4f4f4;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            font-size: 1.5em;
            text-align: center;
        }

        /* Navbar styles */
        .navbar {
            background-color: #343a40;
        }

        .navbar .nav-link {
            color: white;
            font-size: 1rem;
            text-transform: uppercase;
            margin-right: 10px;
        }

        .navbar .nav-link:hover {
            color: #ff5733; /* Highlight color */
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Content styles */
        .wrapper {
            padding: 20px;
            background-color: white;
            min-height: calc(100vh - 150px); /* Adjust content height */
        }

        /* Footer styles */
        footer {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    Cây cảnh
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <!-- Thêm logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/products">Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Đăng Nhập</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container-fluid">
    <div class="wrapper">
        <section class="content-body">
            @yield('content-body', 'Nội dung trang sẽ hiển thị tại đây!')
        </section>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Công Ty Cây Cảnh. All Rights Reserved.</p>
</footer>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
