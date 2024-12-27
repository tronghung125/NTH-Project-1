@extends('Layout.admins._master')
@section('title','Xem Thông Tin Chi Tiết Hóa Đơn')
    
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
                                <b>Hóa Đơn ID:</b>
                                {{$nthcthoadon->nthHoaDonID	}}
                            </p>
                            <p class="card-text">
                                <b>Sản Phầm ID:</b>
                                {{$nthcthoadon->nthSanPhamID}}
                            </p>
                            <p class="card-text">
                                <b>Số Lượng Mua:</b>
                                {{$nthcthoadon->nthSoLuongMua}}
                            </p>

                            <p class="card-text">
                                <b>Đơn Giá Mua:</b>
                 
                                {{ number_format($nthcthoadon->nthDonGiaMua, 0, ',', '.') }} VND
                            </p>

                            <p class="card-text">
                                <b>Thành Tiền:</b>
                                {{ number_format($nthcthoadon->nthThanhTien, 0, ',', '.') }} VND
                            </p>

                            
                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nthcthoadon->nthTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nthAdmins.nthcthoadon')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection