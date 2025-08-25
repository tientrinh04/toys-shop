<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Cửa hàng Đồ Chơi')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Đồ Chơi Xinh</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('promotions') }}">Khuyến mãi</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart') }}">
                            <i class="bi bi-cart3"></i> Giỏ hàng
                        </a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form action="{{ route('auth.logout') }}" method="GET" class="px-3 py-1">
                                        <button class="dropdown-item text-danger" type="submit">Đăng xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-primary ms-2" href="{{ route('register') }}">Đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-success ms-2" href="{{ route('auth.login') }}">Đăng nhập</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 Đồ Chơi Xinh - Mọi quyền được bảo lưu.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
