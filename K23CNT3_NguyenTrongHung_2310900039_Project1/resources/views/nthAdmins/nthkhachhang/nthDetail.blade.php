@extends('Layout.admins._master')
@section('title','Xem Thông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Khách Hàng</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$nthkhachhang->nthMaKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$nthkhachhang->nthHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$nthkhachhang->nthEmail}}
                            </p>

                            <p class="card-text">
                                <b>Mật Khẩu:</b>
                                {{$nthkhachhang->nthMatKhau}}
                            </p>

                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$nthkhachhang->nthDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$nthkhachhang->nthDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Đăng Ký:</b>
                                {{$nthkhachhang->nthNgayDangKy}}
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nthkhachhang->nthTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nthAdmins.nthkhachhang')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection