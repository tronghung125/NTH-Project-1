@extends('_layouts.admins._master')
@section('title','Create  Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nthadmin.nthsanpham.nthCreateSubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nthMaSanPham" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="nthMaSanPham" name="nthMaSanPham" value="{{ old('nthMaSanPham') }}" >
                                @error('nthMaSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTenSanPham" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="nthTenSanPham" name="nthTenSanPham" value="{{ old('nthTenSanPham') }}" >
                                @error('nthTenSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="nthHinhAnh" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control" id="nthHinhAnh" name="nthHinhAnh" accept="image/*">
                                @error('nthHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="nthSoLuong" class="form-label">Số Lượng</label>
                                <input type="number" class="form-control" id="nthSoLuong" name="nthSoLuong" value="{{ old('nthSoLuong') }}" >
                                @error('nthSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthDonGia" class="form-label">Đơn Giá</label>
                                <input type="text" class="form-control" id="nthDonGia" name="nthDonGia" value="{{ old('nthDonGia') }}" >
                                @error('nthDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="nthMaLoai" name="nthMaLoai" value="{{ old('nthMaLoai') }}" >
                                @error('nthMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="0" checked/>
                                    <label for="nthTrangThai1"> Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="1"/>
                                    <label for="nthTrangThai0">Khóa</label>
                                </div>
                                @error('nthTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Thêm</button>
                            <a href="{{route('nthAdmins.nthSanPham')}}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection