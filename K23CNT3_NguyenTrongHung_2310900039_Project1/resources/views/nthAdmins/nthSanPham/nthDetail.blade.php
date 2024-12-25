@extends('Layout.admins._master')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chi Tiết Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <b>Mã sản phẩm:</b> {{ $nthsanpham->nthMaSanPham }}
                    </p>
                    <p class="card-text">
                        <b>Tên sản phẩm:</b> {{ $nthsanpham->nthTenSanPham }}
                    </p>
                    <p class="card-text">
                        <b>Hình Ảnh:</b><br>
                        <img src="{{ asset('storage/' . $nthsanpham->nthHinhAnh) }}" 
                            alt="Sản phẩm {{ $nthsanpham->nthMaSanPham }}" 
                            width="200" class="img-fluid">
                    </p>
                    <p class="card-text">
                        <b>Số Lượng:</b> {{ $nthsanpham->nthSoLuong }}
                    </p>
                    <p class="card-text">
                        <b>Đơn Giá:</b> {{ number_format($nthsanpham->nthDonGia, 0, ',', '.') }} VND
                    </p>
                    <p class="card-text">
                        <b>Mã Loại:</b> {{ $nthsanpham->nthMaLoai }}
                    </p>
                    <p class="card-text">
                        <b>Trạng Thái:</b>
                        @if($nthsanpham->nthTrangThai == 0)
                            <span class="badge bg-success">0</span>
                        @else
                            <span class="badge bg-danger">1</span>
                        @endif
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('nthAdmins.nthSanPham') }}" class="btn btn-primary">Quay lại </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection