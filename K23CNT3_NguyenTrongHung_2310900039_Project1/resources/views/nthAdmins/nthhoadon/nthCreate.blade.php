@extends('Layout.admins._master')
@section('title','Create Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nthAdmins.nthhoadon.nthCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nthMaHoaDon" class="form-label">Mã Hóa Đơn</label>
                                <input type="text" class="form-control" id="nthMaHoaDon" name="nthMaHoaDon" value="{{ old('nthMaHoaDon') }}" >
                                @error('nthMaHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthMaKhachHang" class="form-label">Khách Hàng</label>
                                <select name="nthMaKhachHang" id="nthMaKhachHang" class="form-control">
                                    @foreach ($nthkhachhang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nthHoTenKhachHang }}</option>
                                    @endforeach
                                </select>
                                @error('nthMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthNgayHoaDon" class="form-label">Ngày Hóa Đơn</label>
                                <input type="date" class="form-control" id="nthNgayHoaDon" name="nthNgayHoaDon" value="{{ old('nthNgayHoaDon') }}" >
                                @error('nthNgayHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthNgayNhan" class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control" id="nthNgayNhan" name="nthNgayNhan" value="{{ old('nthNgayNhan') }}" >
                                @error('nthNgayNhan')
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
                                <input type="Email" class="form-control" id="nthEmail" name="nthEmail" value="{{ old('nthEmail') }}" >
                                @error('nthEmail')
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
                                <label for="nthTongTriGia" class="form-label">Tổng Giá Trị</label>
                                <input type="number" class="form-control" id="nthTongTriGia" name="nthTongTriGia" value="{{ old('nthTongTriGia') }}" >
                                @error('nthTongTriGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" checked/>
                                    <label for="nthTrangThai1">Chờ Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1"/>
                                    <label for="nthTrangThai0">Đang Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai2" name="nthTrangThai" value="2"/>
                                    <label for="nthTrangThai0">Đã hoàn Thành</label>
                                </div>
                                @error('nthTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Thêm</button>
                            <a href="{{route('nthAdmins.nthhoadon')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection