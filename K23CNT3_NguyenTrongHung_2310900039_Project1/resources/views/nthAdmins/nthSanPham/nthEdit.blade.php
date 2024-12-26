@extends('layout.admins._master')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('nthAdmins.nthSanPham.ntheditsubmit', $nthsanpham->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nthMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" id="nthMaSanPham" name="nthMaSanPham" class="form-control" value="{{ old('nthMaSanPham', $nthsanpham->nthMaSanPham) }}">
                            @error('nthMaSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nthTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" id="nthTenSanPham" name="nthTenSanPham" class="form-control" value="{{ old('nthTenSanPham', $nthsanpham->nthTenSanPham) }}">
                            @error('nthTenSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nthHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" id="nthHinhAnh" name="nthHinhAnh" class="form-control">
                            @if($nthsanpham->nthHinhAnh)
                                <img src="{{ asset('storage/' . $nthsanpham->nthHinhAnh) }}" alt="Sản phẩm {{ $nthsanpham->nthTenSanPham }}" width="200" class="mt-2">
                            @else
                                <img src="{{ asset('images/default.png') }}" alt="Hình ảnh mặc định" width="200" class="mt-2">
                            @endif
                            @error('nthHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nthSoLuong" class="form-label">Số lượng</label>
                            <input type="number" id="nthSoLuong" name="nthSoLuong" class="form-control" value="{{ old('nthSoLuong', $nthsanpham->nthSoLuong) }}">
                            @error('nthSoLuong')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nthDonGia" class="form-label">Đơn giá</label>
                            <input type="number" id="nthDonGia" name="nthDonGia" class="form-control" value="{{ old('nthDonGia', $nthsanpham->nthDonGia) }}">
                            @error('nthDonGia')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nthMaLoai" class="form-label">Loại Danh Mục</label>
                            <select id="nthMaLoai" name="nthMaLoai" class="form-control">
                                @foreach ($nthloaisanpham as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('nthMaLoai', $nthsanpham->nthMaLoai) == $item->id ? 'selected' : '' }}>
                                        {{ $item->nthTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nthMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1" {{ old('nthTrangThai', $nthsanpham->nthTrangThai) == 1 ? 'checked' : '' }}>
                                <label for="nthTrangThai1">Hoạt động</label>
                                &nbsp;
                                <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" {{ old('nthTrangThai', $nthsanpham->nthTrangThai) == 0 ? 'checked' : '' }}>
                                <label for="nthTrangThai0">Không hoạt động</label>
                            </div>
                            @error('nthTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('nthAdmins.nthSanPham') }}" class="btn btn-secondary">Quay lại </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
