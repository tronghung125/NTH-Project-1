@extends('Layout.admins._master')
@section('title','Xem Hoá Đon')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>Mã Hóa Đơn:</b>
                                {{$nthhoadon->nthMaHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$nthhoadon->nthMaKhachHang}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Hóa Đơn:</b>
                                {{$nthhoadon->nthNgayHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Nhận:</b>
                                {{$nthhoadon->nthNgayNhan}}
                            </p>


                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$nthhoadon->nthHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$nthhoadon->nthEmail}}
                            </p>


                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$nthhoadon->nthDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$nthhoadon->nthDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Tổng Giá Trị:</b>
                                {{ number_format($nthhoadon->nthTongGiaTri, 0, ',', '.') }} VND
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nthhoadon->nthTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nthAdmins.nthhoadon')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection