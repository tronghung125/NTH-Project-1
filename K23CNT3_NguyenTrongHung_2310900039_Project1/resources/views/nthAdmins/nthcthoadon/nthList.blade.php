@extends('Layout.admins._master')
@section('title','Danh Sách Chi Tiết Hóa Đơn')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Chi Tiết Hóa Đơn</h1>
                <a href="/nthadmins/nth-ct-hoa-don/nth-create" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hóa Đơn ID</th>
                        <th>Sản Phẩm ID</th>
                        <th>Số Lượng Mua</th>
                        <th>Đơn Giá Mua</th>
                        <th>Thành Tiền </th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nthcthoadons as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->nthHoaDonID }}</td>
                            <td>{{ $item->nthSanPhamID }}</td>
                            <td>{{ $item->nthSoLuongMua }}</td>
                            <td>{{ $item->nthDonGiaMua }}</td>
                            <td>{{ $item->nthThanhTien }}</td>
                        
                            <td>
                                @if($item->nthTrangThai == 0)
                                    <span class="badge bg-primary">Hoàn Thành</span>
                                @elseif($item->nthTrangThai == 1)
                                    <span class="badge bg-success">Trả Lại</span>
                                @else
                                    <span class="badge bg-danger">Xóa</span>
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
                                Chưa có thông tin Hóa Đơn
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection