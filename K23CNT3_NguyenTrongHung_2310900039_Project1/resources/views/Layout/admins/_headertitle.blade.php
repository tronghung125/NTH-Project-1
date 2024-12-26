<header class="d-flex justify-content-between align-items-center bg-dark text-white p-3" style="margin-left: 1000px;">
    
    <div class="d-flex align-items-center">
        <button class="btn btn-link text-white me-3" aria-label="Notifications">
            <i class="fas fa-bell"></i>
        </button>
        <div class="dropdown">
            <button class="btn btn-link text-white dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle"></i> {{ Auth::user()->name ?? 'Cài đặt' }}
            </button>
                <ul class="dropdown-menu" aria-labelledby="userMenu">
                    <li><a class="dropdown-item" href="">Hồ sơ</a></li>
                    <li><a class="dropdown-item" href="">Cài đặt chính</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('admins.nthLogout')}}">Đăng xuất</a></li>
                </ul> 
        </div>
        <button class="btn btn-link text-white ms-3" aria-label="Settings">
            <i class="fas fa-cogs"></i>
        </button>
    </div>
</header>