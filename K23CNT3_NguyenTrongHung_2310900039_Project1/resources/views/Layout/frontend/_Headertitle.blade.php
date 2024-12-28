<header class="bg-dark text-white py-3 sticky-header">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/" class="logo text-white text-decoration-none">
            <img src="{{ asset('storage/img/san_pham/logoD.jpg') }}" alt="Logo" class="img-fluid" style="max-height: 50px;">
        </a>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/vtd-user/giohang" title="Giỏ hàng">
                            <i class="fa fa-shopping-cart"></i> 
                            <span class="cart-count badge bg-warning">{{ count(session('cart', [])) }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
    header {
        background-color: #2d12df; /* Dark background color */
        position: sticky; /* Sticky header */
        top: 0; 
        z-index: 1000; /* Stay on top */
        width: 100%;
    }

    .logo img {
        max-height: 60px;
    }

    .navbar-nav .nav-link {
        font-size: 1.1rem; 
        padding: 0 20px;
        text-transform: uppercase;
    }

    .navbar-nav .nav-link:hover {
        color: #d4f15e;
    }

    .navbar-toggler-icon {
        background-color: #e5b0b0; /* Toggle icon color */
    }

    @media (max-width: 992px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin-top: 10px;
        }
    }

    .nav-link .fa-shopping-cart {
        font-size: 1.5rem;
    }

    .cart-count {
        font-size: 0.9rem;
        margin-left: 5px;
    }
</style>
