@extends('Layout.admins._master')
@section('title','Danh Sách Hoá Đơn')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Hoá Đơn</h1>
                <a href="{{route('nthAdmins.nthhoadon.nthCreate')}}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách hàng</th>
                        <th>Ngày Hóa Đơn</th>
                        <th>Ngày Nhận</th>
                        <th>Họ Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng Giá Trị</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nthhoadons as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->nthMaHoaDon }}</td>
                            <td>{{ $item->nthMaKhachHang }}</td>
                            <td>{{ $item->nthNgayHoaDon }}</td>
                            <td>{{ $item->nthNgayNhan }}</td>
                            <td>{{ $item->nthHoTenKhachHang }}</td>
                            <td>{{ $item->nthEmail }}</td>
                            <td>{{ $item->nthDienThoai }}</td>
                            <td>{{ $item->nthDiaChi }}</td>
                            <td>{{ number_format($item->nthTongTriGia, 0, ',', '.') }} VND</td>
                            
                            <td>
                                @if($item->nthTrangThai == 0)
                                    <span class="badge bg-primary">Chờ Xử Lý</span>
                                @elseif($item->nthTrangThai == 1)
                                    <span class="badge bg-warning">Đang Xử Lý</span>
                                @else
                                    <span class="badge bg-success">Đã Hoàn Thành</span>
                                @endif
                            </td>
                            <td>
                                <a href="/nthadmins/nth-hoa-don/nth-detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>
                                <a href="/nthadmins/nth-hoa-don/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                <a href="/nthadmins/nth-hoa-don/nth-delete/{{$item->id}}" class="btn btn-danger"
                                onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                            </td>
                            
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Chưa có thông tin khách hàng
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection