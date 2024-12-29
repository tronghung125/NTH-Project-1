<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <!-- Số điện thoại hoặc logo -->
        <a class="navbar-brand text-white" href="/">
            <img src="{{ asset('storage/img/logo.jpg') }}" alt="Logo" style="max-height: 40px; margin-right: 10px;">
        </a>
        <!-- Nút toggle menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menu
        </button>
        <!-- Menu -->
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
                <li class="nav-item">
                    <a class="nav-link" href="/cart" title="Giỏ hàng">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart-count badge bg-warning">{{ count(session('cart', [])) }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Custom styles for the navbar */
.navbar-custom {
    background-color: #1c31ec; /* Dark background for navbar */
    padding: 15px 0; /* Padding for a more spacious look */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for navbar */
}

.navbar-custom .navbar-brand {
    font-size: 1.3rem;
    font-weight: bold;
    color: #e5e24c; /* Highlight color for brand */
    text-transform: uppercase;
    display: flex;
    align-items: center; /* Align text and logo */
}

.navbar-custom .navbar-toggler {
    border-color: #e5e24c; /* Border color for the toggle button */
}

.navbar-custom .navbar-toggler-icon {
    background-color: #e5e24c; /* Change color of the toggle icon */
    width: 20px;
    height: 20px;
}

.navbar-custom .navbar-nav .nav-item .nav-link {
    font-size: 1.1rem;
    color: #f8f9fa; /* Light text color for nav links */
    padding: 10px 20px;
    text-transform: uppercase;
    transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition on hover */
}

/* Navbar links hover effect */
.navbar-custom .navbar-nav .nav-item .nav-link:hover {
    color: #ff5733; /* Change color on hover */
    background-color: #f8f9fa; /* Light background on hover */
    border-radius: 4px;
}

/* Styling for active links */
.navbar-custom .navbar-nav .nav-item .nav-link.active {
    color: #ff5733;
    font-weight: bold;
}

/* Cart icon */
.navbar-custom .navbar-nav .nav-item .nav-link .fa-shopping-cart {
    font-size: 1.3rem;
    margin-right: 5px;
}

/* Cart count badge */
.navbar-custom .navbar-nav .nav-item .nav-link .cart-count {
    font-size: 0.8rem;
    margin-left: 5px;
    vertical-align: top;
}

/* For mobile devices */
@media (max-width: 992px) {
    .navbar-custom .navbar-nav {
        text-align: center; /* Center align menu items on mobile */
    }

    .navbar-custom .navbar-nav .nav-item {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}
</style>
