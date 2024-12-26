
@extends('Layout.admins._master')
@section('title','Thêm Mới Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nthAdmins.nthkhachhang.nthCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nthMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="nthMaKhachHang" name="nthMaKhachHang" value="{{ old('nthMaKhachHang') }}" >
                                @error('nthMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nthHoTenKhachHang" name="nthHoTenKhachHang" value="{{ old('nthHoTenKhachHang') }}" >
                                @error('nthHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nthEmail" name="nthEmail" value="{{ old('nthEmail') }}" >
                                @error('nthEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="nthMatKhau" name="nthMatKhau" value="{{ old('nthMatKhau') }}" >
                                @error('nthMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nthDienThoai" name="nthDienThoai" value="{{ old('nthDienThoai') }}" >
                                @error('nthDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nthDiaChi" name="nthDiaChi" value="{{ old('nthDiaChi') }}" >
                                @error('nthDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="nthNgayDangKy" name="nthNgayDangKy" value="{{ old('nthNgayDangKy') }}" >
                                @error('nthNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" checked/>
                                    <label for="nthTrangThai1"> Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1"/>
                                    <label for="nthTrangThai0">Tạm Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai2" name="nthTrangThai" value="2"/>
                                    <label for="nthTrangThai0">Khóa</label>
                                </div>
                                @error('nthTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Thêm</button>
                            <a href="{{route('nthAdmins.nthkhachhang')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
