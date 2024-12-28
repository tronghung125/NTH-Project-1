@extends('Layout.admins._master')

@section('title', 'Tạo Tin Tức')

@section('content-body')
<div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('nthAdmins.nthtintuc.nthCreateSubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Thêm Mới Tin Tức</h1>
                    </div>
                    <div class="card-body">
                        <!-- Mã Tin Tức -->
                        <div class="mb-3">
                            <label for="nthMaTT" class="form-label">Mã Tin Tức</label>
                            <input type="text" class="form-control" id="nthMaTT" name="nthMaTT" value="{{ old('nthMaTT') }}">
                            @error('nthMaTT')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="nthTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" class="form-control" id="nthTieuDe" name="nthTieuDe" value="{{ old('nthTieuDe') }}">
                            @error('nthTieuDe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="nthMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" class="form-control" id="nthMoTa" name="nthMoTa" value="{{ old('nthMoTa') }}">
                            @error('nthMoTa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="nthNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea class="form-control" id="nthNoiDung" name="nthNoiDung" rows="5">{{ old('nthNoiDung') }}</textarea>
                            @error('nthNoiDung')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="nthHinhAnh" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" id="nthHinhAnh" name="nthHinhAnh" accept="image/*">
                            @error('nthHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày đăng tin -->
                        <div class="mb-3">
                            <label for="nthNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" class="form-control" id="nthNgayDangTin" name="nthNgayDangTin" value="{{ old('nthNgayDangTin') }}">
                            @error('nthNgayDangTin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="nthNgayCapNhap" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" class="form-control" id="nthNgayCapNhap" name="nthNgayCapNhap" value="{{ old('nthNgayCapNhap') }}">
                            @error('nthNgayCapNhap')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
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
                        <button class="btn btn-success">Create</button>
                        <a href="{{ route('nthAdmins.nthtintuc') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection