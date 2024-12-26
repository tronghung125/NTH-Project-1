@extends('Layout.admins._master')
@section('title','Xem Thông Tin Quản Trị Viên')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Quản Trị Viên</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Tài Khoản:</b>
                                {{$nthquantri->nthTaiKhoan}}
                            </p>
                            <p class="card-text">
                                <b>Mật Khẩu:</b>
                                {{$nthquantri->nthMatKhau}}
                            </p>
                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nthquantri->nthTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nthAdmins.nthquantri')}}" class="btn btn-primary"> Quay lại</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection