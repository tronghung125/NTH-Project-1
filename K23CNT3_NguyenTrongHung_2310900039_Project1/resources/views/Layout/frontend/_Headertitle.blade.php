<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white py-3 sticky-header">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="logo">
                <a href="/" class="text-white text-decoration-none">
                    <img src="{{ asset('storage/img/san_pham/logoD.jpg') }}" alt="Logo" class="img-fluid" style="max-height: 50px;">
                </a>
            </div>
            <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Trang Chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">Giới Thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="/products">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Liên Hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Đăng Nhập</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart" title="Giỏ hàng">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="cart-count badge bg-warning">{{ count(session('cart', [])) }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} Công Ty TNHH Cây Cảnh Nhà Xanh.
    </footer>
</body>
</html>
