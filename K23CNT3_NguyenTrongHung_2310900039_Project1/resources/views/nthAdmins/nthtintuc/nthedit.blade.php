@extends('Layout.admins._master')

@section('title', 'Chỉnh Sửa Tin Tức')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Tin Tức</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa tin tức -->
                    <form action="{{ route('nthAdmins.nthtintuc.nthEditSubmit', $nthtinTuc->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="nthTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" name="nthTieuDe" class="form-control" value="{{ old('nthTieuDe', $nthtinTuc->nthTieuDe) }}">
                            @error('nthTieuDe')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="nthMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" name="nthMoTa" class="form-control" value="{{ old('nthMoTa', $nthtinTuc->nthMoTa) }}">
                            @error('nthMoTa')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="nthNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea name="nthNoiDung" class="form-control" rows="5">{{ old('nthNoiDung', $nthtinTuc->nthNoiDung) }}</textarea>
                            @error('nthNoiDung')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="nthHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="nthHinhAnh" class="form-control">
                            @if($nthtinTuc->nthHinhAnh)
                                <img src="{{ asset('storage/' . $nthtinTuc->nthHinhAnh) }}" alt="Tin tức {{ $nthtinTuc->nthTieuDe }}" width="200" class="mt-2">
                            @endif
                            @error('nthHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày đăng -->
                        <div class="mb-3">
                            <label for="nthNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" name="nthNgayDangTin" class="form-control" value="{{ old('nthNgayDangTin', $nthtinTuc->nthNgayDangTin) }}">
                            @error('nthNgayDangTin')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="nthNgayCapNhap" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" name="nthNgayCapNhap" class="form-control" value="{{ old('nthNgayCapNhap', $nthtinTuc->nthNgayCapNhap) }}">
                            @error('nthNgayCapNhap')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1" {{ old('nthTrangThai', $nthtinTuc->nthTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="nthTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" {{ old('nthTrangThai', $nthtinTuc->nthTrangThai) == 0 ? 'checked' : '' }} />
                                <label for="nthTrangThai0">Hiển Thị</label>
                            </div>
                            @error('nthTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách tin tức -->
                    <a href="{{ route('nthAdmins.nthtintuc') }}" class="btn btn-secondary">Quay lại </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection