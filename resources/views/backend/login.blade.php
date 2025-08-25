@extends('layouts.app')

@section('title', 'Đăng Nhập')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <h2 class="mb-4 text-center">Đăng Nhập</h2>

        <form action="{{ route('auth.login.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Địa chỉ Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
        </form>

        <div class="mt-3 text-center">
            <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></p>
        </div>
    </div>
</div>
@endsection
