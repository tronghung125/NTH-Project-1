
@extends('Layout.admins._master')
@section('title','Danh Sách Khách Hàng')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Khách Hàng</h1>
                <a href="{{route('nthAdmins.nthkhachhang.nthcreate')}}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Khách Hàng</th>
                        <th>Họ Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($khachhangs as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->nthMaKhachHang }}</td>
                            <td>{{ $item->nthHoTenKhachHang }}</td>
                            <td>{{ $item->nthEmail }}</td>
                            <td>{{ $item->nthMatKhau }}</td>
                            <td>{{ $item->nthDienThoai }}</td>
                            <td>{{ $item->nthDiaChi }}</td>
                            <td>{{ $item->nthNgayDangKy }}</td>
                            
                            <td>
                                @if($item->nthTrangThai == 0)
                                    <span class="badge bg-success">Hoạt Động</span>
                                @elseif($item->nthTrangThai == 1)
                                    <span class="badge bg-warning">Tạm Khóa</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span>
                                @endif
                            </td>
                            <td>
                                <a href="/nthadmins/nth-khach-hang/nth-detail/{{$item->id}}" class="btn btn-success">Xem</a>
                                <a href="/nthadmins/nth-khach-hang/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                <a href="/nthadmins/nth-khach-hang/nth-delete/{{$item->id}}" class="btn btn-danger"
                                onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                            </td>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Chưa có thông tin Khách Hàng 
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
