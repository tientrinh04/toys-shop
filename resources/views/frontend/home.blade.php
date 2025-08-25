@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <div class="text-center">
        <h1>Chào mừng đến với Đồ Chơi Xinh!</h1>
        <p class="lead">Nơi bạn tìm thấy niềm vui cho bé yêu.</p>
        <a href="{{ route('products') }}" class="btn btn-primary btn-lg">Xem sản phẩm</a>
    </div>
@endsection
