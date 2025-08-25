@extends('layouts.app')

@section('title', 'Đăng Ký Tài Khoản')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">Đăng Ký Tài Khoản</h2>
        
        <form action="#" method="POST">
            @csrf <!-- Token bảo mật form -->

            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Địa chỉ Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
        </form>
    </div>
</div>
@endsection
