@extends('Layout.admins._master')
@section('title','Sửa Thông Tin Khách Hàng')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nthAdmins.nthkhachhang.nthEditSubmit', ['id' => $nthkhachhang->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $nthkhachhang->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa Thông Tin Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nthMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="nthMaKhachHang" name="nthMaKhachHang" value="{{ $nthkhachhang->nthMaKhachHang }}" >
                                @error('nthMaKhachHang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nthHoTenKhachHang" name="nthHoTenKhachHang" value="{{ old('nthHoTenKhachHang', $nthkhachhang->nthHoTenKhachHang) }}" >
                                @error('nthHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nthEmail" name="nthEmail" value="{{ old('nthEmail', $nthkhachhang->nthEmail) }}" >
                                @error('nthEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="nthMatKhau" name="nthMatKhau" value="{{ old('nthMatKhau', $nthkhachhang->nthMatKhau) }}" >
                                @error('nthMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nthDienThoai" name="nthDienThoai" value="{{ old('nthDienThoai', $nthkhachhang->nthDienThoai) }}" >
                                @error('nthDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nthDiaChi" name="nthDiaChi" value="{{ old('nthDiaChi', $nthkhachhang->nthDiaChi) }}" >
                                @error('nthDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="nthNgayDangKy" name="nthNgayDangKy" value="{{ old('nthNgayDangKy', $nthkhachhang->nthNgayDangKy) }}" >
                                @error('nthNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" {{ old('nthTrangThai', $nthkhachhang->nthTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="nthTrangThai0">Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1" {{ old('nthTrangThai', $nthkhachhang->nthTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="nthTrangThai1">Tạm Khóa</label>
                           
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai2" name="nthTrangThai" value="2" {{ old('nthTrangThai', $nthkhachhang->nthTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="nthTrangThai0">Khóa</label>
                                </div>
                                @error('nthTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('nthAdmins.nthkhachhang') }}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection